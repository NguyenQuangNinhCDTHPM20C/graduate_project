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
                <h5 class="font-weight-semi-bold m-0">Genuine Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ">
            <div class="d-flex align-items-center bg-light mb-4 bg-radius bg-shadow" style="padding: 30px">
                <h1 class="fa fa-cart-flatbed-suitcase fa-icon m-0 mr-2 fa-p"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4 bg-radius bg-shadow" style="padding: 30px">
                <h1 class="fa fa-rotate fa-icon m-0 mr-3 fa-p"></h1>
                <h5 class="font-weight-semi-bold m-0">Easy Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4 bg-radius bg-shadow" style="padding: 30px">
                <h1 class="fa fa-headset fa-icon m-0 mr-3 "></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->

<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h5 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Categories</span>
    </h5>
    <div class="row px-xl-5 pb-3 box-category">
        @foreach($category as $_category)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none bg-border-none" href="">
                <div class="cat-item d-flex align-items-center mb-4 bg-radius">
                    <div class="overflow-hidden" style="width: 100px; height: 100px">
                        <img class="img-fluid" src="images/cat-1.jpg" alt="" />
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>{{$_category->name}}</h6>
                        <small class="text-body text-yellow">{{$_category->total}} Products</small>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <!-- Categories End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        @if ($new_products && count($new_products) > 0)
        <h5 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">New Products</span>
        </h5>
        <div class="row px-xl-5">
            @foreach($new_products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4 item-p bg-radius">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100 img-p" src="{{ asset('assets/product/' . $product->image) }}"
                            alt="{{$product->name}}" />

                    </div>
                    <div class="text-center py-4 px-4 overflow-text">
                        <a class="h6 text-decoration-none text-truncate"
                            href="{{ route('product-detail', ['id' => $product->id]) }}">{{$product->name}}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>{{$product->selling_price}}VND</h5>
                            <h6 class="text-muted ml-2">
                                <del>{{$product->discount_price}}VND</del>
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
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30 bg-radius" style="height: 300px">
                    <img class="img-fluid" src="images/carousel-2.jpg" alt="" />
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-slide btn-outline-light bg-radius">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30 bg-radius" style="height: 300px">
                    <img class="img-fluid" src="images/carousel-3.jpg" alt="" />
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-slide btn-outline-light bg-radius">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h5 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">Products</span>
        </h5>
        <div class="row px-xl-5">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4 item-p bg-radius">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100 img-p" src="{{ asset('assets/product/' . $product->image) }}"
                            alt="{{$product->name}}" />

                    </div>
                    <div class="text-center py-4 px-4 overflow-text">
                        <a class="h6 text-decoration-none text-truncate"
                            href="{{ route('product-detail', ['id' => $product->id]) }}">{{$product->name}}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>{{$product->selling_price}}VND</h5>
                            <h6 class="text-muted ml-2">
                                <del>{{$product->discount_price}}VND</del>
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
    <div class="container-fluid py-5">
        <h5 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">Brands</span>
        </h5>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    @foreach($brands as $brand)
                    <div class="bg-light p-4">
                        <img class="img-fluid w-100 h-100" src="{{asset('assets/brand/'.$brand->image)}}"
                            alt="{{$brand->name}}" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    @stop