@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product Sub Category list</h4>
                    <h6>View/Search product Category</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('subcategory.add') }}" class="btn btn-added"><img
                            src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/plus.svg"
                            class="me-2" alt="img"> Add Sub Category</a>
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
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/pdf.svg"
                                            alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/excel.svg"
                                            alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/printer.svg"
                                            alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="select">
                                            <option>Choose Category</option>
                                            <option>Computers</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Sub Category</label>
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
                                    <th>SubCategory</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sub_category as $_sub_category)
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>{{ $_sub_category->name }}</td>
                                        <td>{{ $_sub_category->category->name }}</td>
                                        <td>{{ $_sub_category->status == '1' ? 'Active' : 'Inactive' }}</td>
                                        </td>
                                        <td>
                                            <a class="me-3"
                                                href="{{ route('subcategory.edit', ['slug' => $_sub_category->slug]) }}">
                                                <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/edit.svg"
                                                    alt="img">
                                            </a>
                                            <a class="me-3 confirm-text"
                                                onclick="$.fn.showConfirmationDeleteAlert('sub_category_delete_{{ $_sub_category->id }}')">
                                                <img src="{{ asset('images/delete.svg') }}" alt="img">
                                            </a>
                                            <form id="sub_category_delete_{{ $_sub_category->id }}"
                                                action="{{ route('subcategory.delete', ['id' => $_sub_category->id]) }}"
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
