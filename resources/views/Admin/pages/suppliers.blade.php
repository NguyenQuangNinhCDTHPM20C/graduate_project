@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Supplier List</h4>
                <h6>Manage your Supplier</h6>
            </div>
            <div class="page-btn">
                <a href="https://dreamspos.dreamguystech.com/laravel/template/public/addsupplier"
                    class="btn btn-added"><img
                        src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/plus.svg"
                        alt="img">Add Supplier</a>
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
                                    <input type="text" placeholder="Enter Supplier Code">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Supplier">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Email">
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
                                <th>Supplier Name</th>
                                <th>code</th>
                                <th>Phone</th>
                                <th>email</th>
                                <th>Country</th>
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Apex Computers</a>
                                </td>
                                <td>201</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="4034282f2d2133002538212d302c256e232f2d">[email&#160;protected]</a>
                                </td>
                                <td>China</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Modern Automobile</a>
                                </td>
                                <td>202</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="81e2f4f2f5eeece4f3c1e4f9e0ecf1ede4afe2eeec">[email&#160;protected]</a>
                                </td>
                                <td>USA</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">AIM Infotech</a>
                                </td>
                                <td>521</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="bad9cfc9ced5d7dfc8fadfc2dbd7cad6df94d9d5d7">[email&#160;protected]</a>
                                </td>
                                <td>USA</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Best Power Tools</a>
                                </td>
                                <td>555</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="fb99898e90979295bb9e839a968b979ed5989496">[email&#160;protected]</a>
                                </td>
                                <td>Thailand</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">AIM Infotech</a>
                                </td>
                                <td>325</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="3674534053445a4f76534e575b465a531855595b">[email&#160;protected]</a>
                                </td>
                                <td>Phuket island</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Best Power Tools</a>
                                </td>
                                <td>589</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="59112c3b3c2b193c21383429353c773a3634">[email&#160;protected]</a>
                                </td>
                                <td>Germany</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Apex Computers</a>
                                </td>
                                <td>254</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="cdaeb8beb9a2a0a8bf8da8b5aca0bda1a8e3aea2a0">[email&#160;protected]</a>
                                </td>
                                <td>Angola</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Vinayak Tools</a>
                                </td>
                                <td>681</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1d777275735d78657c706d7178337e7270">[email&#160;protected]</a>
                                </td>
                                <td>Albania</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Best Power Tools</a>
                                </td>
                                <td>555</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="711303041a1d181f311409101c011d145f121e1c">[email&#160;protected]</a>
                                </td>
                                <td>Thailand</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">AIM Infotech</a>
                                </td>
                                <td>325</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="abe9ceddced9c7d2ebced3cac6dbc7ce85c8c4c6">[email&#160;protected]</a>
                                </td>
                                <td>Phuket island</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Best Power Tools</a>
                                </td>
                                <td>589</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="b4fcc1d6d1c6f4d1ccd5d9c4d8d19ad7dbd9">[email&#160;protected]</a>
                                </td>
                                <td>Germany</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Apex Computers</a>
                                </td>
                                <td>254</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="3c5f494f485351594e7c59445d514c5059125f5351">[email&#160;protected]</a>
                                </td>
                                <td>Angola</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/noimage.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Vinayak Tools</a>
                                </td>
                                <td>681</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="0862676066486d70696578646d266b6765">[email&#160;protected]</a>
                                </td>
                                <td>Albania</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editsupplier">
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