@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Public/account/style.css') }}">
@stop

@section('content')
    <section class="account">
        @include('Public.partial.sidebar')
        <div class="body-content">
            <h1>Thông tin tài khoản</h1>
            <div class="header">
                <div class="bg">
                    <div class="text">
                        <h2>CHÀO MỪNG QUAY TRỞ LẠI, {!! Str::upper(session('account')->name) !!}</h2>
                        <p><i>Kiểm tra và chỉnh sửa thông tin cá nhân của bạn tại đây</i></p>
                    </div>
                </div>
                <div class="icon">
                    <img src="{{ asset('images/icon-account-info.png') }}">
                </div>
            </div>
            <div class="account-layout ">
                <div class="row equaHeight" data-obj=".col .box-bg-white">
                    <div class="col col-lg">
                        <h3>Cập nhật thông tin cá nhân</h3>
                        <div class="box-bg-white" style="height:100%; margin-bottom:10px;">
                            <div class="account-form">
                                <form id="update-avt-form" action="{{ route('account.update') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="form-controls">
                                        <label>Họ tên:</label>
                                        <div class="controls text-dark">
                                            <input type="text"
                                                pattern="[A-Za-z\sàáảãạăắằẵặẳâấầẫậẩđèéẻẽẹêếềễệểìíỉĩịòóỏõọôốồỗộổơớờỡợởùúủũụưứừữựửỳýỷỹỵđÀÁẢÃẠĂẮẰẴẶẲÂẤẦẪẬẨĐÈÉẺẼẸÊẾỀỄỆỂÌÍỈĨỊÒÓỎÕỌÔỐỒỖỘỔƠỚỜỠỢỞÙÚỦŨỤƯỨỪỮỰỬỲÝỶỸỴĐ]+"
                                                title="Vui lòng không nhập chữ số hay kí tự đặc biệt" type="text"
                                                placeholder="Nhập họ tên *" value="{{ session('account')->name }}"
                                                name="name" id="Title" data-required="1" required>
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <label>Số điện thoại:</label>
                                        <div class="controls">
                                            <input type="tel" value="{{ session('account')->phone_number }}"
                                                name="phone_number" id="PhoneNumber"
                                                placeholder="Vui lòng nhập số điện thoại *" pattern="[0-9]{10}"
                                                placeholder="Vui lòng nhập số điện thoại"
                                                title="Vui lòng nhập đúng định dạng số điện thoại" data-required="1"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-controls">
                                        <label>Email:</label>
                                        <div class="controls text-dark">
                                            <input type="email" value="{{ session('account')->email }}" name="email"
                                                id="Email" placeholder="Email *" data-required="1" required>
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <label>Địa chỉ:</label>
                                        <div class="controls text-dark">
                                            <input type="text" value="{{ session('account')->address }}" name="address"
                                                id="Address" placeholder="Vui lòng nhập địa chỉ *" data-required="1"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-controls">
                                        <label>Tỉnh/Thành phố:</label>
                                        <div class="controls">
                                            <select name="province" id="SystemCityID" placeholder="Province/City" required>
                                                <option value="">
                                                    Chọn tỉnh, thành
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-controls">
                                        <label>Quận/huyện:</label>
                                        <div class="controls">
                                            <select id="SystemDistrictID" name="district" placeholder="Quận, huyện *"
                                                data-required="1" required>
                                                <option value=" ">
                                                    Chọn quận, huyện
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <div class="controls submit-controls ml-4 pl-4">
                                            <p style="text-align:center;">Để trống nếu không muốn thay đổi mật khẩu.</p>
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <label>Mật khẩu mới: </label>
                                        <div class="controls">
                                            <input type="password" name="password" id="PasswordHash"
                                                autocomplete="new-password" place-horder="Mật khẩu mới">
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <div class="controls submit-controls">
                                            <button type="submit">Xác nhận</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col col-sm">
                        <h3>Tư cách hiển thị</h3>
                        <div class="box-bg-white" style="height:100%">
                            <div class="user-sticker">
                                <div class="info">
                                    <div class="avt">
                                        <img src="{{ asset(session('account')->photo) }}">
                                    </div>
                                    <div class="summer">
                                        <p><strong>{{ session('username') }}</strong></p>
                                    </div>
                                </div>

                                <div class="user-acc-links">
                                    <h3>Các tài khoản liên kết</h3>
                                    <p>Bạn có thể đăng nhập qua Google, Facebook nhanh vào website. Để đăng nhập được bạn
                                        cần liên kết các tài khoản mạng xã hội với tài khoản của website.</p>
                                    <div class="acc">
                                        <form method="post" action="/Account/LinkLogin">
                                            <input name="__RequestVerificationToken" type="hidden"
                                                value="XUjMIldDIWNWNOqH5YLGNSBwr4HCTT2qsPDL3EU_s8V8mO4l1eeNuf-AfGF2TQG7KTzkEK4MM0Iw-b3T9TokgxqpPaJNDSZTqb6FNRGmfQZmdrfLgMiMIZao_kK7xhpaH0twfg2">
                                            <input type="hidden" name="ReturnUrl" value="/account/info">
                                            <p>
                                                <img src="{{ asset('images/login-facebook.png') }}">
                                                <strong>{{ !empty(session('account')->facebook_id) ? 'Đã liên kết' : 'Chưa liên kêt' }}</strong>
                                            </p>
                                            @if (!session('account')->facebook_id)
                                                <button class="btn-extlogin btn-facebook" title="Facebook account link"
                                                    type="submit" id="Facebook" name="provider" value="Facebook">
                                                    <i class="fal fa fa-user-circle"></i> Liên kết tài khoản Facebook
                                                </button>
                                            @endif
                                        </form>
                                    </div>
                                    <div class="acc">

                                        <form method="post" action="/Account/LinkLogin">
                                            <input name="__RequestVerificationToken" type="hidden"
                                                value="vjSV4SCfZWU5SRpnsMV0RzHjrJg_8q0yceHX3cVaL1KDCzF8-cBxShZVS4pyW4plu5v3pEWowxE-qY1zGx-VfvxhJKZ4H94HExlnbwg2DQuHv4nCNHZWUX4UEw6UlgmyVOZX7g2">
                                            <input type="hidden" name="ReturnUrl" value="/account/info">
                                            <p>
                                                <img src="{{ asset('images/login-google.png') }}">
                                                <span>{{ !empty(session('account')->google_id) ? 'Đã liên kết' : 'Chưa liên kết' }}</span>
                                            </p>
                                            @if (!session('account')->google_id)
                                                <button class="btn-extlogin btn-google" type="submit"
                                                    title="Google account link" id="Google" name="provider"
                                                    value="Google">
                                                    <i class="fal fa fa-user-circle"></i> Liên kết tài khoản google
                                                </button>
                                            @endif
                                        </form>
                                    </div>
                                </div>
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
@stop
