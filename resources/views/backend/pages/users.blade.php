@extends('backend.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>User List</h4>
                <h6>Manage your User</h6>
            </div>
            <div class="page-btn">
                <a href="https://dreamspos.dreamguystech.com/laravel/template/public/adduser" class="btn btn-added"><img
                        src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/plus.svg"
                        alt="img" class="me-2">Add User</a>
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
                            <a class="btn btn-searchset">
                                <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/search-white.svg"
                                    alt="img">
                            </a>
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
                                    <input type="text" placeholder="Enter User Name">
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
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Disable</option>
                                        <option>Enable</option>
                                    </select>
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
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Profile</th>
                                <th>First name </th>
                                <th>Last name </th>
                                <th>User name </th>
                                <th>Phone</th>
                                <th>email</th>
                                <th>Status</th>
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
                                </td>
                                <td>Thomas</td>
                                <td>Thomas </td>
                                <td>Thomas21 </td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="44302c2b29253704213c25293428216a272b29">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user1" class="check">
                                        <label for="user1" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/edituser">
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
                                </td>
                                <td>Benjamin</td>
                                <td>Franklin </td>
                                <td>504Benjamin </td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="c7a4b2b4b3a8aaa2b587a2bfa6aab7aba2e9a4a8aa">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user2" class="check" checked="">
                                        <label for="user2" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/edituser">
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
                                </td>
                                <td>James</td>
                                <td>James </td>
                                <td>James 524 </td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="9ef4fff3fbeddefbe6fff3eef2fbb0fdf1f3">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user3" class="check" checked="">
                                        <label for="user3" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/edituser">
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
                                </td>
                                <td>Bruklin</td>
                                <td>Bruklin </td>
                                <td>Bruklin2022</td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="600212150b0c090e200518010d100c054e030f0d">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user4" class="check" checked="">
                                        <label for="user4" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/edituser">
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
                                </td>
                                <td>Franklin</td>
                                <td>Jacob </td>
                                <td>BeverlyWIN25</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="c88aadbeadbaa4b188adb0a9a5b8a4ade6aba7a5">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user5" class="check">
                                        <label for="user5" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/edituser">
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
                                </td>
                                <td>B. Huber </td>
                                <td>Jacob </td>
                                <td>BeverlyWIN25</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="3a724f585f487a5f425b574a565f14595557">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user6" class="check">
                                        <label for="user6" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/edituser">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer7.jpg"
                                            alt="product">
                                    </a>
                                </td>
                                <td>Alwin</td>
                                <td>Alwin </td>
                                <td>Alwin243</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="95f6e0e6e1faf8f0e7d5f0edf4f8e5f9f0bbf6faf8">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user7" class="check">
                                        <label for="user7" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/edituser">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer8.jpg"
                                            alt="product">
                                    </a>
                                </td>
                                <td>Fred john</td>
                                <td>john </td>
                                <td>FredJ25</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="5b313433351b3e233a362b373e75383436">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user15" class="check">
                                        <label for="user15" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/edituser">
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
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/customer/customer1.jpg"
                                            alt="product">
                                    </a>
                                </td>
                                <td>Rasmussen </td>
                                <td>Gothic </td>
                                <td>Cras56</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="a6f4c7d5cbd3d5d5c3c8e6c3dec7cbd6cac388c5c9cb">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user9" class="check" checked>
                                        <label for="user9" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/edituser">
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
                                </td>
                                <td>Grace </td>
                                <td>Halena </td>
                                <td>Grace2022</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="9bf8eee8eff4f6fee9dbfee3faf6ebf7feb5f8f4f6">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user10" class="check" checked>
                                        <label for="user10" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/edituser">
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
                                </td>
                                <td>Rasmussen </td>
                                <td>Gothic </td>
                                <td>Cras56</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="134172607e666060767d53766b727e637f763d707c7e">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user19" class="check" checked>
                                        <label for="user19" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/edituser">
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
                                </td>
                                <td>Grace </td>
                                <td>Halena </td>
                                <td>Grace2022</td>
                                <td>+12163547758 </td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="82e1f7f1f6edefe7f0c2e7fae3eff2eee7ace1edef">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user18" class="check" checked>
                                        <label for="user18" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <a class="me-3"
                                        href="https://dreamspos.dreamguystech.com/laravel/template/public/edituser">
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