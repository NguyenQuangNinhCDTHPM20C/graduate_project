@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product List</h4>
                <h6>Manage your products</h6>
            </div>
            <div class="page-btn">
                <a href="{{route('product.add')}}" class="btn btn-added"><img src="{{asset('images/plus.svg')}}"
                        alt="img" class="me-1">Add New Product</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="{{asset('images/filter.svg')}}" alt="img">
                                <span><img src="{{asset('images/closes.svg')}}" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="{{asset('images/search-white.svg')}}" alt="img"></a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                        src="{{asset('images/pdf.svg')}}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                        src="{{asset('images/excel.svg')}}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                        src="{{asset('images/printer.svg')}}" alt="img"></a>
                            </li>
                        </ul>
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
                                                <option>Choose Category</option>
                                                @foreach($category as $_category)
                                                <option>{{$_category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Sub Category</option>
                                                @foreach($sub_category as $_sub_category)
                                                <option>{{$_sub_category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Brand</option>
                                                @foreach($brands as $_brand)
                                                <option>{{$_brand->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-sm-6 col-12">
                                        <div class="form-group">
                                            <a class="btn btn-filters ms-auto"><img
                                                    src="{{asset('images/search-whites.svg')}}" alt="img"></a>
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
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Product Name</th>
                                <th>Category </th>
                                <th>Sub Category </th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>Code</th>
                                <th>Qty</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ asset('assets/' . $product->image) }}" alt="{{$product->name}}">
                                    </a>
                                    <a href="javascript:void(0);">{{$product->name}}</a>
                                </td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->sub_category->name}}.000</td>
                                <td>{{$product->brand->name}}</td>
                                <td>{{$product->selling_price}}</td>
                                <td>{{$product->code}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>
                                    <a class="me-3" href="{{ route('product.detail', ['id' => $product->id]) }}">
                                        <img src="{{asset('images/eye.svg')}}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{ route('product.edit', ['id' => $product->id]) }}">
                                        <img src="{{asset('images/edit.svg')}}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{asset('images/delete.svg')}}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                            {{ $products->links() }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@stop