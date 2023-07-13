@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper" style="min-height: 347px;">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Thêm sản phẩm vào mua hàng</h4>
                    <h6>Thêm sản phẩm vào mua hàng</h6>
                </div>
            </div>
            <div class="card" data-select2-id="16">
                <div class="card-body" data-select2-id="15">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12" data-select2-id="14">
                            <div class="form-group" data-select2-id="13">
                                <label>Supplier Name</label>
                                <div class="row" data-select2-id="12">
                                    <div class="col-lg-10 col-sm-10 col-10" data-select2-id="11">
                                        <select class="select select2-hidden-accessible" data-select2-id="1" tabindex="-1"
                                            aria-hidden="true">
                                            <option data-select2-id="3">Select</option>
                                            <option data-select2-id="18">Supplier</option>
                                        </select><span
                                            class="select2 select2-container select2-container--default select2-container--below"
                                            dir="ltr" data-select2-id="2" style="width: 100%;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-5qbi-container"><span
                                                        class="select2-selection__rendered" id="select2-5qbi-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Select">Select</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                        <div class="add-icon">
                                            <a href="javascript:void(0);"><img
                                                    src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/plus1.svg"
                                                    alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Purchase Date </label>
                                <div class="input-groupicon">
                                    <input type="text" placeholder="DD-MM-YYYY" class="datetimepicker">
                                    <div class="addonset">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/calendars.svg"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <select class="select select2-hidden-accessible" data-select2-id="4" tabindex="-1"
                                    aria-hidden="true">
                                    <option data-select2-id="6">Choose</option>
                                    <option>Supplier Name</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    data-select2-id="5" style="width: 100%;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                            aria-labelledby="select2-frm3-container"><span
                                                class="select2-selection__rendered" id="select2-frm3-container"
                                                role="textbox" aria-readonly="true" title="Choose">Choose</span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Reference No.</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <div class="input-groupicon">
                                    <input type="text" placeholder="Scan/Search Product by code and select...">
                                    <div class="addonset">
                                        <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/scanners.svg"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>QTY</th>
                                        <th>Purchase Price($) </th>
                                        <th>Discount($) </th>
                                        <th>Tax %</th>
                                        <th>Tax Amount($)</th>
                                        <th class="text-end">Unit Cost($)</th>
                                        <th class="text-end">Total Cost ($) </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="productimgname">
                                            <a class="product-img">
                                                <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/product7.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Apple Earpods</a>
                                        </td>
                                        <td>10.00</td>
                                        <td>2000.00</td>
                                        <td>500.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td class="text-end">2000.00</td>
                                        <td class="text-end">2000.00</td>
                                        <td>
                                            <a class="delete-set"><img
                                                    src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/delete.svg"
                                                    alt="svg"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="productimgname">
                                            <a class="product-img">
                                                <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/product/product6.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Macbook Pro</a>
                                        </td>
                                        <td>15.00</td>
                                        <td>6000.00</td>
                                        <td>100.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td class="text-end">1000.00</td>
                                        <td class="text-end">1000.00</td>
                                        <td>
                                            <a class="delete-set"><img
                                                    src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/delete.svg"
                                                    alt="svg"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 float-md-right">
                            <div class="total-order">
                                <ul>
                                    <li>
                                        <h4>Order Tax</h4>
                                        <h5>$ 0.00 (0.00%)</h5>
                                    </li>
                                    <li>
                                        <h4>Discount </h4>
                                        <h5>$ 0.00</h5>
                                    </li>
                                    <li>
                                        <h4>Shipping</h4>
                                        <h5>$ 0.00</h5>
                                    </li>
                                    <li class="total">
                                        <h4>Grand Total</h4>
                                        <h5>$ 0.00</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Order Tax</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Discount</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Shipping</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="select select2-hidden-accessible" data-select2-id="7" tabindex="-1"
                                    aria-hidden="true">
                                    <option data-select2-id="9">Choose Status</option>
                                    <option>Completed</option>
                                    <option>Inprogress</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    data-select2-id="8" style="width: 100%;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-x0rx-container"><span
                                                class="select2-selection__rendered" id="select2-x0rx-container"
                                                role="textbox" aria-readonly="true" title="Choose Status">Choose
                                                Status</span><span class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                            <a href="https://dreamspos.dreamguystech.com/laravel/template/public/purchaselist"
                                class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
