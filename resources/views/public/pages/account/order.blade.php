@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Public/account/style.css') }}">
@stop

@section('content')
    <section class="account">
        @include('Public.partial.sidebar')
        <div class="body-content">
            <h1>Quản lý đơn hàng</h1>

            <div class="header">
                <div class="bg">
                    <div class="text">
                        <h2>CHÀO MỪNG QUAY TRỞ LẠI, {!! Str::upper(session('account')->name) !!}</h2>
                        <p><i>Kiểm tra thông tin đơn hàng của bạn tại đây</i></p>
                    </div>
                </div>
                <div class="icon">
                    <img src="{{ asset('images/icon-account-order.png') }}">
                </div>
            </div>
            <div class="account-layout ">
                <div class="row equaHeight" data-obj=".col .box-bg-white">
                    <div class="col col-lg">
                        <h3>Đơn hàng đã đặt</h3>
                        <div class="box-bg-white" style="height: 100%;">
                            <div style="padding:25px;">
                                @if (count($orders) > 0)
                                    <table class="table table-border table-lgpading">
                                        <tbody>
                                            <tr>
                                                <th>Code</th>
                                                <th>Tên</th>
                                                <th>Số điện thoại</th>
                                                <th>Ngày đặt</th>
                                                <th>Hình thức thanh toán</th>
                                                <th>Tổng tiền</th>
                                                <th>Chức năng</th>
                                            </tr>
                                            @foreach ($orders as $_order)
                                                <tr>
                                                    <td>{{ $_order->code }}</td>
                                                    <td>{{ $_order->name }}</td>
                                                    <td>{{ $_order->phone }}</td>
                                                    <td>{{ $_order->created_at }}</td>
                                                    <td>{{ $_order->payment_method }}</td>
                                                    <td>{{ number_format($_order->total, 0, ',', '.') }}đ</td>
                                                    <td><a href="{{ route('invoice', ['code' => $_order->code]) }}"
                                                            class="btn btn-info bg-number-left bg-number-right"><i
                                                                class="fal fa fa-eye"></i></a></td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                Bạn chưa có đơn hàng nào!!
                                            </tr>
                                @endif
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@stop
