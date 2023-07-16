@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Mã giảm giá</h4>
                    <h6>Xem và tìm kiếm mã giảm giá ở đây</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('discountcode.add') }}" class="btn btn-added"><img
                            src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/plus.svg"
                            class="me-2" alt="img"> Thêm mã giảm giá</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/filter.svg"
                                        alt="img">
                                    <span><img
                                            src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/closes.svg"
                                            alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img
                                        src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/search-white.svg"
                                        alt="img"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Danh mục/label>
                                            <select class="select">
                                                <option>Chọn danh mục</option>
                                                <option>Computers</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Chọn phụ mục</label>
                                        <select class="select">
                                            <option>Choose Sub Category</option>
                                            <option>Fruits</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Category Code</label>
                                        <select class="select">
                                            <option>CT001</option>
                                            <option>CT002</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <a class="btn btn-filters ms-auto"><img
                                                src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/search-whites.svg"
                                                alt="img"></a>
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
                                    <th>Mã giảm</th>
                                    <th>Tỉ lệ %</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($discount_code as $_discountcode)
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>

                                        <td >
                                            {{ $_discountcode->code }}
                                        </td>
                                        <td>
                                            {{ $_discountcode->discount_amount }}
                                        </td>
                                        <td>
                                        <a class="me-3"
                                                href="{{ route('discountcode.edit', ['id' => $_discountcode->id]) }}">
                                                <img src="{{ asset('images/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text"
                                                onclick="$.fn.showConfirmationDeleteAlert('discountcode_delete_{{ $_discountcode->id }}')">
                                                <img src="{{ asset('images/delete.svg') }}" alt="img">
                                            </a>
                                            <form id="discountcode_delete_{{ $_discountcode->id }}"
                                                action="{{ route('discountcode.delete', ['id' => $_discountcode->id]) }}"
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
