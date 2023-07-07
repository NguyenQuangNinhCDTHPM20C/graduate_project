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
                            Ngày đặt
                            <strong>{{ \Carbon\Carbon::parse($invoice->order_date)->format('d/m/Y') }}</strong>
                            <span class="float-right"> <strong>Code:</strong> {{ $invoice->code }}</span>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h6 class="mb-3">Từ:</h6>
                                    <div>
                                        <strong>Double-N Shop</strong>
                                    </div>
                                    <div>65, Huỳnh Thúc Kháng, Bến Nghé, quận 1, Thành phố Hồ Chí Minh</div>
                                    <div>Email: contatc@doublenshop.com</div>
                                    <div>Số điện thoại: + 012 345 6789</div>
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
                                            <th class="center">Số lượng</th>
                                            <th class="right">Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order_items as $index => $item)
                                            <tr>
                                                <td class="center">{{ $index + 1 }}</td>
                                                <td class="left strong">{{ $item->product->name }}</td>
                                                <td class="left">{{ $item->product->description }}</td>
                                                <td class="right">${{ $item->price }}</td>
                                                <td class="center">{{ $item->quantity }}</td>
                                                <td class="right">${{ $item->quantity * $item->price }}</td>
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
                                                    <strong>Tổng tiền</strong>
                                                </td>
                                                <td class="right">
                                                    <strong>${{ $invoice->total }}</strong>
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
