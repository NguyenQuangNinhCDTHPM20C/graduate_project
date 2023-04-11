@extends('Admin.layouts.auth')

@section('title', 'Double-N shop | Admin Management')

@section('content')

<body class="account-page">
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>
    <div class="main-wrapper">
        <Form action="https://dreamspos.dreamguystech.com/laravel/template/public/custom-login" method="POST"
            class="account-content">
            <input type="hidden" name="_token" value="ssZZWhzm9uZat9PBPxiE0kP7M5PdK4136kXE9pG0">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <div class="login-logo logo-normal">
                            <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/logo.png"
                                alt="img">
                        </div>
                        <a href="https://dreamspos.dreamguystech.com/laravel/template/public/index"
                            class="login-logo logo-white">
                            <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/logo-white.png"
                                alt="">
                        </a>
                        <div class="login-userheading">
                            <h3>Sign In</h3>
                            <h4>Please login to your account</h4>
                        </div>
                        <div class="form-login">
                            <label>Email</label>
                            <div class="form-addons">
                                <input type="text" name="email" id="Email" value="admin@example.com">
                                <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/mail.svg"
                                    alt="img">
                            </div>
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input" name="password" id="password" value="123456">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-login">
                            <div class="alreadyuser">
                                <h4><a href="https://dreamspos.dreamguystech.com/laravel/template/public/forgetpassword"
                                        class="hover-a">Forgot Password?</a></h4>
                            </div>
                        </div>
                        <div class="form-login">
                            <button class="btn btn-login" type="submit">Sign In</button>
                        </div>
                        <div class="signinform text-center">
                            <h4>Don’t have an account? <a
                                    href="https://dreamspos.dreamguystech.com/laravel/template/public/signup"
                                    class="hover-a">Sign Up</a></h4>
                        </div>
                        <div class="form-setlogin">
                            <h4>Or sign up with</h4>
                        </div>
                        <div class="form-sociallink">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/google.png"
                                            class="me-2" alt="google">
                                        Sign Up using Google
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/facebook.png"
                                            class="me-2" alt="google">
                                        Sign Up using Facebook
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="login-img">
                    <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/login.jpg"
                        alt="img">
                </div>
            </div>
        </Form>
    </div>
</body>
@stop