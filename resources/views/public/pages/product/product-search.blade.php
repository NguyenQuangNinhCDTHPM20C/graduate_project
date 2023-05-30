@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
<style>
.box-filter {
    margin-bottom: 20px;
}

.box-filter h6 {
    color: #009981;
}

.box-filter a {
    text-decoration: none;
    color: black;
}

/* .filter-drop {
    display: none;
} */

.box-filter a:hover {
    color: red;
}

.box-filter a:hover+.filter-drop {
    display: block
}
</style>
@endsection

@section('content')

<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    @if(isset($products) && count($products) > 0)
    <div class="row px-xl-5 pb-3 box-category box-filter">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a href="" class="filter-link">Category<i class=" fa fa-solid fa-caret-down"></i></a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a href="" class="filter-link">Brand<i class=" fa fa-solid fa-caret-down"></i></a>
        </div>
    </div>
    <div class="row px-xl-5 pb-3 box-category box-filter filter-drop">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <h6>item1</h6>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <h6>item2</h6>
        </div>
    </div>

    <h5 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Products</span>
    </h5>
    <div class="row px-xl-5">
        @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4 item-p bg-radius">
                <div class="product-img position-relative overflow-hidden img-p">
                    <img class="img-fluid" src="{{ asset('assets/product/' . $product->image) }}"
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
    @else
    <h5 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Product not found</span>
    </h5>
    @endif
</div>
<!-- Products End -->

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
@stop