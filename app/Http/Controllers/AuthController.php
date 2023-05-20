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

    public function login(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $idForm = $request->input('id_form');
        $account = Account::where('email', $request->email)->first();
        $id_user = $account->id;
        $username = $account->username;
        $photo = $account->photo;
        session(['id_user' => $id_user]);
        session(['username' => $username]); // Lưu tên người dùng vào session
        session(['photo' => $photo]);
        if ($account->role != 2) {
            if($idForm != 1) {
                return back()->withErrors([
                    'email' => 'Email hoặc mật khẩu không đúng.',
                ]);
            }
            return redirect()->route('index');
        }   
       
            return redirect()->route('home');
    }

    

    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('public.login');
    }

}