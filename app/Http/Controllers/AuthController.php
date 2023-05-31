<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\EmailVerification;
use App\Mail\EmailVerificationAdmin;
use Illuminate\Http\Request;
use App\Models\Account;
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
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $account = Account::where('email', $request->email)->first();
        if(!$account)
            return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng.']);
        if($account->role == 1)
        {
        session(['account' => $account]); // Lưu tên người dùng vào session
        session(['auth_check_admin'=>true]);
            return redirect()->route('index');}
            
    }

    public function login_public(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $account = Account::where('email', $request->email)->first();
        if($account->role == 2 && $account->email_verified_at != null)
        {
        session(['account' => $account]); // Lưu tên người dùng vào session
        session(['auth_check'=>true]);
            return redirect()->route('home');}
            return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng.']);
    }

    public function logout_public(Request $request)
    {
        Auth::logout();

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
        // Generate verification code
        $verificationCode = Str::random(40);
        // Create new account
        $account = new Account;
        $account->username = explode('@', $validatedData['email'])[0];
        $account->email = $validatedData['email'];
        $account->password = bcrypt($validatedData['password']);
        $account->role = 2;
        $account->verification_token = $verificationCode;
        $account->save();

        // Send email verification
        Mail::to($account->email)->send(new EmailVerification($account, $verificationCode));

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
}