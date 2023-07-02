@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product Details</h4>
                    <h6>Full details of a product</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="bar-code-view">
                                <div>
                                    <div>{!! DNS1D::getBarcodeHTML($product->code, 'C128', 1.4, 22) !!}</div>
                                    <p class="pid">{{ $product->code }}</p>
                                </div>
                                <a class="printimg">
                                    <img src="{{ asset('images/printer.svg') }}" alt="print">
                                </a>
                            </div>
                            <div class="productdetails">
                                <ul class="product-bar">
                                    <li>
                                        <h4>Product</h4>
                                        <h6>{{ $product->name }}</h6>
                                    </li>
                                    <li>
                                        <h4>Category</h4>
                                        <h6>{{ optional($product->category)->name }}</h6>
                                    </li>
                                    <li>
                                        <h4>Sub Category</h4>
                                        <h6>{{ optional($product->sub_category)->name }}</h6>
                                    </li>
                                    <li>
                                        <h4>Brand</h4>
                                        <h6>{{ optional($product->brand)->name }}</h6>
                                    </li>
                                    <li>
                                        <h4>Code</h4>
                                        <h6>{{ $product->code }}</h6>
                                    </li>
                                    <li>
                                        <h4>Quantity</h4>
                                        <h6>{{ $product->quantity }}</h6>
                                    </li>
                                    <li>
                                        <h4>Price</h4>
                                        <h6>{{ $product->selling_price }}</h6>
                                    </li>
                                    @if ($product->discount_price)
                                        <li>
                                            <h4>Discounted price</h4>
                                            <h6>{{ $product->discount_price }}</h6>
                                        </li>
                                    @endif
                                    <li>
                                        <h4>Status</h4>
                                        @if ($product->status == 1)
                                            <h6>Active</h6>
                                        @else
                                            <h6>Active</h6>
                                        @endif
                                    </li>
                                    <li>
                                        <h4>Description</h4>
                                        <h6>{{ $product->description }}</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="slider-product-details">
                                <div class="owl-carousel owl-theme product-slide">
                                    @foreach ($images as $image)
                                        <div class="slider-product">
                                            <img src="{{ asset($image->image_path) }}" alt="{{ $product->name }}">
                                            <h6>{{ optional($image->product)->name }}</h6>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
