@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')
    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark text-decoration-none" href="{{ route('home') }}">Trang chủ</a>
                    <span class="breadcrumb-item active">Giỏ hàng</span>
                </nav>
            </div>
        </div>
        @if (Cart::getTotalQuantity() != 0)
            <div class="row px-xl-5">
                <div class="col-lg-8 table-responsive mb-5">
                    <table class="table table-light table-borderless table-hover text-center mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Màu sắc</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach ($cartItems as $key => $item)
                                <tr>
                                    <td class="align-middle description"><img src="{{ asset($item->attributes->image) }}"
                                            alt="" style="width: 50px;">
                                        {{ $item->name }}
                                    </td>
                                    <td class="align-middle">{{ $item->attributes->color }}</td>
                                    <td class="align-middle">{{ number_format($item->price, 0, ',', '.') }}đ</td>
                                    <td class="align-middle">
                                        <div class="input-group quantity mx-auto bg-radius-right bg-radius-left"
                                            style="width: 100px;">
                                            <form method="POST" action="{{ route('cart.update') }}"
                                                enctype="multipart/form-data">
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                @csrf
                                                @method('POST')
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <div class="input-group quantity mr-3" style="width: 130px;">
                                                    <div class="input-group-btn">
                                                        <span
                                                            class="btn btn-primary btn-minus bg-number-left border border-dark-subtle">
                                                            <i class="fa fa-minus"></i>
                                                        </span>
                                                    </div>
                                                    <input type="number"
                                                        class="form-control bg-radius-none text-center text-dark border border-dark-subtle p-0"
                                                        name="quantity" min="1" value="{{ $item->quantity }}">
                                                    <div class="input-group-btn">
                                                        <span
                                                            class="btn btn-primary btn-plus bg-number-right border border-dark-subtle">
                                                            <i class="fa fa-plus"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="align-middle pl-5">
                                        {{ number_format($item->quantity * $item->price, 0, ',', '.') }}đ</td>
                                    <td class="align-middle">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id"><button
                                                class="btn btn-sm btn-danger container-xl bg-number-left bg-number-right"><i
                                                    class="fa-regular fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    <form class="mb-30" action="{{ route('apply-discount') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="code" class="form-control border-0 p-4" placeholder="Mã giảm giá"
                                required>
                            <button class="btn btn-send">Áp dụng</button>
                        </div>
                    </form>
                    <div class="bg-light p-30 mb-5 bg-radius bg-shadow">
                        <div class="border-bottom pb-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h6>Tổng phụ</h6>
                                <h6>{{ number_format(Cart::getTotal(), 0, ',', '.') }}đ</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Giá giảm</h6>
                                @php
                                    $discount_amount = session()->get('discount_amount');
                                    $price_discount = $discount_amount ? Cart::getTotal() * ($discount_amount / 100) : 0;
                                @endphp

                                <h6 class="font-weight-medium">-{{ number_format($price_discount, 0, ',', '.') }}đ</h6>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Tổng tiền</h5>
                                <h5>{{ number_format(Cart::getTotal() - $price_discount, 0, ',', '.') }}đ</h5>
                            </div>

                            <a href="{{ route('checkout') }}"
                                class="btn btn-block btn-custom font-weight-bold my-3 py-3 bg-number-left bg-number-right">Thanh
                                toán</a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="no-items">
                <div class="cart-icon">
                    <i class="fa fa-solid fa-triangle-exclamation"></i>
                    <label>Giỏ hàng</label>
                </div>
                <div class="img">
                    <img src="{{ asset('images/no-item.png') }}">
                    <p><strong>Hiện chưa có sản phẩm nào trong giỏ hàng</strong></p>
                </div>
            </div>

        @endif
    </div>
    <!-- Cart End -->
@stop
@section('scripts')
    <script>
        // Lựa chọn tất cả các phần tử .quantity
        const quantityContainers = document.querySelectorAll('.quantity');

        // Duyệt qua từng phần tử .quantity
        quantityContainers.forEach(quantityContainer => {
            const input = quantityContainer.querySelector('input');
            const btnMinus = quantityContainer.querySelector('.btn-minus');
            const btnPlus = quantityContainer.querySelector('.btn-plus');
            const form = quantityContainer.closest('form');

            // Thêm sự kiện "click" cho nút "tăng"
            btnPlus.addEventListener('click', (event) => {
                event.preventDefault(); // Ngăn chặn hành vi mặc định của form
                let value = parseInt(input.value);
                value += 1;
                input.value = value;
                form.submit(); // Gửi form
            });

            // Thêm sự kiện "click" cho nút "giảm"
            btnMinus.addEventListener('click', (event) => {
                event.preventDefault(); // Ngăn chặn hành vi mặc định của form
                let value = parseInt(input.value);
                value -= 1;
                if (value < 1) {
                    value = 1;
                }
                input.value = value;
                form.submit(); // Gửi form
            });
        });
    </script>
@stop
