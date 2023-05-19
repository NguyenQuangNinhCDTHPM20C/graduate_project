@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/Public/account/style.css') }}">
<link rel="preload" as="style" href="https://hoanghamobile.com/js-css/web_v1.1.6.5.css">
<link href="https://hoanghamobile.com/js-css/web_v1.1.6.5.css" rel="stylesheet" type="text/css">
<style>
.product-center .current-product-price label.text-green {
    display: none
}
</style>
@stop

@section('content')
<section class="account">
    @include('Public.partial.sidebar')
    <div class="body-content">
        <h1>Quản lý bình luận</h1>

        <div class="header">
            <div class="bg">
                <div class="text">
                    <h2>CHÀO MỪNG QUAY TRỞ LẠI, NGUYỄN QUANG NINH</h2>
                    <p><i>Xem và kiểm tra những bình luận của bạn tại đây</i></p>
                </div>
            </div>
            <div class="icon">
                <img src="{{ asset('images/icon-account-comment.png') }}">
            </div>
        </div>
        <div class="account-layout ">
            <div class="row equaHeight" data-obj=".col .box-bg-white">
                <div class="col col-lg">
                    <h3>Cập nhật thông tin cá nhân</h3>
                    <div class="box-bg-white" style="height: 805.4px;">
                        <div class="account-form">
                            <form onsubmit="return validFormAccount(this);">
                                <div class="form-controls">
                                    <label>Họ tên:</label>
                                    <div class="controls">
                                        <input type="text" value="Nguyễn Quang Ninh" name="Title" id="Title"
                                            placeholder="Họ tên *" data-required="1">
                                    </div>
                                </div>

                                <div class="form-controls">
                                    <label>Giới tính:</label>
                                    <div class="controls">
                                        <label class="radio-ctn">
                                            <input checked="" type="radio" name="Sex" value="true">
                                            <span class="checkmark"></span>
                                            <span><strong>Nam</strong></span>
                                        </label>

                                        <label class="radio-ctn">
                                            <input type="radio" name="Sex" value="false">
                                            <span class="checkmark"></span>
                                            <span><strong>Nữ</strong></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-controls">
                                    <label>Điện thoại:</label>
                                    <div class="controls">
                                        <input type="tel" value="0869694275" name="PhoneNumber" id="PhoneNumber"
                                            placeholder="Điện thoại *" data-required="1">
                                    </div>
                                </div>

                                <div class="form-controls">
                                    <label>Email:</label>
                                    <div class="controls">
                                        <input type="text" value="ninhnguyen1239@gmail.com" name="Email" id="Email"
                                            placeholder="Email *" data-required="1">
                                    </div>
                                </div>

                                <div class="form-controls">
                                    <label>Địa chỉ:</label>
                                    <div class="controls">
                                        <input type="text" value="thôn 1 xã Nghĩa An" name="Address" id="Address"
                                            placeholder="Địa chỉ *" data-required="1">
                                    </div>
                                </div>

                                <div class="form-controls">
                                    <label>Tỉnh/Thành phố:</label>
                                    <div class="controls">
                                        <select name="SystemCityID" id="SystemCityID" placeholder="Tỉnh/Thành phố">
                                            <option>Chọn tỉnh/thành phố</option>
                                            <option value="1">Hà Nội</option>
                                            <option value="50">TP HCM</option>
                                            <option value="57">An Giang</option>
                                            <option value="49">Bà Rịa - Vũng Tàu</option>
                                            <option value="15">Bắc Giang</option>
                                            <option value="4">Bắc Kạn</option>
                                            <option value="62">Bạc Liêu</option>
                                            <option value="18">Bắc Ninh</option>
                                            <option value="53">Bến Tre</option>
                                            <option value="35">Bình Định</option>
                                            <option value="47">Bình Dương</option>
                                            <option value="45">Bình Phước</option>
                                            <option value="39">Bình Thuận</option>
                                            <option value="63">Cà Mau</option>
                                            <option value="59">Cần Thơ</option>
                                            <option value="3">Cao Bằng</option>
                                            <option value="32">Đà Nẵng</option>
                                            <option value="42">Đắk Lắk</option>
                                            <option value="43">Đắk Nông</option>
                                            <option value="7">Điện Biên</option>
                                            <option value="48">Đồng Nai</option>
                                            <option value="56">Đồng Tháp</option>
                                            <option value="41" selected="">Gia Lai</option>
                                            <option value="2">Hà Giang</option>
                                            <option value="23">Hà Nam</option>
                                            <option value="28">Hà Tĩnh</option>
                                            <option value="19">Hải Dương</option>
                                            <option value="20">Hải Phòng</option>
                                            <option value="60">Hậu Giang</option>
                                            <option value="11">Hoà Bình</option>
                                            <option value="21">Hưng Yên</option>
                                            <option value="37">Khánh Hòa</option>
                                            <option value="58">Kiên Giang</option>
                                            <option value="40">Kon Tum</option>
                                            <option value="8">Lai Châu</option>
                                            <option value="44">Lâm Đồng</option>
                                            <option value="13">Lạng Sơn</option>
                                            <option value="6">Lào Cai</option>
                                            <option value="51">Long An</option>
                                            <option value="24">Nam Định</option>
                                            <option value="27">Nghệ An</option>
                                            <option value="25">Ninh Bình</option>
                                            <option value="38">Ninh Thuận</option>
                                            <option value="16">Phú Thọ</option>
                                            <option value="36">Phú Yên</option>
                                            <option value="29">Quảng Bình</option>
                                            <option value="33">Quảng Nam</option>
                                            <option value="34">Quảng Ngãi</option>
                                            <option value="14">Quảng Ninh</option>
                                            <option value="30">Quảng Trị</option>
                                            <option value="61">Sóc Trăng</option>
                                            <option value="9">Sơn La</option>
                                            <option value="46">Tây Ninh</option>
                                            <option value="22">Thái Bình</option>
                                            <option value="12">Thái Nguyên</option>
                                            <option value="26">Thanh Hóa</option>
                                            <option value="31">Thừa Thiên Huế</option>
                                            <option value="52">Tiền Giang</option>
                                            <option value="54">Trà Vinh</option>
                                            <option value="5">Tuyên Quang</option>
                                            <option value="55">Vĩnh Long</option>
                                            <option value="17">Vĩnh Phúc</option>
                                            <option value="10">Yên Bái</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-controls">
                                    <label>Quận/Huyện:</label>
                                    <div class="controls">
                                        <select id="SystemDistrictID" name="SystemDistrictID" placeholder="Quận/Huyện *"
                                            data-required="1">

                                            <option value="">Quận/Huyện</option>
                                            <option value="552">Quận 1</option>
                                            <option value="553">Quận 12</option>
                                            <option value="554">Quận Thủ Đức</option>
                                            <option value="555">Quận 9</option>
                                            <option value="556">Quận Gò Vấp</option>
                                            <option value="557">Quận Bình Thạnh</option>
                                            <option value="558">Quận Tân Bình</option>
                                            <option value="559">Quận Tân Phú</option>
                                            <option value="560">Quận Phú Nhuận</option>
                                            <option value="561">Quận 2</option>
                                            <option value="562">Quận 3</option>
                                            <option value="563">Quận 10</option>
                                            <option value="564">Quận 11</option>
                                            <option value="565">Quận 4</option>
                                            <option value="566">Quận 5</option>
                                            <option value="567">Quận 6</option>
                                            <option value="568">Quận 8</option>
                                            <option value="569">Quận Bình Tân</option>
                                            <option value="570">Quận 7</option>
                                            <option value="571">Huyện Củ Chi</option>
                                            <option value="572">Huyện Hóc Môn</option>
                                            <option value="573">Huyện Bình Chánh</option>
                                            <option value="574">Huyện Nhà Bè</option>
                                            <option value="575">Huyện Cần Giờ</option>
                                            <script type="text/javascript">
                                            var currentIsDelivery = 1;
                                            var isCOD = $("input[name='OrderPayTypeID']:checked").val();
                                            isCOD = (isCOD) ? isCOD : 1;

                                            if (isInCheckDelivery) {
                                                if (!currentIsDelivery && isCOD == 1) {
                                                    $("#IsDelivery").show();
                                                    $(".shInfo").hide();
                                                } else {
                                                    $("#IsDelivery").hide();
                                                    $(".shInfo").show();
                                                }
                                            }
                                            </script>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-controls">
                                    <label>Ngày tháng năm sinh:</label>
                                    <div class="controls">
                                        <input type="text" value="10/01/2002" name="UserBirthDate" id="UserBirthDate"
                                            placeholder="Ngày tháng năm sinh">
                                    </div>
                                </div>


                                <div class="form-controls">
                                    <label>Tên công ty:</label>
                                    <div class="controls">
                                        <input type="text" name="CompanyTitle" id="CompanyTitle"
                                            placeholder="Tên công ty">
                                    </div>
                                </div>

                                <div class="form-controls">
                                    <label>Địa chỉ công ty:</label>
                                    <div class="controls">
                                        <input type="text" name="CompanyAddress" id="CompanyAddress"
                                            placeholder="Địa chỉ công ty">
                                    </div>
                                </div>

                                <div class="form-controls">
                                    <label>Mã số thuế công ty:</label>
                                    <div class="controls">
                                        <input type="text" name="CompanyID" id="CompanyID"
                                            placeholder="Mã số thuế công ty">
                                    </div>
                                </div>

                                <div class="form-controls">
                                    <div class="controls submit-controls">
                                        <p style="text-align:center;">Để trống nếu không muốn thay đổi mật khẩu.</p>
                                    </div>
                                </div>


                                <div class="form-controls">
                                    <label>Mật khẩu mới: </label>
                                    <div class="controls">
                                        <input type="password" value="" name="PasswordHash" id="PasswordHash"
                                            placeholder="Mật khẩu mới">
                                    </div>
                                </div>

                                <div class="form-controls">
                                    <label>Nhập lại mật khẩu mới: </label>
                                    <div class="controls">
                                        <input type="text" name="SecurityStamp" id="SecurityStamp"
                                            placeholder="Nhập lại mật khẩu mới">
                                    </div>
                                </div>



                                <div class="form-controls">
                                    <div class="controls submit-controls">
                                        <button type="submit">XÁC NHẬN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col col-sm">
                    <h3>Tư cách hiển thị</h3>
                    <div class="box-bg-white" style="height: 805.4px;">
                        <div class="user-sticker">
                            <div class="info">
                                <div class="avt">
                                    <img src="/avatar/Uploads/Avatar/63128-ninhnguyen1239-638164809348787755.jpg">
                                </div>

                                <div class="summer">
                                    <p><strong>ninhnguyen1239</strong></p>
                                    <p><strong class="text-gray">Nguyễn Quang Ninh</strong></p>
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
                                            <img src="/Content/web/img/login-facebook.png">
                                            <strong>Chưa liên kết</strong>
                                        </p>
                                        <button class="btn-extlogin btn-facebook" title="Liên kết tài khoản Facebook"
                                            type="submit" id="Facebook" name="provider" value="Facebook">
                                            <i class="icon-account"></i> Liên kết tài khoản Facebook
                                        </button>
                                    </form>
                                </div>
                                <div class="acc">

                                    <form method="post" action="/Account/LinkLogin">
                                        <input name="__RequestVerificationToken" type="hidden"
                                            value="vjSV4SCfZWU5SRpnsMV0RzHjrJg_8q0yceHX3cVaL1KDCzF8-cBxShZVS4pyW4plu5v3pEWowxE-qY1zGx-VfvxhJKZ4H94HExlnbwg2DQuHv4nCNHZWUX4UEw6UlgmyVOZX7g2">
                                        <input type="hidden" name="ReturnUrl" value="/account/info">
                                        <p>
                                            <img src="/Content/web/img/login-google.png">
                                            <span>Chưa liên kết</span>
                                        </p>
                                        <button class="btn-extlogin btn-google" type="submit"
                                            title="Đăng nhập qua Google+" id="Google" name="provider" value="Google">
                                            <i class="icon-account"></i> Liên kết tài khoản Google
                                        </button>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@stop