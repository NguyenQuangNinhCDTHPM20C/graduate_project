@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper" style="min-height: 347px;">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Chỉnh sửa hóa đơn mua hàng</h4>
                </div>
            </div>
            <div class="card" data-select2-id="16">
                <div class="card-body" data-select2-id="15">
                    <form action="{{ route('import-invoice.update', $importInvoice->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Mã đơn hàng</label>
                                    <input type="text" name="code" placeholder="Vui lòng nhập mã đơn hàng" required
                                        value="{{ $importInvoice->code }}"
                                        {{ $importInvoice->status == 1 ? 'readonly' : '' }}>
                                    <input type="hidden" name="account_id"
                                        value="{{ session()->has('account') ? session('account')->id : '' }}" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12" data-select2-id="14">
                                <div class="form-group" data-select2-id="13">
                                    <label>Nhà cung cấp</label>
                                    <input type="text" name="supplier" placeholder="Vui lòng nhập tên nhà cung cấp"
                                        required value="{{ $importInvoice->supplier }}"
                                        {{ $importInvoice->status == 1 ? 'readonly' : '' }}>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Ngày nhập</label>
                                    <div class="input-groupicon">
                                        <input type="text" placeholder="DD-MM-YYYY" class="datetimepicker"
                                            value="{{ $importInvoice->created_at->format('d-m-Y') }}"
                                            {{ $importInvoice->status == 1 ? 'readonly' : '' }}>
                                        <div class="addonset">
                                            <img src="{{ asset('images/calendars.svg') }}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select class="select" name="status" id="status" class="form-control"
                                        {{ $importInvoice->status == 1 ? 'disabled' : '' }}>
                                        <option value="1" {{ $importInvoice->status == 1 ? 'selected' : '' }}>
                                            Hoàn thành
                                        </option>
                                        <option value="0" {{ $importInvoice->status == 0 ? 'selected' : '' }}>
                                            Chưa hoàn thành
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table" id="productTable">
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá mua</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($importInvoiceDetail as $importDetail)
                                            <tr class="productRow">
                                                <td class="productimgname">
                                                    <select class="select form-control productSelect"
                                                        name="product_quantity[{{ $importDetail->id }}]" required
                                                        style="width: 100%;"
                                                        {{ $importInvoice->status == 1 ? 'disabled' : '' }}>
                                                        <option value="{{ $importDetail->id }}" selected>
                                                            {{ $importDetail->product->name }}
                                                        </option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number"
                                                        name="quantity[{{ $importDetail->id }}]"
                                                        value="{{ $importDetail->quantity }}" placeholder="Số lượng"
                                                        required>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number"
                                                        name="price[{{ $importDetail->id }}]"
                                                        value="{{ $importDetail->price }}" placeholder="Giá tiền" required
                                                        {{ $importInvoice->status == 1 ? 'readonly' : '' }}>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-5 mb-3">
                            <button href="javascript:void(0);" class="btn btn-submit me-2">CẬP NHẬT</button>
                            <a href="{{ route('import-invoice.list') }}" class="btn btn-cancel">THOÁT</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
