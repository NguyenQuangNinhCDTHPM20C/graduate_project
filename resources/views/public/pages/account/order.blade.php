@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Public/account/style.css') }}">
@stop

@section('content')
    <section class="account">
        @include('Public.partial.sidebar')
        <div class="body-content">
            <h1>Manage orders</h1>

            <div class="header">
                <div class="bg">
                    <div class="text">
                        <h2>WELCOME TO BACK, {!! Str::upper(session('account')->name) !!}</h2>
                        <p><i>Check your order information here</i></p>
                    </div>
                </div>
                <div class="icon">
                    <img src="{{ asset('images/icon-account-order.png') }}">
                </div>
            </div>
            <div class="account-layout ">
                <div class="row equaHeight" data-obj=".col .box-bg-white">
                    <div class="col col-lg">
                        <h3>Your order</h3>
                        <div class="box-bg-white" style="height: 100%;">
                            <div style="padding:25px;">
                                <table class="table table-border table-lgpading">
                                    <tbody>
                                        <tr>
                                            <th>Code</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Order Date</th>
                                            <th>Payment Method</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($orders as $_order)
                                            <tr>
                                                <td>{{ $_order->code }}</td>
                                                <td>{{ $_order->name }}</td>
                                                <td>{{ $_order->phone }}</td>
                                                <td>{{ $_order->order_date }}</td>
                                                <td>{{ $_order->payment_method }}</td>
                                                <td>{{ $_order->total }}</td>
                                                <td><button class="btn-info bg-number-left bg-number-right"><i
                                                            class="fal fa fa-eye"></i></button></td>
                                            </tr>
                                        @endforeach
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@stop
