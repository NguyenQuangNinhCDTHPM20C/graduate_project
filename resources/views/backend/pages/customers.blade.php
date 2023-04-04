@extends('backend.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Customer List</h4>
                <h6>Manage your Customers</h6>
            </div>
            <div class="page-btn">
                <a href="https://dreamspos.dreamguystech.com/laravel/template/public/addcustomer"
                    class="btn btn-added"><img
                        src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/plus.svg"
                        alt="img">Add Customer</a>
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
                                    <input type="text" placeholder="Enter Customer Code">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Customer Name">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12  ms-auto">
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
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Customer Name</th>
                                <th>code</th>
                                <th>Customer</th>
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer1.jpg"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Thomas</a>
                                </td>
                                <td>201</td>
                                <td>Thomas</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="2155494e4c4052614459404c514d440f424e4c">[email&#160;protected]</a>
                                </td>
                                <td>USA</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer2.jpg"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Benjamin</a>
                                </td>
                                <td>202</td>
                                <td>Benjamin</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="73100600071c1e160133160b121e031f165d101c1e">[email&#160;protected]</a>
                                </td>
                                <td>USA</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer3.jpg"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">James</a>
                                </td>
                                <td>521</td>
                                <td>James</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="3c5f494f485351594e7c59445d514c5059125f5351">[email&#160;protected]</a>
                                </td>
                                <td>USA</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer3.jpg"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Bruklin</a>
                                </td>
                                <td>555</td>
                                <td>Bruklin</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="711303041a1d181f311409101c011d145f121e1c">[email&#160;protected]</a>
                                </td>
                                <td>Thailand</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer4.jpg"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Beverly</a>
                                </td>
                                <td>325</td>
                                <td>Beverly</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="eaa88f9c8f988693aa8f928b879a868fc4898587">[email&#160;protected]</a>
                                </td>
                                <td>Phuket island</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer5.jpg"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">B. Huber</a>
                                </td>
                                <td>589</td>
                                <td>B. Huber </td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="7a320f181f083a1f021b170a161f54191517">[email&#160;protected]</a>
                                </td>
                                <td>Germany</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer6.jpg"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">James Stawberry</a>
                                </td>
                                <td>254</td>
                                <td>James Stawberry</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="99faeceaedf6f4fcebd9fce1f8f4e9f5fcb7faf6f4">[email&#160;protected]</a>
                                </td>
                                <td>Angola</td>
                                <td>

                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                    <a href="javascript:void(0);" class="product-imgs">
                                        WC
                                    </a>
                                    <a href="javascript:void(0);">James Stawberry</a>
                                </td>
                                <td>681</td>
                                <td>Fred john</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="6903060107290c11080419050c470a0604">[email&#160;protected]</a>
                                </td>
                                <td>Albania</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer5.jpg"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">B. Huber</a>
                                </td>
                                <td>589</td>
                                <td>B. Huber </td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="c58db0a7a0b785a0bda4a8b5a9a0eba6aaa8">[email&#160;protected]</a>
                                </td>
                                <td>Germany</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer6.jpg"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">James Stawberry</a>
                                </td>
                                <td>254</td>
                                <td>James Stawberry</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="e4879197908b898196a4819c8589948881ca878b89">[email&#160;protected]</a>
                                </td>
                                <td>Angola</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                    <a href="javascript:void(0);" class="product-imgs">
                                        WC
                                    </a>
                                    <a href="javascript:void(0);">James Stawberry</a>
                                </td>
                                <td>681</td>
                                <td>Fred john</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="016b6e696f416479606c716d642f626e6c">[email&#160;protected]</a>
                                </td>
                                <td>Albania</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer5.jpg"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">B. Huber</a>
                                </td>
                                <td>589</td>
                                <td>B. Huber </td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="c981bcabacbb89acb1a8a4b9a5ace7aaa6a4">[email&#160;protected]</a>
                                </td>
                                <td>Germany</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer6.jpg"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">James Stawberry</a>
                                </td>
                                <td>254</td>
                                <td>James Stawberry</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1f7c6a6c6b70727a6d5f7a677e726f737a317c7072">[email&#160;protected]</a>
                                </td>
                                <td>Angola</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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
                                    <a href="javascript:void(0);" class="product-imgs">
                                        WC
                                    </a>
                                    <a href="javascript:void(0);">James Stawberry</a>
                                </td>
                                <td>681</td>
                                <td>Fred john</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="90fafff8fed0f5e8f1fde0fcf5bef3fffd">[email&#160;protected]</a>
                                </td>
                                <td>Albania</td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/editcustomer">
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