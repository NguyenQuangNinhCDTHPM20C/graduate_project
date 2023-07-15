<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\Api\GoogleController;
use App\Http\Controllers\Api\FacebookController;
use Illuminate\Support\Str;
use App\Mail\ChangedPassword;
use App\Mail\EmailVerification;
use App\Mail\ResetPassEmailVerification;
use App\Mail\ChangedPasswordAdmin;
use App\Mail\EmailVerificationAdmin;
use App\Mail\ResetPassEmailVerificationAdmin;
use Illuminate\Http\Request;
use App\Models\Account;

class AuthController extends Controller
{
    //=================Auth for Admin======================//
    public function showLoginFormAdmin()
    {
        return view('Admin.pages.auth.login');
    }

    public function login_admin(Request $request){
        $account = Account::where('email', $request->email)->first();
        
        if ($account && Hash::check($request->password, $account->password)) {
            if($account->role == 1 && $account->email_verified_at != null)
             {
                session(['account' => $account]);
                session(['auth_check_admin'=>true]);
                $account->save();
                session()->put('success', 'Đăng nhập thành công');
                return redirect()->route('index');
            }
            else{
                session()->put('error', 'Tài khoản chưa xác thực hoặc email không hợp lệ');
                return redirect()->back();
            }
        }
        session()->put('error', 'Email hoặc mật khẩu không đúng');
        return redirect()->back();
    }

    public function logout_admin(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function showRegisterFormAdmin()
    {
        return view('Admin.pages.auth.logup');
    }

    public function register_admin(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);
        $existing_email = Account::where('email', $validatedData['email'])->first();
        if(!$existing_email){
        $verificationCode = Str::random(40);
        $account = new Account;
        $account->username = explode('@', $validatedData['email'])[0];
        $account->email = $validatedData['email'];
        $account->password = bcrypt($validatedData['password']);
        $account->photo = 'assets/user/avt_defaut.png';
        $account->role = 1;
        $account->verification_token = $verificationCode;
        $account->save();
        Mail::to($account->email)->send(new EmailVerificationAdmin($account, $verificationCode));
        session()->put('success', 'Đăng ký thành công, vui lòng xác nhận Email!');
        }else{
            session()->put('error', 'Đăng ký thất bại, Email đã được sử dụng');
        }
        return redirect()->route('admin.logup');
    }

    public function verifyEmailAdmin($token)
    {
        $account = Account::where('verification_token', $token)->first();

        if (!$account) {
            return abort(404);
        }
        $account->email_verified_at = now();
        $account->verification_token = null;
        $account->save();
        session()->put('success', 'Xác minh thành công, vui lòng đăng nhập!');
        return redirect()->route('admin.login');
    }
    public function showInputEmailAdmin()
    {
        return view('admin.pages.auth.input-email');
    }

    public function showResetPassFormAdmin($id, $token)
    {
        $account = Account::where('id', $id)->where('verification_token', $token)->first();
        if(!$account){
            return abort(404);
        }
        return view('admin.pages.auth.reset-password', compact('account'));
    }
    
    public function SendEmailResetPassAdmin(Request $request){
        $email = $request->input('email');
        $verificationCode = Str::random(40);
        $account = Account::where('email', $email)->first();

        if (!$account) {
            session()->put('error', 'Email chưa được đăng kí !');
        }else{
            $account->verification_token = $verificationCode;
            $account->save();
            Mail::to($account->email)->send(new ResetPassEmailVerificationAdmin($account, $verificationCode));
            session()->put('success', 'Vui lòng xác minh đổi mật khẩu trong email!');
        }
        return redirect()->back();
    }

    public function resetPassAdmin(Request $request){
        $password = $request->input('password');
        $id = $request->input('account_id');
        $token = $request->input('token');
        $account = Account::where('id', $id)->where('verification_token', $token)->first();

        if (!$account) {
            session()->put('error', 'Đã có lỗi xảy ra');
            return abort(404);
        }
        $account->password = bcrypt($password);
        $account->verification_token = null;
        $account->save();
        session()->put('success', 'Đổi mật khẩu thành công');
        Mail::to($account->email)->send(new ChangedPasswordAdmin($account));
        return redirect()->route('index');
    }

    // =========================Auth for Public====================//
    public function showLoginFormPublic()
    {
        return view('public.pages.auth.login');
    }
    
    public function login_public(Request $request){
        $account = Account::where('email', $request->email)->first();
        
        if ($account && Hash::check($request->password, $account->password)) {
            if($account->role == 2 && $account->email_verified_at != null)
             {
                session(['account' => $account]);
                session(['auth_check'=>true]);
                $account->save();
                session()->put('success', 'Đăng nhập tài khoản thành công!');
                return redirect()->route('home');
            }
            else{
                session()->put('error', 'Tài khoản chưa xác thực email hoặc không hợp lệ.');
                return redirect()->back();
            }
        }
        session()->put('error', 'Email hoặc mật khẩu không đúng.');
        return redirect()->back();
    }

    public function logout_public(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('public.login');
    }
    
    

    public function showRegisterForm()
    {
        return view('public.pages.auth.logup');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);
        $existing_email = Account::where('email', $validatedData['email'])->first();
        if(!$existing_email){
        $verificationCode = Str::random(40);
        $account = new Account;
        $account->username = explode('@', $validatedData['email'])[0];
        $account->email = $validatedData['email'];
        $account->password = bcrypt($validatedData['password']);
        $account->photo = 'assets/user/avt_defaut.png';
        $account->role = 2;
        $account->verification_token = $verificationCode;
        $account->save();

        Mail::to($account->email)->send(new EmailVerification($account, $verificationCode));
        session()->put('success', 'Đăng ký thành công, vui lòng xác nhận Email!');
        return redirect()->back();
        }
        session()->put('error', 'Đăng ký thất bại, Email đã được sử dụng');
        return redirect()->back();
    }

    public function verifyEmail($token)
    {
        $account = Account::where('verification_token', $token)->first();

        if (!$account) {
            return abort(404);
        }

        $account->email_verified_at = now();
        $account->verification_token = null;
        $account->save();
        session()->put('success', 'Xác minh email thành công, vui lòng đăng nhập');
        return redirect()->route('public.login');
    }

    public function showInputEmail()
    {
        return view('public.pages.auth.input-email');
    }

    public function showResetPassForm($id, $token)
    {
        $account = Account::where('id', $id)->where('verification_token', $token)->first();
        if(!$account){
            return abort(404);
        }
        return view('public.pages.auth.reset-password', compact('account'));
    }
    
    public function SendEmailResetPass(Request $request){
        $email = $request->input('email');
        $verificationCode = Str::random(40);
        $account = Account::where('email', $email)->first();

        if (!$account) {
            session()->put('error', 'Email chưa được đăng kí !');
        }else{
            $account->verification_token = $verificationCode;
            $account->save();
            Mail::to($account->email)->send(new ResetPassEmailVerification($account, $verificationCode));
            session()->put('success', 'Vui lòng xác minh đổi mật khẩu trong email!');
        }
        return redirect()->back();
    }

    public function resetPass(Request $request){
        $password = $request->input('password');
        $id = $request->input('account_id');
        $token = $request->input('token');
        $account = Account::where('id', $id)->where('verification_token', $token)->first();

        if (!$account) {
            session()->put('error', 'Đã có lỗi xảy ra');
            return abort(404);
        }
        $account->password = bcrypt($password);
        $account->verification_token = null;
        $account->save();
        session()->put('success', 'Đổi mật khẩu thành công');
        Mail::to($account->email)->send(new ChangedPassword($account));
        if($account->role == 2)
        {
            session(['account' => $account]);
            session(['auth_check'=>true]);
            return redirect()->route('home');
        }
        else{
            session(['account' => $account]);
            session(['auth_check_admin'=>true]);
            return redirect()->route('index');
        }
        return redirect()->route('home');
    }
}