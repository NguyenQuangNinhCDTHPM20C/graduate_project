{{-- @extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('invoice.list') }}">Hóa đơn /</a>
                        <span>Chỉnh sửa</span>
                    </h6>
                    <h4>Cập nhật trạng thái hóa đơn của bạn</h4>
                </div>
            </div>
            <form method="post" action="{{ route('invoice.update', $invoice->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" name="code" class="form-control" value="{{ $invoice->code }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Khách hàng</label>
                                    <input type="text" name="name" class="form-control" value="{{ $invoice->name }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Ngày đặt</label>
                                    <input type="text" name="created_at" class="form-control"
                                        value="{{ $invoice->created_at }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="address" class="form-control"
                                        value="{{ $invoice->address }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="phone_number" class="form-control"
                                        value="{{ $invoice->phone }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $invoice->email }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tổng tiền</label>
                                    <input type="text" name="total" class="form-control" value="{{ $invoice->total }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Hình thức thanh toán</label>
                                    <input type="text" name="payment_method" class="form-control"
                                        value="{{ $invoice->payment_method }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label> Trạng thái</label>
                                <select class="select" name="status" id="status" class="form-control" required>
                                    <option value="1" @if ($invoice->status == 1) selected @endif>Hoàn thành
                                    </option>
                                    <option value="0" @if ($invoice->status == 0) selected @endif>Chưa hoàn thành
                                    </option>
                                    <option value="2" @if ($invoice->status == 2) selected @endif>Thất bại
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button href="javascript:void(0);" type="submit" class="btn btn-submit me-2">CẬP
                                NHẬT</button>
                            <a href="{{ route('invoice.list') }}" class="btn btn-cancel">THOÁT</a>
                        </div>

                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
@section('scripts')
    <script>
        function previewImage(event) {
            // Lấy đối tượng input file và đối tượng img
            var input = event.target;
            var img = document.getElementById('preview-image');

            // Tạo URL từ tệp được chọn
            var url = URL.createObjectURL(input.files[0]);

            // Gán URL cho thuộc tính src của img
            img.src = url;
        }
    </script>
@endsection --}}
@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper" data-select2-id="11" style="min-height: 414px;">
        <div class="content" data-select2-id="10">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('invoice.list') }}">Hóa đơn /</a>
                        <span>Chỉnh sửa</span>
                    </h6>
                    <h4>Cập nhật trạng thái hóa đơn của bạn</h4>
                </div>
                <div class="page-btn">
                    <ul class="row d-inline">
                        <li class="d-inline">
                            <a href="{{ route('invoice.edit', ['code' => $invoice->code]) }}"><img
                                    src="{{ asset('images/edit.svg') }}" alt="img"></a>
                        </li>
                        <li class="d-inline">
                            <a href="javascript:void(0);"><img src="{{ asset('images/pdf.svg') }}" alt="img"></a>
                        </li>
                        <li class="d-inline">
                            <a href="javascript:void(0);"><img src="{{ asset('images/printer.svg') }}" alt="img"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card" data-select2-id="9">
                <div class="card-body" data-select2-id="8">
                    <div class="card-sales-split">
                        <h2>Hóa đơn : {{ $invoice->code }}</h2>
                        <h2>Ngày đặt : {{ \Carbon\Carbon::parse($invoice->created_at)->format('d/m/Y') }}</h2>
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
                                                                Khách hàng</font>
                                                        </font><br>
                                                        <font style="vertical-align: inherit;">
                                                            <font
                                                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                                                {{ $invoice->name }} </font>
                                                        </font><br>
                                                        <font style="vertical-align: inherit;">
                                                            <font
                                                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                                                Email: {{ $invoice->emai }}</font>
                                                        </font><br>
                                                        <font style="vertical-align: inherit;">
                                                            <font
                                                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                                                Số điện thoại: {{ $invoice->phone }}</font>
                                                        </font><br>
                                                        <font style="vertical-align: inherit;">
                                                            <font
                                                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                                                Địa chỉ: {{ $invoice->address }}</font>
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
                                @foreach ($invoice_details as $invoice_detail)
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
                    <form method="post" action="{{ route('invoice.update', $invoice->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row justify-content-end">
                            <div class="col-lg-6  ">
                                <div class="total-order w-100 max-widthauto m-auto mb-4">
                                    <ul>
                                        <li>
                                            <h4>Giá giảm</h4>
                                            <h5>{{ number_format($discount_total, 0, ',', '.') }}đ</h5>
                                        </li>
                                        <li class="total">
                                            <h4>Tổng tiền</h4>
                                            <h5>{{ number_format($invoice->total, 0, ',', '.') }}đ</h5>
                                        </li>
                                        <li>
                                            <h4>Trạng thái</h4>
                                            <h5>
                                                <select @if ($invoice->status == 5 || $invoice->status == 4 || $invoice->status == 3) ? disabled : '' @endif
                                                    class="select text-left" name="status" id="status"
                                                    class="form-control" required>
                                                    @if ($invoice->status == 0)
                                                        <option class="text-left" value="0">
                                                            Chờ xác nhận
                                                        </option>
                                                        <option class="text-left" value="1">
                                                            Xác nhận
                                                        </option>
                                                    @elseif($invoice->status == 1)
                                                        <option class="text-left" value="1">
                                                            Đã xác nhận
                                                        </option>
                                                        <option class="text-left" value="2">
                                                            Đang vận chuyển
                                                        </option>
                                                    @elseif($invoice->status == 2)
                                                        <option class="text-left" value="2">
                                                            Đang vận chuyển
                                                        </option>
                                                        <option class="text-left" value="3">
                                                            Thành công
                                                        </option>
                                                        <option class="text-left" value="4">
                                                            Không thành công
                                                        </option>
                                                    @elseif($invoice->status == 3)
                                                        <option class="text-left" value="3">
                                                            Thành công
                                                        </option>
                                                    @elseif($invoice->status == 4)
                                                        <option class="text-left" value="5">
                                                            Không thành công
                                                        </option>
                                                    @else
                                                        <option class="text-left" value="5">
                                                            Đã hủy
                                                        </option>
                                                    @endif
                                                </select>

                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button href="javascript:void(0);" type="submit" class="btn btn-submit me-2">CẬP
                                NHẬT</button>
                            <a href="{{ route('invoice.list') }}" class="btn btn-cancel">THOÁT</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@stop
