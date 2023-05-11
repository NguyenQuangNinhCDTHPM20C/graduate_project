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
        return view('public.pages.login');
    }
    
    protected function attemptLogin(Request $request)
    {
        $account = Account::where('username', $request->username)->first();
    
        if (!$account || !Hash::check($request->password, $account->password) || $account->role != 2) {
            return 1;
        }
    
        Auth::login($account, $request->remember);
    
        return 2;
    }

    public function login(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        // Attempt login
        if ($this->attemptLogin($request) == 2) {
            $account = auth()->user();
            $username = $account->username;
            $photo = $account->photo;
            session(['username' => $username]); // Lưu tên người dùng vào session
            session(['photo' => $photo]);
           
            return redirect()->route('home');
        }elseif ($this->attemptLogin($request) == 1) {
            $account = auth()->user();
            $username = $account->username;
            $photo = $account->photo;
            session(['username' => $username]); // Lưu tên người dùng vào session
            session(['photo' => $photo]);
            
            return redirect()->route('index');
        }
        
    
        return back()->withErrors([
            'username' => 'Tên đăng nhập hoặc mật khẩu không đúng.',
        ]);
    }
    

    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}