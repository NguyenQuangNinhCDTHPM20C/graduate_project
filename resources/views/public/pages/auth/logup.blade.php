@extends('Public.layouts.app')

@section('title', 'Double-N shop')
@section('styles')
    <link href="css/Public/auth/stylelogin.css" rel="stylesheet">
@stop
@section('content')
    <!-- form section start -->
    <section class="w3l-hotair-form">
        <h1></h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Đăng ký</h2>
                        <form method="POST" action="{{ route('logup') }}">
                            @csrf
                            <input type="text" class="text" name="email" placeholder="Email" required="" autofocus>
                            <input type="password" class="password" name="password" placeholder="Mật khẩu" required=""
                                autofocus>
                            <input type="password" class="password" name="confirm_password" placeholder="Xác nhận mật khấu"
                                required="" autofocus>
                            <button class="btnlog" type="submit">ĐĂNG KÝ</button>
                        </form>
                        <p class="account">Bạn đã có tài khoản? <a href="{{ route('public.login') }}">Đăng nhập</a></p>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->
@stop
@section('scripts')
@stop
