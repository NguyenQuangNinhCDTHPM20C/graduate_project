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

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            
            $existingUser = Account::where('email', $user->email)->first();
            if ($existingUser) {
                $existingUser->qr_token = bcrypt($existingUser->phone_number.$existingUser->email.Str::random(40));
                $existingUser->save();
                session(['account' => $existingUser]);
                session(['auth_check'=>true]);
            } else {
                $account = new Account;
                $account->name = $user->name;
                $account->username = explode('@', $user->email)[0];
                $account->email = $user->email;
                $account->password = bcrypt(Str::random(16));
                $account->photo = $user->avatar;
                $account->role = 2;
                $account->google_id = $user->id;
                $account->qr_token = bcrypt($account->phone_number.$account->email.Str::random(40));
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