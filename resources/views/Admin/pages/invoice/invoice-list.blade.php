@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Hóa đơn bán hàng</h4>
                    <h6>Quản lý đơn hàng của bạn</h6>
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
                                    <a href="{{route('invoice.export')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="{{ asset('images/excel.svg') }}" alt="img"></a>
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
                                                <img src="{{ asset('images/calendars.svg') }}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <div class="input-groupicon">
                                            <input type="text" placeholder="To Date" class="datetimepicker">
                                            <div class="addonset">
                                                <img src="{{ asset('images/calendars.svg') }}" alt="img">
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
                                    <th>
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>Code</th>
                                    <th>Tên khách hàng </th>
                                    <th>Ngày đặt</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th class="text-center">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $_invoices)
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>{{ $_invoices->code }}</td>
                                        <td>{{ $_invoices->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($_invoices->created_at)->format('d/m/Y') }}</td>
                                        <td>{{ number_format($_invoices->total) }}đ</td>
                                        <td>
                                            @if ($_invoices->status == 5)
                                                <span class="badges bg-lightred">Đã hủy</span>
                                            @elseif ($_invoices->status == 4)
                                                <span class="badges bg-lightred">Không thành công</span>
                                            @elseif ($_invoices->status == 3)
                                                <span class="badges bg-lightgreen">Thành công</span>
                                            @elseif($_invoices->status == 2)
                                                <span class="badges bg-lightyellow">Đang vận chuyển</span>
                                            @elseif($_invoices->status == 1)
                                                <span class="badges bg-lightgreen">Đã xác nhận</span>
                                            @else
                                                <span class="badges bg-lightyellow">Chờ xác nhận</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a class="me-3"
                                                href="{{ route('invoice.edit', ['code' => $_invoices->code]) }}"
                                                title="Chỉnh sửa">
                                                <img src="{{ asset('images/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="pdf"><img src="{{ asset('images/pdf.svg') }}" alt="img"></a>
                                            {{-- <a class="me-3 confirm-text"
                                                onclick="$.fn.showConfirmationDeleteAlert('invoices_delete_{{ $_invoices->id }}')">
                                                <img src="{{ asset('images/delete.svg') }}" alt="img">

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
