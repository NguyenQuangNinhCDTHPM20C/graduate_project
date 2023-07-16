@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Hóa đơn mua hàng</h4>
                    <h6>Quản lý đơn hàng của bạn</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('import-invoice.create') }}" class="btn btn-added"><img
                            src="{{ asset('images/plus.svg') }}" alt="img" class="me-1">Thêm hóa đơn</a>
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
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <div class="input-groupicon">
                                            <input type="text" placeholder="From Date" class="datetimepicker">
                                            <div class="addonset">
                                                <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/calendars.svg"
                                                    alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <div class="input-groupicon">
                                            <input type="text" placeholder="To Date" class="datetimepicker">
                                            <div class="addonset">
                                                <img src="{{ asset('images/calendar.svg') }}" alt="img">
                                            </div>
                                        </div>
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
                                    <th>Code</th>
                                    <th>Tên người nhập </th>
                                    <th>Số điện thoại</th>
                                    <th>Ngày nhập</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Tổng tiền</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $_invoices)
                                    <tr>
                                        <td>{{ $_invoices->code }}</td>
                                        <td>{{ optional($_invoices->account)->name }}</td>
                                        <td>{{ optional($_invoices->account)->phone_number }}</td>
                                        <td>{{ \Carbon\Carbon::parse($_invoices->created_at)->format('d/m/Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($_invoices->updated_at)->format('d/m/Y') }}</td>
                                        <td>{{ number_format($_invoices->total) }}đ</td>
                                        </td>
                                        <td>
                                            <a class="me-3"
                                                href="{{ route('import-invoice.edit', ['code' => $_invoices->code]) }}">
                                                <img src="{{ asset('images/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3"
                                                href="{{ route('import-invoice.show', ['code' => $_invoices->code]) }}"
                                                title="Xem chi tiết">
                                                <img src="{{ asset('images/eye.svg') }}" alt="eye">
                                            </a>
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
