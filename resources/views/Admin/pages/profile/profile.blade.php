@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Tài khoản</h4>
                    <h6>Thông tin tài khoản</h6>
                </div>
            </div>
            <form action="{{ route('profile.update') }}" method="post">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-body">
                        <div class="profile-set">
                            <div class="profile-head">
                            </div>
                            <div class="profile-top">
                                <div class="profile-content">
                                    <div class="profile-contentimg">
                                        <img src="{{ asset(session('account')->photo) }}" alt="img" id="blah">
                                        <div class="profileupload">
                                            <input type="file" name="image" id="imgInp">
                                            <a href="javascript:void(0);"><img
                                                    src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/edit-set.svg"
                                                    alt="img"></a>
                                        </div>
                                    </div>
                                    <div class="profile-contentname">
                                        <h2>{{ session('account')->name }}</h2>
                                        <h4>Cập nhật hình ảnh đại diện và chi tiết tài khoản</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input type="text" name="name" value="{{ session('account')->name }}"
                                        placeholder="William">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="address" value="{{ session('account')->address }}"
                                        placeholder="Castilo">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{ session('account')->email }}"
                                        placeholder="william@example.com">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="phone_number" value="{{ session('account')->phone_number }}"
                                        placeholder="+1452 876 5432">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class=" pass-input">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button href="javascript:void(0);" class="btn btn-submit me-2">CẬP NHẬT</button>
                                <a href="{{ route('index') }}" class="btn btn-cancel">THOÁT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
