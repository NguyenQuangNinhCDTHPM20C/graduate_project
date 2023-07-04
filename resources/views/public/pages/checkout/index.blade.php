@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')
    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark text-decoration-none" href="#">Home</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>

        <form action="{{ route('payment.process') }}" method="POST">
            @csrf
            <input name="account_id" class="form-control" type="hidden"
                value="{{ session()->has('account') ? session('account')->id : '' }}" required>
            <input type="hidden" name="cart_items" value="{{ json_encode($cartItems) }}">
            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <div class="bg-light p-30 mb-5 bg-radius">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Name: </label>
                                <input name="name" class="form-control" type="text" placeholder="Enter your name *"
                                    value="{{ session()->has('account') ? session('account')->name : '' }}" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail: </label>
                                <input name="email" class="form-control" type="text" placeholder="Enter your email *"
                                    value="{{ session()->has('account') ? session('account')->email : '' }}" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Phone number: </label>
                                <input name="phone_number" class="form-control" type="text" placeholder="+84"
                                    value="{{ session()->has('account') ? session('account')->phone_number : '' }}"
                                    required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address: </label>
                                <input name="address" class="form-control" type="text" placeholder="Enter your address *"
                                    value="{{ session()->has('account') ? session('account')->address : '' }}" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Dicstrict: </label>
                                <input name="district"
                                    value="{{ session()->has('account') ? session('account')->district : '' }}"
                                    class="form-control" type="text" placeholder="Enter your dictrict*" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Province: </label>
                                <input name="province"
                                    value="{{ session()->has('account') ? session('account')->province : '' }}"
                                    class="form-control" type="text" placeholder="Enter your province*" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Notes: </label>
                                <textarea class="form-control" rows="8" name="notes" id="message" placeholder="Please enter your notes"
                                    required data-validation-required-message="Please enter your notes"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="newaccount">
                                    <label class="custom-control-label" for="newaccount">Create an account</label>
                                </div>
                            </div>
                            {{-- <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto" data-toggle="collapse"
                                    data-target="#shipping-address">Ship to different address</label>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                    <div class="collapse mb-5" id="shipping-address">
                        <h5 class="section-title position-relative text-uppercase mb-3"><span
                                class="bg-secondary pr-3">Shipping
                                Address</span></h5>
                        <div class="bg-light p-30 bg-radius">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" placeholder="John">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" placeholder="Doe">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" placeholder="example@email.com">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="text" placeholder="+123 456 789">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Address Line 1</label>
                                    <input class="form-control" type="text" placeholder="123 Street">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Address Line 2</label>
                                    <input class="form-control" type="text" placeholder="123 Street">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Country</label>
                                    <select class="custom-select">
                                        <option selected>United States</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>City</label>
                                    <input class="form-control" type="text" placeholder="New York">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>State</label>
                                    <input class="form-control" type="text" placeholder="New York">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>ZIP Code</label>
                                    <input class="form-control" type="text" placeholder="123">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="position-relative text-uppercase mb-3"><span class="pr-3">Order
                            Total</span></h5>
                    <div class="bg-light p-30 mb-5 bg-radius">
                        <div class="border-bottom">
                            <h6 class="mb-3">Products</h6>
                            @foreach ($cartItems as $item)
                                <div class="d-flex justify-content-between">
                                    <p>{{ $item->name }}</p>
                                    <p>{{ $item->price }}</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="border-bottom pt-3 pb-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h6>Subtotal</h6>
                                <h6>${{ Cart::getTotal() }}VND</h6>
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
                        </div>
                    </div>
                    <div class="mb-5">
                        <h5 class="position-relative text-uppercase mb-3"><span class="pr-3">Payment</span>
                        </h5>
                        <div class="bg-light p-30 bg-radius">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment_method"
                                        value="Paypal" id="paypal" required>
                                    <label class="custom-control-label" for="paypal">
                                        <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-100px.png"
                                            border="0" alt="Check out with PayPal">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment_method"
                                        value="Ship CODE" id="directcheck" required>
                                    <label class="custom-control-label" for="directcheck"> <img style="width:30%;"
                                            src="{{ asset('images/Ship_COD.jpg') }}"
                                            alt="Check out with ShipCOD"></label>
                                </div>
                            </div>
                            @php
                                $total = Cart::getTotal() + 10;
                            @endphp
                            <input type="hidden" name="total" value="{{ $total }}">
                            <button type="submit" class="btn btn-block btn-custom font-weight-bold py-3">Place
                                Order</button>


                        </div>

                    </div>

                </div>
            </div>
        </form>
    </div>
    <!-- Checkout End -->
@stop
