<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Account;
class AuthController extends Controller
{
    //Auth for Admin
    public function showLoginFormAdmin()
    {
        return view('Admin.pages.login');
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
        if($account->role == 1)
        {
        session(['account' => $account]); // Lưu tên người dùng vào session
        session(['auth_check_admin'=>true]);
            return redirect()->route('index');}
            return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng.']);
    }

    public function login_public(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $account = Account::where('email', $request->email)->first();
        if($account->role == 2)
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
}