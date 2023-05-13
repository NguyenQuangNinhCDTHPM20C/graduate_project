@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')
<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        @if ($message = Session::get('success'))
        <div class="p-4 mb-3 bg-green-400 rounded">
            <p class="text-green-800">{{ $message }}</p>
        </div>
        @endif
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @foreach ($cartItems as $item)
                    <tr>
                        <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;">
                            {{ $item->name }}
                        </td>
                        <td class="align-middle">${{ $item->price }}</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id}}">
                                    <input type="number"
                                        class="form-control form-control-sm bg-secondary border-0 text-center"
                                        value="{{ $item->quantity }}" onchange="updateCartQuantity(event)">
                                </form>
                            </div>
                        </td>
                        <td class="align-middle">{{$item->quantity * $item->price}}</td>
                        <td class="align-middle">
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}" name="id"><button
                                    class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
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
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart
                    Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6>$150</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">$10</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5>${{ Cart::getTotal() }}VNĐ</h5>
                    </div>

                    <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
@stop
@section('scripts')
<script>
$.ajax({
    url: '{{ route("cart.update") }}',
    type: 'POST',
    data: {
        id: id,
        quantity: newQuantity // pass the new quantity here
    },
    success: function(response) {
        // handle success response
    },
    error: function(xhr) {
        // handle error response
    }
});
</script>
@stop