<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\EmailVerification;
use App\Mail\EmailVerificationAdmin;
use Illuminate\Http\Request;
use App\Models\Account;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\Api\GoogleController;
use App\Http\Controllers\Api\FacebookController;
class AuthController extends Controller
{
    //Auth for Admin
    public function showLoginFormAdmin()
    {
        return view('Admin.pages.auth.login');
    }
    //Auth for Public
    public function showLoginFormPublic()
    {
        return view('public.pages.auth.login');
    }
    
    public function login_admin(Request $request){
        $account = Account::where('email', $request->email)->first();
        
        if ($account && Hash::check($request->password, $account->password)) {
            if($account->role == 1 && $account->email_verified_at != null)
             {
                session(['account' => $account]); // Lưu tên người dùng vào session
                session(['auth_check_admin'=>true]);
                $account->qr_token = bcrypt($account->phone_number.$account->email.Str::random(40));
                $account->save();
                return redirect()->route('index');
            }
            else{
                return back()->withErrors(['error' => 'Tài khoản chưa xác thực email hoặc không hợp lệ.']);
            }
        }
            return back()->withErrors(['error' => 'Email hoặc mật khẩu không đúng.']);
    }

    public function login_public(Request $request){
        $account = Account::where('email', $request->email)->first();
        
        if ($account && Hash::check($request->password, $account->password)) {
            if($account->role == 2 && $account->email_verified_at != null)
             {
                session(['account' => $account]); // Lưu tên người dùng vào session
                session(['auth_check'=>true]);
                $account->qr_token = bcrypt($account->phone_number.$account->email.Str::random(40));
                $account->save();
                return redirect()->route('home');
            }
            else{
                return back()->withErrors(['error' => 'Tài khoản chưa xác thực email hoặc không hợp lệ.']);
            }
        }
            return back()->withErrors(['error' => 'Email hoặc mật khẩu không đúng.']);
    }
    
    public function check_qr($qrToken)
    {
        $account = Account::where('qr_token', '$2y$10$gmiOA3GJiMXgJ/.85EpYwejxxCTE5afj8FWcf6mSbFcdjrAjjQAhC')->first();
        dd($account);
        if ($account) {
            if ($account->role == 2) {
                session(['account' => $account]);
                session(['auth_check' => true]);

                //Check existing account is google account
                if ($account->google_id !== null) {
                    $googleController = new GoogleController;
                    $googleRequest = Request::create('/login/google', 'GET');
                    return $googleController->callAction('handleGoogleCallback', [$googleRequest]);
                }
                //Check existing account is facebook account
                if ($account->facebook_id !== null) {
                    $facebookController = new FacebookController;
                    $facebookRequest = Request::create('/login/facebook', 'GET');
                    return $facebookController->callAction('handleFacebookCallback', [$facebookRequest]);
                }

                return redirect()->route('home');
            }

            return redirect()->route('public.login')->with('error', 'Vui lòng đăng nhập trước');
        }
    }

    public function logout_public(Request $request)
    {
        Auth::logout();

        $account = Account::where('id', session('account')->id)->first();
        $account->qr_token = null;
        $account->save();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

       
        return redirect()->route('public.login');
    }
    
    public function logout_admin(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

       
        return redirect()->route('admin.login');
    }

    public function showRegisterForm()
    {
        return view('public.pages.auth.logup');
    }

    public function register(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'email' => 'required|email|unique:accounts',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);
        $existing_email = Account::where('email', $validatedData['email'])->first();
        if(!$existing_email){
        // Generate verification code
        $verificationCode = Str::random(40);
        // Create new account
        $account = new Account;
        $account->username = explode('@', $validatedData['email'])[0];
        $account->email = $validatedData['email'];
        $account->password = bcrypt($validatedData['password']);
        $account->photo = 'assets/user/avt_defaut.png';
        $account->role = 2;
        $account->verification_token = $verificationCode;
        $account->save();

        // Send email verification
        Mail::to($account->email)->send(new EmailVerification($account, $verificationCode));
        $request->session()->flash('message', 'Đăng ký thành công, vui lòng xác nhận email!');
        }else{
            $request->session()->flash('error', 'Đăng ký thất bại, email đã được sử dụng!');
        }
        // Redirect to a success page or show a success message
        return redirect()->route('logup');
    }

    public function verifyEmail($token)
    {
        $account = Account::where('verification_token', $token)->first();

        if (!$account) {
            return redirect()->route('logup')->with('error', 'Invalid verification token.');
        }

        $account->email_verified_at = now();
        $account->verification_token = null;
        $account->save();

        // Chuyển hướng đến trang đăng nhập hoặc hiển thị thông báo xác minh thành công
        return redirect()->route('public.login')->with('success', 'Email verification successful. Please log in.');
    }

    public function showRegisterFormAdmin()
    {
        return view('Admin.pages.auth.logup');
    }

    public function register_admin(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'email' => 'required|email|unique:accounts',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);
        // Generate verification code
        $verificationCode = Str::random(40);
        // Create new account
        $account = new Account;
        $account->username = explode('@', $validatedData['email'])[0];
        $account->email = $validatedData['email'];
        $account->password = bcrypt($validatedData['password']);
        $account->role = 1;
        $account->verification_token = $verificationCode;
        $account->save();

        // Send email verification
        Mail::to($account->email)->send(new EmailVerificationAdmin($account, $verificationCode));

        // Redirect to a success page or show a success message
        return redirect()->route('admin.logup');
    }

    public function verifyEmailAdmin($token)
    {
        $account = Account::where('verification_token', $token)->first();

        if (!$account) {
            return redirect()->route('admin.logup')->with('error', 'Invalid verification token.');
        }

        $account->email_verified_at = now();
        $account->verification_token = null;
        $account->save();

        // Chuyển hướng đến trang đăng nhập hoặc hiển thị thông báo xác minh thành công
        return redirect()->route('admin.login')->with('success', 'Email verification successful. Please log in.');
    }

    public function showResetPassForm()
    {
        return view('public.pages.auth.reset-password');
    }
    
}