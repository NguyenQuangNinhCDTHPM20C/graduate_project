@extends('Public.layouts.app')

@section('title', 'Double-N shop')
@section('styles')
    <link href="{{ asset('css/Public/auth/stylelogin.css') }}" rel="stylesheet">
@stop
@section('content')
    <!-- form section start -->
    <section class="w3l-hotair-form">
        <h1>
        </h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Đăng ký</h2>
                        <form method="POST" action="{{ route('logup') }}">
                            @csrf
                            <input type="email" class="text" name="email" placeholder="Email" required autofocus>
                            <input type="password" name="password" placeholder="Nhập mật khẩu" autocomplete="new-password"
                                pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
                                title="Mật khẩu phải có ít nhất 8 ký tự, gồm chữ hoa, chữ thường, số và ký tự đặc biệt (@,$,!,%,*,?,&)"
                                required>
                            <input type="password" class="password" name="confirm_password" placeholder="Xác nhận mật khấu"
                                autocomplete="new-password" required autofocus>
                            <button class="btnlog" type="submit">ĐĂNG KÝ</button>
                        </form>
                        <p class="account">Bạn đã có tài khoản? <a href="{{ route('public.login') }}">Đăng nhập</a></p>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="{{ asset('images/1.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->
@stop
