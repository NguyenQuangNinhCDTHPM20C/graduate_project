@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper" data-select2-id="11" style="min-height: 414px;">
        <div class="content" data-select2-id="10">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('import-invoice.list') }}">Hóa đơn /</a>
                        <span>Chi tiết</span>
                    </h6>
                    <h4>Chi tiết đơn hàng của bạn</h4>
                </div>
                <div class="page-btn">
                    <ul class="row d-inline">
                    </ul>
                </div>
            </div>
            <div class="card" data-select2-id="9">
                <div class="card-body" data-select2-id="8">
                    <div class="card-sales-split">
                        <h2>Hóa đơn : {{ $importInvoice->code }}</h2>
                        <h2>Ngày nhập : {{ \Carbon\Carbon::parse($importInvoice->created_at)->format('d/m/Y') }}</h2>
                    </div>
                    <div class="invoice-box table-height"
                        style="max-width: 1600px;width:100%;overflow: auto;margin:15px auto;padding: 0;font-size: 14px;line-height: 24px;color: #555;">
                        <table cellpadding="0" cellspacing="0" style="width: 100%;line-height: inherit;text-align: left;">
                            <tbody>
                                <tr class="top">
                                    <td colspan="6" style="padding: 5px;vertical-align: top;">
                                        <table style="width: 100%;line-height: inherit;text-align: left;">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                                                        <font style="vertical-align: inherit;margin-bottom:25px;">
                                                            <font
                                                                style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; ">
                                                                Cửa hàng:</font>
                                                        </font><br>
                                                        <font style="vertical-align: inherit;">
                                                            <font
                                                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                                                Double-N Shop</font>
                                                        </font><br>
                                                        <font style="vertical-align: inherit;">
                                                            <font
                                                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                                                Email: {{ $settings->email }}</font>
                                                        </font><br>
                                                        <font style="vertical-align: inherit;">
                                                            <font
                                                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                                                Số điện thoại: {{ $settings->phone_number }}</font>
                                                        </font><br>
                                                        <font style="vertical-align: inherit;">
                                                            <font
                                                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                                                Địa chỉ: {{ $settings->address }}</font>
                                                        </font><br>
                                                    </td>
                                                    <td
                                                        style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                                                    </td>
                                                    <td
                                                        style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                                                        <font style="vertical-align: inherit;margin-bottom:25px;">
                                                            <font
                                                                style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; ">
                                                                Nhà cung cấp</font>
                                                        </font><br>
                                                        <font style="vertical-align: inherit;">
                                                            <font
                                                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                                                {{ $importInvoice->supplier }} </font>
                                                        </font><br>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="heading " style="background: #F3F2F7;">
                                    <td
                                        style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                        Sản phẩm
                                    </td>
                                    <td
                                        style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                        Số lượng
                                    </td>
                                    <td
                                        style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                        Giá
                                    </td>
                                    <td
                                        style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                        Tổng phụ
                                    </td>
                                </tr>
                                @foreach ($importInvoiceDetail as $invoice_detail)
                                    <tr class="details" style="border-bottom:1px solid #E9ECEF ;">
                                        <td style="padding: 10px;vertical-align: top; display: flex;align-items: center;">
                                            <img src="{{ asset(optional($invoice_detail->product->featured_image)->image_path) }}"
                                                alt="img" class="me-2" style="width:40px;height:40px;">
                                            {{ optional($invoice_detail->product)->name }}
                                        </td>
                                        <td style="padding: 10px;vertical-align: top; ">
                                            {{ $invoice_detail->quantity }}
                                        </td>
                                        <td style="padding: 10px;vertical-align: top; ">
                                            {{ number_format($invoice_detail->price, 0, ',', '.') }}đ
                                        </td>
                                        <td style="padding: 10px;vertical-align: top; ">
                                            {{ number_format($invoice_detail->quantity * $invoice_detail->price, 0, ',', '.') }}đ
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-6  ">
                            <div class="total-order w-100 max-widthauto m-auto mb-4">
                                <ul>
                                    <li class="total">
                                        <h4>Tổng tiền</h4>
                                        <h5>{{ number_format($importInvoice->total, 0, ',', '.') }}đ</h5>
                                    </li>
                                    <li>
                                        <h4>Trạng thái</h4>
                                        <h5>
                                            {{ $importInvoice->status == 0 ? 'Chưa hoàn thành' : 'Hoàn thành' }}
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
