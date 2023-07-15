@extends('Public.layouts.app')

@section('title', 'Double-N shop')
@section('styles')
    <link href="{{ asset('css/Public/auth/stylelogin.css') }}" rel="stylesheet">
@stop
@section('content')
    <!-- form section start -->
    <section class="w3l-hotair-form" style="min-height:0;">
        <h1></h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Thay đổi mật khẩu</h2>
                        <form method="POST" action="{{ route('reset-pass.submit') }}">
                            @csrf
                            <input type="hidden" name="id_form" id="id_form" value="0">
                            <input type="hidden" name="account_id" value="{{ $account->id }}">
                            <input type="hidden" name="token" value="{{ $account->verification_token }}">
                            <input type="password" name="password" id="password" autocomplete="new-password"
                                placeholder="Mật khẩu mới"
                                pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
                                title="Mật khẩu phải có ít nhất 8 ký tự, gồm chữ hoa, chữ thường, số và ký tự đặc biệt (@,$,!,%,*,?,&)"
                                required>
                            <button class="btnlog" type="submit">XÁC NHẬN</button>
                        </form>
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
@section('scripts')
@stop
