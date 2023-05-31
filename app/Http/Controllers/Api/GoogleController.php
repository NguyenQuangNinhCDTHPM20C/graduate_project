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
            
            // Tìm tài khoản dựa trên email của người dùng Google
            $existingUser = Account::where('email', $user->email)->first();
            if ($existingUser) {
                // Nếu tài khoản đã tồn tại, đăng nhập vào tài khoản
                session(['account' => $existingUser]); // Lưu tên người dùng vào session
                session(['auth_check'=>true]);
                return redirect()->route('home'); // Chuyển hướng đến trang dashboard hoặc trang chính của ứng dụng

            } else {
                // Tạo tên file duy nhất cho hình ảnh
                // $filename = uniqid() . '.' . pathinfo($user->avatar, PATHINFO_EXTENSION);

                // // Tải hình ảnh từ URL và lưu vào thư mục images
                // file_put_contents(public_path('assets/user/' . $filename), file_get_contents($user->avatar));
                $account = new Account;
                $account->username = explode('@', $user->email)[0];
                $account->email = $user->email;
                $account->password = bcrypt(Str::random(16));
                $account->photo = $user->avatar;
                $account->role = 2;
                $account->google_id = $user->id;
                $account->save();
                session(['account' => $account]); // Lưu tên người dùng vào session
                session(['auth_check'=>true]);
                return redirect()->route('home'); // Chuyển hướng đến trang dashboard hoặc trang chính của ứng dụng
            }
        } catch (\Exception $exception) {
            // Xử lý lỗi nếu có
            // dd($exception->getMessage());
            return redirect()->route('public.login')->with('error', 'Đăng nhập bằng Google thất bại.');
        }
    }

}