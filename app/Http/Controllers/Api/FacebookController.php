<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use GuzzleHttp\Client;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();

            $existingUser = Account::where('email', $user->email)->first();
            if ($existingUser) {
                session(['account' => $existingUser]); 
                session(['auth_check'=>true]);
            } else {
                $account = new Account;
                $account->name = $user->name;
                $account->username = Str::lower(Str::replace(' ', '', $user->name));
                $account->email = $user->email;
                $account->password = bcrypt(Str::random(16));
                $account->photo = $user->avatar;
                $account->role = 2;
                $account->facebook_id = $user->id;
                $account->save();
                session(['account' => $account]); 
                session(['auth_check'=>true]);
            }
            session()->put('success', 'Đăng nhập thành công!');
            return redirect()->route('home');
        } catch (\Exception $exception) {
            session()->put('error', 'Đăng nhập thất bại.');
            return redirect()->route('public.login');
        }
    }
}