@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')
    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark text-decoration-none" href="#">Home</a>
                    <span class="breadcrumb-item active">Invoice</span>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Order Date
                            <strong>{{ \Carbon\Carbon::parse($invoice->order_date)->format('d/m/Y') }}</strong>
                            <span class="float-right"> <strong>Code:</strong> {{ $invoice->code }}</span>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h6 class="mb-3">From:</h6>
                                    <div>
                                        <strong>Double-N Shop</strong>
                                    </div>
                                    <div>65, Huynh Thuc Khang, Ben Nghe, District 1, Ho Chi Minh City</div>
                                    <div>Email: info@example.com</div>
                                    <div>Phone: + 012 345 6789</div>
                                </div>

                                <div class="col-sm-6">
                                    <h6 class="mb-3">To:</h6>
                                    <div>
                                        <strong>{{ $invoice->name }}</strong>
                                    </div>
                                    <div>{{ $invoice->address }}</div>
                                    <div>Email: {{ $invoice->email }}</div>
                                    <div>Phone: {{ $invoice->phone }}</div>
                                </div>
                            </div>

                            <div class="table-responsive-sm">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th>Item</th>
                                            <th>Description</th>
                                            <th class="right">Unit Cost</th>
                                            <th class="center">Qty</th>
                                            <th class="right">Total</th>
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
                                                    <strong>Total</strong>
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
