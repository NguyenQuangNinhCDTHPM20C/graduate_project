@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Thương hiệu</h4>
                    <h6>Danh sách thương hiệu</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('brand.add') }}" class="btn btn-added"><img src="{{ asset('images/plus.svg') }}"
                            class="me-2" alt="img">Thêm thương hiệu</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{ asset('images/filter.svg') }}" alt="img">
                                    <span><img src="{{ asset('images/closes.svg') }}" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{ asset('images/search-white.svg') }}"
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="{{ asset('images/pdf.svg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="{{ asset('images/excel.svg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="{{ asset('images/printer.svg') }}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Brand Name">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                    <div class="form-group">
                                        <a class="btn btn-filters ms-auto"><img
                                                src="{{ asset('images/search-whites.svg') }}" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table datanew">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>Hình ảnh</th>
                                    <th>Tên thương hiệu</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brand as $_brand)
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <a class="product-img">
                                                <img src="{{ asset($_brand->image) }}" alt="{{ $_brand->name }}">
                                            </a>
                                        </td>
                                        <td>{{ $_brand->name }}</td>
                                        <td>
                                            <a class="me-3" href="{{ route('brand.edit', ['slug' => $_brand->slug]) }}">
                                                <img src="{{ asset('images/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text"
                                                onclick="$.fn.showConfirmationDeleteAlert('brand_delete_{{ $_brand->id }}')">
                                                <img src="{{ asset('images/delete.svg') }}" alt="img">
                                            </a>
                                            <form id="brand_delete_{{ $_brand->id }}"
                                                action="{{ route('brand.delete', ['id' => $_brand->id]) }}" method="POST"
                                                style="display: none">
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
