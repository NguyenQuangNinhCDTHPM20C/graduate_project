@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')
    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark text-decoration-none" href="{{ route('home') }}">Trang chủ</a>
                    <span class="breadcrumb-item active">Thanh toán</span>
                </nav>
            </div>
        </div>
        {{-- @php
            dd(session()->get('account'));
        @endphp --}}
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
                                <label>Họ tên: </label>
                                <input name="name" class="form-control"
                                    pattern="[A-Za-z\sàáảãạăắằẵặẳâấầẫậẩđèéẻẽẹêếềễệểìíỉĩịòóỏõọôốồỗộổơớờỡợởùúủũụưứừữựửỳýỷỹỵđÀÁẢÃẠĂẮẰẴẶẲÂẤẦẪẬẨĐÈÉẺẼẸÊẾỀỄỆỂÌÍỈĨỊÒÓỎÕỌÔỐỒỖỘỔƠỚỜỠỢỞÙÚỦŨỤƯỨỪỮỰỬỲÝỶỸỴĐ]+"
                                    title="Vui lòng không nhập chữ số hay kí tự đặc biệt" type="text"
                                    placeholder="Nhập họ tên *"
                                    value="{{ session()->has('account') ? session('account')->name : '' }}" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail: </label>
                                <input name="email" class="form-control" type="email" placeholder="Enter your email *"
                                    value="{{ session()->has('account') ? session('account')->email : '' }}" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Số điện thoại: </label>
                                <input name="phone_number" class="form-control" type="tel" pattern="[0-9]{10}"
                                    placeholder="Vui lòng nhập số điện thoại"
                                    title="Vui lòng nhập đúng định dạng số điện thoại"
                                    value="{{ session()->has('account') ? session('account')->phone_number : '' }}"
                                    required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Địa chỉ: </label>
                                <input name="address" class="form-control" type="text"
                                    placeholder="Nhập địa chỉ nhận hàng *"
                                    value="{{ session()->has('account') ? session('account')->address : '' }}" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Tỉnh/thành phố: </label>
                                <select class="form-control" name="province" id="SystemCityID" placeholder="Province/City"
                                    data-required="1" required title="Vui lòng không để trống">
                                    <option value="">
                                        Chọn tỉnh, thành
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Quận/huyện: </label>
                                <select class="form-control" id="SystemDistrictID" name="district"
                                    placeholder="Quận, huyện *" data-required="1" required title="Vui lòng không để trống">
                                    <option value=" ">
                                        Chọn quận, huyện
                                    </option>
                                </select>
                            </div>

                            <div class="col-md-12 form-group">
                                <label>Ghi chú: </label>
                                <textarea class="form-control" rows="8" name="notes" id="message" placeholder="Nhập ghi chú"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="position-relative text-uppercase mb-3"><span class="pr-3">Tổng đơn hàng</span></h5>
                    <div class="bg-light p-30 mb-5 bg-radius">
                        <div class="border-bottom">
                            <h6 class="mb-3">Sản phẩm</h6>
                            @foreach ($cartItems as $item)
                                <div class="d-flex justify-content-between">
                                    <p style="width:100px" class="text-truncate">{{ $item->name }}</p>
                                    <p>SL: {{ $item->quantity }}</p>
                                    <p>{{ number_format($item->price, 0, ',', '.') }}đ</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="border-bottom pt-3 pb-2">
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
                                <h5>{{ number_format(Cart::getTotal() - $price_discount, 0, ',', '.') }}đđ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h5 class="position-relative text-uppercase mb-3"><span class="pr-3">Phương thức thanh
                                toán</span>
                        </h5>
                        <div class="bg-light p-30 bg-radius">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment_method" value="paypal"
                                        id="paypal" required>
                                    <label class="custom-control-label" for="paypal">
                                        <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-100px.png"
                                            border="0" alt="Check out with PayPal">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment_method"
                                        value="ship_code" id="directcheck" required>
                                    <label class="custom-control-label" for="directcheck"> <img style="width:30%;"
                                            src="{{ asset('images/Ship_COD.jpg') }}"
                                            alt="Check out with ShipCOD"></label>
                                </div>
                            </div>
                            @php
                                $total = Cart::getTotal() - $price_discount;
                            @endphp
                            <input type="hidden" name="total" value="{{ $total }}">
                            <button type="submit" class="btn btn-block btn-custom font-weight-bold py-3">Xác nhận đặt
                                hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Checkout End -->
@stop
@section('scripts')
    <script type="text/javascript">
        fetch('/data.json') // Thay thế bằng đường dẫn đến file JSON của bạn
            .then(response => response.json())
            .then(data => {
                const citySelect = document.getElementById('SystemCityID');
                const districtSelect = document.getElementById('SystemDistrictID');

                const selectedProvinceName = '{!! session('account')->province !!}';
                const selectedDistrictName = '{!! session('account')->district !!}';

                const provinceSet = new Set(); // Sử dụng Set để lưu trữ tên tỉnh duy nhất
                const districtMap = new Map(); // Sử dụng Map để lưu trữ danh sách huyện theo tỉnh

                data.forEach(item => {
                    const {
                        province_name,
                        district_name
                    } = item;

                    provinceSet.add(province_name);

                    if (districtMap.has(province_name)) {
                        const districts = districtMap.get(province_name);
                        districts.add(district_name);
                    } else {
                        const districts = new Set();
                        districts.add(district_name);
                        districtMap.set(province_name, districts);
                    }
                });

                provinceSet.forEach(province => {
                    const option = document.createElement('option');
                    option.value = province;
                    option.textContent = province;
                    if (province === selectedProvinceName) {
                        option.selected = true; // Đánh dấu tùy chọn đã chọn cho tỉnh/thành phố
                    }
                    citySelect.appendChild(option);
                });

                citySelect.addEventListener('change', () => {
                    const selectedProvinceName = citySelect.value;
                    const districts = districtMap.get(selectedProvinceName);

                    districtSelect.innerHTML = '<option value="">Chọn quận, huyện</option>';

                    districts.forEach(district => {
                        const option = document.createElement('option');
                        option.value = district;
                        option.textContent = district;
                        if (district === selectedDistrictName) {
                            option.selected = true; // Đánh dấu tùy chọn đã chọn cho quận/huyện
                        }
                        districtSelect.appendChild(option);
                    });
                });

                const event = new Event('change');
                citySelect.dispatchEvent(event);
            });
    </script>
@endsection
