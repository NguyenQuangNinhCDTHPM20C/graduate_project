@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Public/account/style.css') }}">
@stop

@section('content')
    <section class="account">
        @include('Public.partial.sidebar')
        <div class="body-content">
            <h1>Account information</h1>

            <div class="header">
                <div class="bg">
                    <div class="text">
                        <h2>WELCOME TO BACK, {!! Str::upper(session('account')->name) !!}</h2>
                        <p><i>Check and correct your personal information here</i></p>
                    </div>
                </div>
                <div class="icon">
                    <img src="{{ asset('images/icon-account-info.png') }}">
                </div>
            </div>
            <div class="account-layout ">
                <div class="row equaHeight" data-obj=".col .box-bg-white">
                    <div class="col col-lg">
                        <h3>Update personal information</h3>
                        <div class="box-bg-white" style="height:100%; margin-bottom:10px;">
                            <div class="account-form">
                                <form id="update-avt-form" action="{{ route('account.update') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="form-controls">
                                        <label>Full name:</label>
                                        <div class="controls">
                                            <input type="text" value="{{ session('account')->name }}" name="name"
                                                id="Title" placeholder="Full name *" data-required="1">
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <label>Phone number:</label>
                                        <div class="controls">
                                            <input type="tel" value="{{ session('account')->phone_number }}"
                                                name="phone_number" id="PhoneNumber" placeholder="Phone number *"
                                                data-required="1">
                                        </div>
                                    </div>

                                    <div class="form-controls">
                                        <label>Email:</label>
                                        <div class="controls">
                                            <input type="text" value="{{ session('account')->email }}" name="email"
                                                id="Email" placeholder="Email *" data-required="1">
                                        </div>
                                    </div>

                                    <div class="form-controls">
                                        <label>Address:</label>
                                        <div class="controls">
                                            <input type="text" value="{{ session('account')->address }}" name="address"
                                                id="Address" placeholder="Address *" data-required="1">
                                        </div>
                                    </div>

                                    <div class="form-controls">
                                        <label>Province/City:</label>
                                        <div class="controls">
                                            <select name="province" id="SystemCityID" placeholder="Province/City">
                                                <option value="">
                                                    Choose province/city
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-controls">
                                        <label>District:</label>
                                        <div class="controls">
                                            <select id="SystemDistrictID" name="district" placeholder="District *"
                                                data-required="1">
                                                <option value=" ">
                                                    Choose District
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <div class="controls submit-controls ml-4 pl-4">
                                            <p style="text-align:center;">Leave it blank if you don't want to change the
                                                password.</p>
                                        </div>
                                    </div>


                                    <div class="form-controls">
                                        <label>New password: </label>
                                        <div class="controls">
                                            <input type="password" name="password" id="PasswordHash"
                                                placeholder="New password">
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <div class="controls submit-controls">
                                            <button type="submit">CONFIRM</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col col-sm">
                        <h3>Display status</h3>
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
                                    <h3>Affiliate accounts</h3>
                                    <p>You can log in via Google, Facebook quickly to the website. To login you
                                        need to link social network accounts with website accounts.</p>
                                    <div class="acc">
                                        <form method="post" action="/Account/LinkLogin">
                                            <input name="__RequestVerificationToken" type="hidden"
                                                value="XUjMIldDIWNWNOqH5YLGNSBwr4HCTT2qsPDL3EU_s8V8mO4l1eeNuf-AfGF2TQG7KTzkEK4MM0Iw-b3T9TokgxqpPaJNDSZTqb6FNRGmfQZmdrfLgMiMIZao_kK7xhpaH0twfg2">
                                            <input type="hidden" name="ReturnUrl" value="/account/info">
                                            <p>
                                                <img src="{{ asset('images/login-facebook.png') }}">
                                                <strong>{{ !empty(session('account')->facebook_id) ? 'Linked' : 'Unlinked' }}</strong>
                                            </p>
                                            @if (!session('account')->facebook_id)
                                                <button class="btn-extlogin btn-facebook" title="Facebook account link"
                                                    type="submit" id="Facebook" name="provider" value="Facebook">
                                                    <i class="fal fa fa-user-circle"></i> Facebook account link
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
                                                <span>{{ !empty(session('account')->google_id) ? 'Linked' : 'Unlinked' }}</span>
                                            </p>
                                            @if (!session('account')->google_id)
                                                <button class="btn-extlogin btn-google" type="submit"
                                                    title="Google account link" id="Google" name="provider"
                                                    value="Google">
                                                    <i class="fal fa fa-user-circle"></i> Google account link
                                                </button>
                                            @endif
                                        </form>
                                    </div>
                                    @php
                                        $qr_token = session('account')->qr_token;
                                    @endphp
                                    <div class="avt">
                                        {!! QrCode::size(100)->generate(route('check-qr', ['qr_token' => $qr_token])) !!}
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        fetch('/provinces.json')
            .then(response => response.json())
            .then(provinceData => {
                fetch('/dicstricts.json')
                    .then(response => response.json())
                    .then(districtData => {
                        const citySelect = document.getElementById('SystemCityID');
                        const selectedProvinceCode = ''; // Giá trị tỉnh đã được tải lên từ cơ sở dữ liệu
                        const selectedDistrictCode = ''; // Giá trị quận đã được tải lên từ cơ sở dữ liệu

                        provinceData.forEach(province => {
                            const option = document.createElement('option');
                            option.value = province.code;
                            option.textContent = province.name;
                            if (province.code === selectedProvinceCode) {
                                option.selected = true; // Đánh dấu tùy chọn đã chọn cho tỉnh
                            }
                            citySelect.appendChild(option);
                        });

                        const districtSelect = document.getElementById('SystemDistrictID');
                        citySelect.addEventListener('change', () => {
                            const selectedProvinceCode = citySelect.value;
                            districtSelect.innerHTML = '<option value="">District</option>';
                            const filteredDistricts = districtData.filter(district => district
                                .parent_code === selectedProvinceCode);
                            filteredDistricts.forEach(district => {
                                const option = document.createElement('option');
                                option.value = district.code;
                                option.textContent = district.name;
                                if (district.code === selectedDistrictCode) {
                                    option.selected = true; // Đánh dấu tùy chọn đã chọn cho quận
                                }
                                districtSelect.appendChild(option);
                            });
                        });

                        // Trigger sự kiện change để tải dữ liệu quận ban đầu
                        const event = new Event('change');
                        citySelect.dispatchEvent(event);
                    });
            });
    </script>
@stop
