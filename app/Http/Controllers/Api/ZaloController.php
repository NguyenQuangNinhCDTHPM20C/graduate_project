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
use Zalo\Zalo;
use Zalo\ZaloEndpoint;
use Zalo\ZaloService;

class ZaloController extends Controller
{
    private $app_id, $app_secret, $callback_url;
    private $code_verifier;
    
    public function __construct()
    {
        $this->app_id = '2917019976083878743';
        $this->app_secret = 'EOrE7439qmfNxITQNLUv';
        $this->callback_url = 'http://localhost/callback/zalo';
    }
    
    public function base64UrlEncode($data) {
        $base64 = base64_encode($data);
        $urlSafe = strtr($base64, '+/', '-_');
        $urlSafe = rtrim($urlSafe, '=');
        return $urlSafe;
    }
    
    public function redirectToZalo()
    {
        $zaloConfig = [
            'app_id' => $this->app_id,
            'app_secret' => $this->app_secret,
            'callback_url' => $this->callback_url,
        ];

        $zalo = new Zalo($zaloConfig);
        $helper = $zalo->getRedirectLoginHelper();

        $callbackUrl = $this->callback_url;
        $codeVerifier = Str::random(32);
        // Mã hóa code verifier bằng SHA-256
        $codeVerifierHash = hash('sha256', $codeVerifier, true);
        $this->code_verifier = $codeVerifierHash;
        // $codeChallenge = Base64.encode(SHA-256.hash(ASCII($this->code_verifier))) ;       
        $state = uniqid(); // Sử dụng hàm uniqid() để tạo một chuỗi duy nhất

        $loginUrl = $helper->getLoginUrl($callbackUrl, $codeChallenge, $state);

        // Lưu trữ giá trị state vào session hoặc cơ sở dữ liệu
        session(['zalo_state' => $state]);

        // Chuyển hướng người dùng đến URL đăng nhập Zalo
        return redirect()->away($loginUrl);
    }
    
    public function handleZaloCallback(Request $request)
    {
        try {
            $zaloConfig = [
                'app_id' => $this->app_id,
                'app_secret' => $this->app_secret,
                'callback_url' => $this->callback_url,
            ];

            $zalo = new Zalo($zaloConfig);
            $helper = $zalo->getRedirectLoginHelper();
            $zaloToken = $helper->getZaloToken($this->code_verifier); // get zalo token
            $accessToken = $zaloToken->getAccessToken();

            if (!$accessToken) {
                return redirect()->route('public.login')->with('error', 'Đăng nhập bằng Zalo thất bại.');
            }

            $params = ['fields' => 'id,name,picture'];
            $response = $zalo->get(ZaloEndpoint::API_GRAPH_ME, $accessToken, $params);
            $result = $response->getDecodedBody(); // Thông tin người dùng từ Zalo

            // Tìm tài khoản dựa trên Zalo ID
            $existingUser = Account::where('zalo_id', $result['id'])->first();
            if ($existingUser) {
                // Nếu tài khoản đã tồn tại, đăng nhập vào tài khoản
                session(['account' => $existingUser]); // Lưu tên người dùng vào session
                session(['auth_check' => true]);
                return redirect()->route('home');
            } else {
                $account = new Account;
                $account->name = $result['name'];
                $account->username = Str::lower(str_replace(' ', '', $result['name']));
                $account->email = $result['id'] . '@zalo.com'; // Tạo một email giả
                $account->password = bcrypt(Str::random(16));
                $account->photo = $result['picture'];
                $account->role = 2;
                $account->zalo_id = $result['id'];
                $account->save();
                session(['account' => $account]); // Lưu tên người dùng vào session
                session(['auth_check' => true]);
                return redirect()->route('home'); // Chuyển hướng đến trang dashboard hoặc trang chính của ứng dụng
            }
        } catch (\Exception $exception) {
            // Xử lý lỗi nếu có
            dd($exception->getMessage());
            return redirect()->route('public.login')->with('error', 'Đăng nhập bằng Zalo thất bại.');
        }
    }
}