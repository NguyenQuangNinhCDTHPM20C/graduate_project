@extends('Admin.layouts.auth')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="main-wrapper">
        <Form method="POST" class="account-content" action="{{ route('admin.login') }}">
            @csrf
            <input type="hidden" name="id_form" id="id_form" value="1">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <div class="login-logo logo-normal">
                            <img src="{{ asset('images/logoshop.png') }}" alt="img">
                        </div>
                        <div class="login-userheading">
                            <h3>Quên mật khẩu</h3>
                            <h4>Đừng lo lắng! Vui lòng nhập địa chỉ
                                được liên kết với tài khoản của bạn.</h4>
                        </div>
                        <div class="form-login">
                            <label>Email</label>
                            <div class="form-addons">
                                <input type="email" name="email" id="email" placeholder="Email" required=""
                                    autofocus>
                                <img src="{{ asset('images/mail.svg') }}" alt="img">
                            </div>
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-login">
                            <button class="btn btn-login" type="submit">GỬI</button>
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
