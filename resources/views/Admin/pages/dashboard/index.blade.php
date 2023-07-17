@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper cardhead">
        <div class="content">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('images/dash1.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5><span class="counters">{{ $inventory_number }} </span>
                            </h5>
                            <h6>Sản phẩm tồn kho</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash2">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('images/dash3.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5><span class="counters">{{ number_format($total_purchase_today, 0, ',', '.') }}đ</span>
                            </h5>
                            <h6>Thu nhập hôm nay</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash1">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('images/dash2.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5><span class="counters">{{ number_format($total_sale_month, 0, ',', '.') }}đ</span>
                            </h5>
                            <h6>Thu nhập tháng này</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash3">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('images/dash4.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5><span class="counters">{{ number_format($totalIncomeYear, 0, ',', '.') }}đ</span>
                            </h5>
                            <h6>Thu nhập năm nay</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count">
                        <div class="dash-counts">
                            <h4>{{ $order_pending }}</h4>
                            <h5>Đơn hàng chờ xác nhận</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das2">
                        <div class="dash-counts">
                            <h4>{{ $order_tax }}</h4>
                            <h5>Đơn hàng đang vận chuyển</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file-text"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das3">
                        <div class="dash-counts">
                            <h4>{{ $order_complete }}</h4>
                            <h5>Đơn hàng thành công</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das1">
                        <div class="dash-counts">
                            <h4>{{ $order_error }}</h4>
                            <h5>Đơn hàng không thành công</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user-check"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title">Sản phẩm mới bán được</h4>
                    <div class="table-responsive dataview">
                        <table class="table datatable ">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Sản phẩm</th>
                                    <th>Thương hiệu</th>
                                    <th>Danh mục</th>
                                    <th>Số lượng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($new_invoices as $key => $item)
                                    <tr>
                                        <td><a href="javascript:void(0);">{{ optional($item->product)->code }}</a></td>
                                        <td class="productimgname" style="max-width: 600px;">
                                            <a class="product-img"
                                                href="{{ route('product.detail', ['slug' => optional($item->product)->slug]) }}">
                                                <img src="{{ $item->product->featured_image ? asset($item->product->featured_image->image_path) : '' }}"
                                                    alt="{{ optional($item->product)->name }}">
                                            </a>
                                            <a class="name-p"
                                                href="{{ route('product.detail', ['slug' => optional($item->product)->slug]) }}">{{ optional($item->product)->name }}</a>
                                        </td>
                                        <td>{{ optional($item->product->brand)->name }}</td>
                                        <td>{{ optional($item->product->category)->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card mb-0 mt-5">
                <div class="card-body">
                    <h4 class="card-title">Sản phẩm sắp hết hàng</h4>
                    <div class="table-responsive dataview">
                        <table class="table datatable ">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Sản phẩm</th>
                                    <th>Thương hiệu</th>
                                    <th>Danh mục</th>
                                    <th>Số lượng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_out_stock as $key => $product)
                                    <tr>
                                        <td><a href="javascript:void(0);">{{ $product->code }}</a></td>
                                        <td class="productimgname" style="max-width: 600px;">
                                            <a class="product-img"
                                                href="{{ route('product.detail', ['slug' => $product->slug]) }}">
                                                <img src="{{ $product->featured_image ? asset($product->featured_image->image_path) : '' }}"
                                                    alt="{{ $product->name }}">
                                            </a>
                                            <a class="name-p"
                                                href="{{ route('product.detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                        </td>
                                        <td>{{ optional($product->brand)->name }}</td>
                                        <td>{{ optional($product->category)->name }}</td>
                                        <td>{{ $product->quantity }}</td>
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
