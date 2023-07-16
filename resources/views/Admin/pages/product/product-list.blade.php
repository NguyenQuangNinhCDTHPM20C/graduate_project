@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Sản phẩm</h4>
                    <h6>Quản lý sản phẩm của bạn</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('product.add') }}" class="btn btn-added"><img src="{{ asset('images/plus.svg') }}"
                            alt="img" class="me-1">Thêm sản phẩm</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{ asset('images/filter.svg') }}" alt="filter-button">
                                    <span><img src="{{ asset('images/closes.svg') }}" alt="close-button"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{ asset('images/search-white.svg') }}"
                                        alt="img"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-0" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Chọn danh mục</option>
                                                    @foreach ($category as $_category)
                                                        <option>{{ $_category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Chọn phụ mục</option>
                                                    @foreach ($sub_category as $_sub_category)
                                                        <option>{{ $_sub_category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Thương hiệu</option>
                                                    @foreach ($brands as $_brand)
                                                        <option>{{ $_brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-sm-6 col-12">
                                            <div class="form-group">
                                                <a class="btn btn-filters ms-auto"><img
                                                        src="{{ asset('images/search-whites.svg') }}" alt="img"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Phụ mục</th>
                                    <th>Thương hiệu</th>
                                    <th>Giá</th>
                                    <th>Code</th>
                                    <th>Số lượng</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="productimgname">
                                            <a href="{{ route('product.detail', ['slug' => $product->slug]) }}"
                                                class="product-img">
                                                <img src="{{ $product->featured_image ? asset($product->featured_image->image_path) : '' }}"
                                                    alt="{{ $product->name }}">
                                            </a>
                                            <a class="name-p"
                                                href="{{ route('product.detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                        </td>
                                        <td>{{ optional($product->category)->name }}</td>
                                        <td>{{ optional($product->sub_category)->name }}</td>
                                        <td>{{ optional($product->brand)->name }}</td>
                                        <td>{{ $product->selling_price }}</td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>
                                            <a class="me-3"
                                                href="{{ route('product.detail', ['slug' => $product->slug]) }}">
                                                <img src="{{ asset('images/eye.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3"
                                                href="{{ route('product.edit', ['slug' => $product->slug]) }}">
                                                <img src="{{ asset('images/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text"
                                                onclick="$.fn.showConfirmationDeleteAlert('product_delete_{{ $product->id }}')">
                                                <img src="{{ asset('images/delete.svg') }}" alt="img">
                                            </a>
                                            <form id="product_delete_{{ $product->id }}"
                                                action="{{ route('product.delete', ['id' => $product->id]) }}"
                                                method="POST" style="display: none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
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
