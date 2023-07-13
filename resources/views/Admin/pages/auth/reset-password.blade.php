@extends('Admin.layouts.auth')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="main-wrapper">
        <Form method="POST" class="account-content" action="{{ route('admin.reset-pass.submit') }}">
            @csrf
            <input type="hidden" name="id_form" id="id_form" value="1">
            <input type="hidden" name="account_id" value="{{ $account->id }}">
            <input type="hidden" name="token" value="{{ $account->verification_token }}">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <div class="login-logo logo-normal">
                            <img src="{{ asset('images/logoshop.png') }}" alt="img">
                        </div>
                        <div class="login-userheading">
                            <h3>Đổi mật khẩu</h3>
                            <h4>Hãy nhập mật khẩu mới của bạn.</h4>
                        </div>
                        <div class="form-login">
                            <label>Mật khẩu mới</label>
                            <div class="form-addons">
                                <input type="password" name="password" id="passwprd" autocomplete="new-password"
                                    placeholder="Vui lòng nhập mật khẩu mới"
                                    pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
                                    title="Mật khẩu phải có ít nhất 8 ký tự, gồm chữ hoa, chữ thường, số và ký tự đặc biệt (@,$,!,%,*,?,&)"
                                    required="" autofocus>
                                <img src="{{ asset('images/mail.svg') }}" alt="img">
                            </div>
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-login">
                            <button class="btn btn-login" type="submit">XÁC NHẬN</button>
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
