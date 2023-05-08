@extends('Admin.layouts.auth')

@section('title', 'Double-N shop | Admin Management')

@section('content')

<div class="main-wrapper">
    <Form method="POST" class="account-content">
        <input type="hidden" name="_token" value="SV0UaU0xg8fFRcqF0gZnbekx7i4TU5mAgQL2o89A">
        <div class="login-wrapper">
            <div class="login-content">
                <div class="login-userset">
                    <div class="login-logo logo-normal">
                        <img src="{{asset('images/logoshop.png')}}" alt="img">
                    </div>
                    <a href="{{route('index')}}" class="login-logo logo-white">
                        <img src="{{asset('images/logoshop1.png')}}" alt="">
                    </a>
                    <div class="login-userheading">
                        <h3>Sign In</h3>
                        <h4>Please login to your account</h4>
                    </div>
                    <div class="form-login">
                        <label>Email</label>
                        <div class="form-addons">
                            <input type="text" name="email" id="Email" value="admin@example.com">
                            <img src="{{asset('images/mail.svg')}}" alt="img">
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
                <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/login.jpg" alt="img">
            </div>
        </div>
    </Form>
</div>

@stop