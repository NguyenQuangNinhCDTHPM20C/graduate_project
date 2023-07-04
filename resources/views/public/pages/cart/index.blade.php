@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')
    <!-- Cart Start -->
    <div class="container-fluid">
        @if (Cart::getTotalQuantity() != 0)
            <div class="row px-xl-5">
                <div class="col-lg-8 table-responsive mb-5">
                    <table class="table table-light table-borderless table-hover text-center mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Products</th>
                                <th>Color</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach ($cartItems as $key => $item)
                                <tr>
                                    <td class="align-middle"><img src="{{ asset($item->attributes->image) }}" alt=""
                                            style="width: 50px;">
                                        {{ $item->name }}
                                    </td>
                                    <td class="align-middle">{{ $item->attributes->color }}</td>
                                    <td class="align-middle">${{ $item->price }}</td>
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
                                                        <button class="btn btn-primary btn-minus bg-number-left">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text"
                                                        class="form-control bg-radius-none bg-secondary border-0 text-center"
                                                        name="quantity" value="{{ $item->quantity }}">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary btn-plus bg-number-right">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="align-middle">{{ $item->quantity * $item->price }}</td>
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
                    <form class="mb-30" action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                            <button class="btn btn-send">Apply</button>
                        </div>
                    </form>
                    <div class="bg-light p-30 mb-5 bg-radius bg-shadow">
                        <div class="border-bottom pb-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h6>Subtotal</h6>
                                <h6>${{ Cart::getTotal() }}VNĐ</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Shipping</h6>
                                <h6 class="font-weight-medium">$10</h6>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Total</h5>
                                <h5>${{ Cart::getTotal() + 10 }}VNĐ</h5>
                            </div>

                            <a href="{{ route('checkout') }}"
                                class="btn btn-block btn-custom font-weight-bold my-3 py-3 bg-number-left bg-number-right">Proceed
                                To
                                Checkout</a>
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
        const input = document.querySelector('.quantity input');
        const btnMinus = document.querySelector('.quantity .btn-minus');
        const btnPlus = document.querySelector('.quantity .btn-plus');

        // Thêm sự kiện "click" cho nút "tăng"
        btnPlus.addEventListener('click', (event) => {
            // event.preventDefault(); // Ngăn chặn hành vi mặc định của form
            let value = parseInt(input.value);
            value += 1;
            input.value = value;
        });

        // Thêm sự kiện "click" cho nút "giảm"
        btnMinus.addEventListener('click', (event) => {
            // event.preventDefault(); // Ngăn chặn hành vi mặc định của form
            let value = parseInt(input.value);
            value -= 1;
            if (value < 1) {
                value = 1;
            }
            input.value = value;
        });
    </script>
@stop
