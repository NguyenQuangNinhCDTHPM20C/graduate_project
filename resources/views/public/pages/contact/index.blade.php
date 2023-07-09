@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark text-decoration-none" href="#">Trang chủ</a>
                    <span class="breadcrumb-item active">Liên hệ</span>
                </nav>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30 bg-radius">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Họ tên"
                                required="required" data-validation-required-message="Vui lòng nhập tên của bán" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Địa chỉ email"
                                required="required" data-validation-required-message="Vui lòng nhập địa chỉ email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Chủ đề"
                                required="required" data-validation-required-message="Vui lòng nhập chủ đề" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" id="message" placeholder="Tin nhắn" required="required"
                                data-validation-required-message="Vui lòng nhập lời nhắn"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-custom py-2 px-4" type="submit" id="sendMessageButton">Gửi tin
                                nhắn</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30 bg-radius">
                    {!! $settings->link_google_map !!}
                </div>
                <div class="bg-light p-30 mb-3 bg-radius">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>{{ $settings->address }}</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>{{ $settings->email }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>{{ $settings->phone_number }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@stop
