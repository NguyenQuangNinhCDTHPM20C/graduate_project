@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Màu sản phẩm</h4>
                    <h6>Xem và tìm kiếm màu sản phẩm ở đây</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('color.add') }}" class="btn btn-added"><img
                            src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/plus.svg"
                            class="me-2" alt="img"> Thêm màu</a>
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
                                    <th>Tên màu</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($color as $_color)
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            {{ $_color->name }}
                                        </td>
                                        <td>
                                        <a class="me-3"
                                                href="{{ route('color.edit', ['id' => $_color->id]) }}">
                                                <img src="{{ asset('images/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text"
                                                onclick="$.fn.showConfirmationDeleteAlert('color_delete_{{ $_color->id }}')">
                                                <img src="{{ asset('images/delete.svg') }}" alt="img">
                                            </a>
                                            <form id="color_delete_{{ $_color->id }}"
                                                action="{{ route('color.delete', ['id' => $_color->id]) }}"
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
