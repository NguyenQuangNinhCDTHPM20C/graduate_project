@extends('Admin.layouts.auth')

@section('title', 'Double-N shop | Admin Management')

@section('content')

    <div class="main-wrapper">
        <Form method="POST" class="account-content" action="{{ route('admin.logup') }}">
            @csrf
            <input type="hidden" name="id_form" id="id_form" value="1">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <div class="login-logo logo-normal">
                            <img src="{{ asset('images/logoshop.png') }}" alt="img">
                        </div>
                        <a href="{{ route('index') }}" class="login-logo logo-white">
                            <img src="{{ asset('images/logoshop1.png') }}" alt="">
                        </a>
                        <div class="login-userheading">
                            <h3>Tạo tài khoản mới</h3>
                            <h4>Bắt đầu quản lý bán hàng với đăng ký tài khoản</h4>
                        </div>
                        <div class="form-login">
                            <label>Email</label>
                            <div class="form-addons">
                                <input type="text" name="email" id="email" placeholder="Email" required=""
                                    autofocus>
                                <img src="{{ asset('images/mail.svg') }}" alt="img">
                            </div>
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Mật khẩu</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input" name="password" id="password"
                                    placeholder="Mật khẩu"
                                    pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
                                    title="Mật khẩu phải có ít nhất 8 ký tự, gồm chữ hoa, chữ thường, số và ký tự đặc biệt (@,$,!,%,*,?,&)"
                                    autocomplete="new-password" required="" autofocus>
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Nhập lại mật khẩu</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input" name="confirm_password" id="password"
                                    placeholder="Xác nhận mật khẩu" autocomplete="new-password" required="" autofocus>
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-login">
                            <button class="btn btn-login" type="submit">ĐĂNG KÝ</button>
                        </div>
                        <div class="signinform text-center">
                            <h4>Bạn đã có tài khoản? <a href="{{ route('admin.login') }}" class="hover-a">Đăng nhập</a></h4>
                        </div>
                    </div>
                </div>
                <div class="login-img">
                    <img src="{{ asset('images/background-login.jpg') }}" alt="img">
                </div>
            </div>
        </Form>
    </div>

@stop
