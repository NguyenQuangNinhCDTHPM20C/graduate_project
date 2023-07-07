@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('slider')
    @include('Public.partial.slider')
@stop

@section('content')
    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ">
                <div class="d-flex align-items-center bg-light mb-4 bg-radius bg-shadow" style="padding: 30px">
                    <h1 class="fas fa-solid fa-clipboard-check fa-icon m-0 mr-3 fa-p"></h1>
                    <h5 class="font-weight-semi-bold m-0">Sản phẩm chính hãng</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ">
                <div class="d-flex align-items-center bg-light mb-4 bg-radius bg-shadow" style="padding: 30px">
                    <h1 class="fa fa-cart-flatbed-suitcase fa-icon m-0 mr-2 fa-p"></h1>
                    <h5 class="font-weight-semi-bold m-0">Miễn phí vận chuyển</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4 bg-radius bg-shadow" style="padding: 30px">
                    <h1 class="fa fa-rotate fa-icon m-0 mr-3 fa-p"></h1>
                    <h5 class="font-weight-semi-bold m-0">Đổi trả dễ dàng</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4 bg-radius bg-shadow" style="padding: 30px">
                    <h1 class="fa fa-headset fa-icon m-0 mr-3 "></h1>
                    <h5 class="font-weight-semi-bold m-0">Hỗ trợ 24/7</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="section-title-header position-relative text-uppercase mx-xl-5 mb-4 text-decoration-none">
            <h4><a href="/dien-thoai-di-dong">Phụ kiện</a></h4>
        </div>
        <div class="row px-xl-5 pb-3 box-category">
            @foreach ($accsessories as $_accsessories)
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none bg-border-none" href="">
                        <div class="cat-item d-flex align-items-center mb-4 bg-radius">
                            <div class="overflow-hidden"
                                style="width: 100px; height: 100px ; display: flex; justify-content: center; align-items: center;">
                                <img class="img-fluid" src="{{ asset($_accsessories->image) }}"
                                    alt="{{ $_accsessories->name }}" />
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>{{ $_accsessories->name }}</h6>
                                {{-- <small class="text-body text-yellow">{{ $_accsessories->total }} Products</small> --}}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <!-- Categories End -->
        <div class="py-5">
            <div class="section-title-header position-relative text-uppercase mx-xl-5 mb-4 text-decoration-none">
                <h4><a href="/dien-thoai-di-dong">Sản phẩm giảm giá</a></h4>
            </div>
            <div class="row px-xl-5 box-category">
                <div class="col">
                    <div class="owl-carousel vendor-carousel bg-light bg-radius">
                        @foreach ($products as $product)
                            <div class="bg-light mb-4 item-p bg-radius">
                                <div class="product-item bg-light mb-4 bg-radius">
                                    <div class="product-img position-relative overflow-hidden img-p align-items-center">
                                        <a href="{{ route('product-detail', ['slug' => $product->slug]) }}"><img
                                                class="img-fluid "
                                                src="{{ $product->featured_image ? asset($product->featured_image->image_path) : '' }}"
                                                alt="{{ $product->name }}" /></a>
                                    </div>
                                    <div class="text-center py-4 px-4 overflow-text">
                                        <a class="h6 text-decoration-none text-truncate name-product"
                                            href="{{ route('product-detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <h5 style="color: #fd475a;">{{ $product->selling_price }}VND</h5>
                                            <h6 class="text-muted ml-2">
                                                <del>{{ $product->discount_price }}VND</del>
                                            </h6>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mb-1">
                                            <small class="fa fa-star text-primary mr-1"></small>
                                            <small class="fa fa-star text-primary mr-1"></small>
                                            <small class="fa fa-star text-primary mr-1"></small>
                                            <small class="fa fa-star text-primary mr-1"></small>
                                            <small class="fa fa-star text-primary mr-1"></small>
                                            <small>(99)</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Products Start -->
        <div class="pt-5 pb-3">
            @if ($new_products && count($new_products) > 0)
                <div class="section-title-header position-relative text-uppercase mx-xl-5 mb-4 text-decoration-none">
                    <h4><a href="/dien-thoai-di-dong">Sản phẩm mới</a></h4>
                </div>
                <div class="row px-xl-5">
                    @foreach ($new_products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4 item-p bg-radius">
                                <div class="product-img position-relative overflow-hidden img-p">
                                    <img class="img-fluid"
                                        src="{{ $product->featured_image ? asset($product->featured_image->image_path) : '' }}"
                                        alt="{{ $product->name }}" />

                                </div>
                                <div class="text-center py-4 px-4 overflow-text">
                                    <a class="h6 text-decoration-none text-truncate name-product"
                                        href="{{ route('product-detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5 style="color: #fd475a;">{{ $product->selling_price }}VND</h5>
                                        <h6 class="text-muted ml-2">
                                            <del>{{ $product->discount_price }}VND</del>
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <!-- Products End -->

        <!-- Offer Start -->
        <div class="pt-5 pb-3">
            <div class="row px-xl-5">
                <div class="col-md-6">
                    <div class="product-offer mb-30 bg-radius" style="height: 300px">
                        <a href=""><img class="img-fluid" src="images/carousel-2.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-offer mb-30 bg-radius" style="height: 300px">
                        <a><img class="img-fluid" src="images/carousel-3.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->

        <!-- Products Start -->
        <div class="pt-5 pb-3">
            <div class="section-title-header position-relative text-uppercase mx-xl-5 mb-4 text-decoration-none">
                <h4><a href="/dien-thoai-di-dong">Các sản phẩm</a></h4>
            </div>
            <div class="row px-xl-5">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4 item-p bg-radius">
                            <div class="product-img position-relative overflow-hidden img-p">
                                <img class="img-fluid "
                                    src="{{ $product->featured_image ? asset($product->featured_image->image_path) : '' }}"
                                    alt="{{ $product->name }}" />

                            </div>
                            <div class="text-center py-4 px-4 overflow-text">
                                <a class="h6 text-decoration-none text-truncate name-product"
                                    href="{{ route('product-detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5 style="color: #fd475a;">{{ $product->selling_price }}VND</h5>
                                    <h6 class="text-muted ml-2">
                                        <del>{{ $product->discount_price }}VND</del>
                                    </h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small>(99)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Products End -->

        <!-- Vendor Start -->
        <div class="py-5">
            <div class="section-title-header position-relative text-uppercase mx-xl-5 mb-4 text-decoration-none">
                <h4><a href="/dien-thoai-di-dong">Thương hiệu</a></h4>
            </div>
            <div class="row px-xl-5">
                <div class="col">
                    <div class="owl-carousel vendor-carousel">
                        @foreach ($brands as $brand)
                            <div class="bg-light p-4 bg-radius" style="height: 130px;">
                                <img class="w-100 h-100" src="{{ asset($brand->image) }}" alt="{{ $brand->name }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
@stop
