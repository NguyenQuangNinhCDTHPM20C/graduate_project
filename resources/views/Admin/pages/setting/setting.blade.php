@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')


    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Cài đặt chung</h4>
                    <h6>Quản lý các cài đặt của website tại đây</h6>
                </div>
            </div>
            <form action="{{ route('setting.update') }}" method="post">
                @csrf
                @method('POST')
                <input type="hidden" name="id" value="{{ $settings->id }}">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email<span class="manitory">*</span></label>
                                    <input type="text" name="email" value="{{ $settings->email }}"
                                        placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Số điện thoại<span class="manitory">*</span></label>
                                    <input type="text" name="phone_number" value="{{ $settings->phone_number }}"
                                        placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Địa chỉ<span class="manitory">*</span> </label>
                                    <input type="text" name="address" value="{{ $settings->address }}"
                                        placeholder="Enter Address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Link google Map</label>
                                    <textarea name="google_map" id="description" class="form-control" required>{{ $settings->link_google_map }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Link Facebook</label>
                                    <input type="text" name="facebook" value="{{ $settings->link_facebook }}"
                                        placeholder="Enter link facebook">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Link Twitter</label>
                                    <input type="text" name="twitter" value="{{ $settings->link_twitter }}"
                                        placeholder="Enter link twitter">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Logo</label>
                                    <img src="{{ asset($settings->logo) }}" alt="logo">
                                    <input type="file" name="logo" class="form-control" value="{{ $settings->logo }}"
                                        accept="image/jpeg, image/png, image/gif, image/svg+xml">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Favicon</label>
                                    <img src="{{ asset($settings->favicon) }}" alt="favicon">
                                    <input type="file" name="favicon" class="form-control"
                                        value="{{ $settings->favicon }}"
                                        accept="image/jpeg, image/png, image/gif, image/svg+xml">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button href="javascript:void(0);" class="btn btn-submit me-2">CẬP NHẬT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
