@extends('Public.layouts.app')

@section('title', 'Double-N shop')
@section('styles')
    <link href="css/Public/auth/stylelogin.css" rel="stylesheet">
@stop
@section('content')
    <!-- form section start -->
    <section class="w3l-hotair-form" style="margin:0px;">
        <h1></h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Quên mật khẩu</h2>
                        <form method="POST" action="{{ route('public.login') }}">
                            @csrf
                            <input type="hidden" name="id_form" id="id_form" value="0">
                            <input type="email" name="email" id="email" placeholder="Địa chỉ Email" required>
                            <button class="btnlog" type="submit">GỬI</button>
                        </form>
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
