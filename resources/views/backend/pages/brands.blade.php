@extends('backend.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Brand List</h4>
                <h6>Manage your Brand</h6>
            </div>
            <div class="page-btn">
                <a href="https://dreamspos.dreamguystech.com/laravel/template/public/addbrand"
                    class="btn btn-added"><img
                        src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/plus.svg"
                        class="me-2" alt="img">Add Brand</a>
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
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Brand Name">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Brand Description">
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img
                                            src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/search-whites.svg"
                                            alt="img"></a>
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
                                <th>Image</th>
                                <th>Brand Name</th>
                                <th>Brand Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>
                                    <a class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/brand/adidas.png"
                                            alt="product">
                                    </a>
                                </td>
                                <td>Adidas</td>
                                <td>Shoes, sportswear</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editbrand">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/edit.svg"
                                            alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/delete.svg"
                                            alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>
                                    <a class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/brand/colgate.png"
                                            alt="product">
                                    </a>
                                </td>
                                <td>Colgate</td>
                                <td>Oral hygiene. Toothbrushes</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editbrand">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/edit.svg"
                                            alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/delete.svg"
                                            alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>
                                    <a class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/brand/samsung.png"
                                            alt="product">
                                    </a>
                                </td>
                                <td>samsung</td>
                                <td>Electronics</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editbrand">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/edit.svg"
                                            alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/delete.svg"
                                            alt="img">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@stop