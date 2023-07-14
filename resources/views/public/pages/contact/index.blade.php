@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark text-decoration-none" href="{{ route('home') }}">Trang chủ</a>
                    <span class="breadcrumb-item active">Liên hệ</span>
                </nav>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30 bg-radius">
                    <div class="container page-text">
                        <p>Chúng tôi luôn sẵn sàng tiếp nhận góp ý, thắc mắc &amp; phản hồi của khách
                            hàng trước, đang và sau khi mua hàng.&nbsp;</p>
                        <p>Với đội ngũ nhân viên năng động &amp; sẵn sàng lắng nghe, mọi thắc mắc về dịch vụ, chất lượng sản
                            phẩm,... đều sẽ được tiếp nhận và tư vấn rõ ràng, cụ thể, nhằm mang lại cho khách hàng trải
                            nghiệm mua hàng trọn vẹn nhất tại Double-N Shop.</p>
                        <p>Quý khách cần thông tin về sản phẩm, chính sách bán hàng hoặc các vấn đề liên quan tới Double-N
                            Shop, xin vui lòng liên hệ bộ phận Chăm sóc khách hàng qua các hình thức bên dưới</p>
                        <p><i class="fa fa-envelope text-primary mr-3"></i>Email: <a class="text-decoration-none"
                                href="mailto:{{ $settings->email }}">
                                <font color="#3984c6">{{ $settings->email }} </font>
                            </a>

                        </p>
                        <p><i class="fa fa-map-marker-alt text-primary mr-3"></i>{{ $settings->address }}</p>
                        </p>
                        <p><i class="fa fa-phone-alt text-primary mr-3"></i>Hotline: <b><a class="text-decoration-none"
                                    href="tel:{{ $settings->phone_number }}">
                                    <font color="#3984c6">{{ $settings->phone_number }} </font>
                                </a></b>
                        </p>
                        <p>Hoặc để lại tin nhắn qua fanpage Double-N Shop. Chúng tôi sẽ cố gắng phản hồi sớm nhất có thể.
                        </p>
                        <p>Facebook: <b>

                            </b><a class="text-decoration-none" href="{{ $settings->link_facebook }}" target="_blank"><b>
                                    <font color="#3984c6">Double-N Shop</font>
                                </b></a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mb-3">
                <div class="bg-light p-30 mb-30 bg-radius">
                    {!! $settings->link_google_map !!}
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@stop
