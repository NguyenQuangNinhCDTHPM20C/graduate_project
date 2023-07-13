@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper cardhead">
        <div class="content">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash1">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('images/dash2.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="307144.00">$307,144.00</span></h5>
                            <h6>Tiền bán tháng này</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('images/dash1.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
                            <h6>Tiền mua tháng này</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash2">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('images/dash3.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="385656.50">385,656.50</span></h5>
                            <h6>Tổng tiền đã thu</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash3">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('images/dash4.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="40000.00">400.00</span></h5>
                            <h6>Tổng tiền đã chi</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count">
                        <div class="dash-counts">
                            <h4>{{ $count_customer }}</h4>
                            <h5>Khách hàng</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das1">
                        <div class="dash-counts">
                            <h4>{{ $count_brand }}</h4>
                            <h5>Nhà cung cấp</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user-check"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das2">
                        <div class="dash-counts">
                            <h4>100</h4>
                            <h5>Hóa đơn mua hàng</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file-text"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das3">
                        <div class="dash-counts">
                            <h4>{{ $count_sale_invoice }}</h4>
                            <h5>Hóa đơn bán hàng</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title">Product Out Stock</h4>
                    <div class="table-responsive dataview">
                        <table class="table datatable ">
                            <thead>
                                <tr>
                                    <th>SNo</th>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Brand Name</th>
                                    <th>Category Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_out_stock as $key => $product)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><a href="javascript:void(0);">{{ $product->code }}</a></td>
                                        <td class="productimgname">
                                            <a class="product-img"
                                                href="{{ route('product.detail', ['slug' => $product->slug]) }}">
                                                <img src="{{ asset('assets/product/' . $product->image) }}" alt="product">
                                            </a>
                                            <a
                                                href="{{ route('product.detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                        </td>
                                        <td>{{ $product->brand->name }}</td>
                                        <td>{{ $product->category->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card mb-0 mt-5">
                <div class="card-body">
                    <h4 class="card-title">Product Out Stock</h4>
                    <div class="table-responsive dataview">
                        <table class="table datatable ">
                            <thead>
                                <tr>
                                    <th>SNo</th>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Brand Name</th>
                                    <th>Category Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_out_stock as $key => $product)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><a href="javascript:void(0);">{{ $product->code }}</a></td>
                                        <td class="productimgname">
                                            <a class="product-img"
                                                href="{{ route('product.detail', ['slug' => $product->slug]) }}">
                                                <img src="{{ asset('assets/product/' . $product->image) }}" alt="product">
                                            </a>
                                            <a
                                                href="{{ route('product.detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                        </td>
                                        <td>{{ $product->brand->name }}</td>
                                        <td>{{ $product->category->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
