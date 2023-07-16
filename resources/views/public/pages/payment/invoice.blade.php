@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')
    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark text-decoration-none" href="{{ route('home') }}">Trang chủ</a>
                    <span class="breadcrumb-item active">Hóa đơn</span>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Ngày đặt:
                            <strong
                                class="pr-3">{{ \Carbon\Carbon::parse($invoice->created_at)->format('d/m/Y') }}</strong>

                            Trạng thái:
                            @if ($invoice->status == 5)
                                <strong> Đã hủy</strong>
                            @elseif ($invoice->status == 4)
                                <strong> Không thành công</strong>
                            @elseif ($invoice->status == 3)
                                <strong>Thành công</strong>
                            @elseif($invoice->status == 2)
                                <strong>Đang vận chuyển</strong>
                            @elseif($invoice->status == 1)
                                <strong>Đã xác nhận</strong>
                            @else
                                <strong>Chờ xác nhận</strong>
                            @endif
                            <span class="float-right">Code: <strong>{{ $invoice->code }}</strong> </span>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h6 class="mb-3">Từ:</h6>
                                    <div>
                                        <strong>Double-N Shop</strong>
                                    </div>
                                    <div>Địa chỉ: {{ $settings->address }}</div>
                                    <div>Email: {{ $settings->email }}</div>
                                    <div>Số điện thoại: {{ $settings->phone_number }}</div>
                                </div>

                                <div class="col-sm-6">
                                    <h6 class="mb-3">Đến:</h6>
                                    <div>
                                        <strong>{{ $invoice->name }}</strong>
                                    </div>
                                    <div>{{ $invoice->address }}</div>
                                    <div>Email: {{ $invoice->email }}</div>
                                    <div>Số điện thoại: {{ $invoice->phone }}</div>
                                </div>
                            </div>

                            <div class="table-responsive-sm">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="center">STT</th>
                                            <th>Sản phẩm</th>
                                            <th>Mô tả</th>
                                            <th class="right">Giá</th>
                                            <th class="center">SL</th>
                                            <th class="right">Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order_items as $index => $item)
                                            <tr>
                                                <td class="center">{{ $index + 1 }}</td>
                                                <td class="left strong"><a
                                                        class="text-dark name-product text-decoration-none"
                                                        href="{{ route('product-detail', ['slug' => optional($item->product)->slug]) }}">{{ optional($item->product)->name }}</a>
                                                </td>
                                                <td class="left description">{{ optional($item->product)->description }}
                                                </td>
                                                <td class="right">{{ number_format($item->price, 0, ',', '.') }}đ</td>
                                                <td class="center">{{ $item->quantity }}</td>
                                                <td class="right">
                                                    {{ number_format($item->quantity * $item->price, 0, ',', '.') }}đ</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-5">

                                </div>

                                <div class="col-lg-4 col-sm-5 ml-auto">
                                    <table class="table table-clear">
                                        <tbody>
                                            <tr>
                                                <td class="left">
                                                    <strong>Giảm giá</strong>
                                                </td>
                                                <td class="right">
                                                    <strong>{{ number_format($discount_total, 0, ',', '.') }}đ</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    <strong>Tổng tiền</strong>
                                                </td>
                                                <td class="right">
                                                    <strong>{{ number_format($invoice->total, 0, ',', '.') }}đ</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    <strong>Hình thức thanh toán</strong>
                                                </td>
                                                <td class="right">
                                                    <strong>{{ $invoice->payment_method }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">

                                                </td>
                                                <td class="right">
                                                    @if ($invoice->status == 0)
                                                        <form action="{{ route('cancel_order') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="invoice_id"
                                                                value="{{ $invoice->id }}">
                                                            <input type="hidden" name="status" value="5">
                                                            <button type="submit"
                                                                class="btn btn-block btn-custom font-weight-bold my-3 py-3 bg-number-left bg-number-right">HỦY
                                                                ĐƠN HÀNG</button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Checkout End -->
@stop
