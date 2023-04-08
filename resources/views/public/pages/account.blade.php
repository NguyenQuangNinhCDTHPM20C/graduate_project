@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
<link href="css/Public/account/style_ex.css" rel="stylesheet">
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
    <div class="sidebar">
        <div class="ctn">
            <div class="header">
                <div class="logo">
                    <a href="/"><img src="images/logoshop.png" alt="Hoàng Hà Mobile"></a>
                </div>

                <div class="info">
                    <div class="avt" id="myAvatar">
                        <img
                            src="https://hoanghamobile.com/avatar/Uploads/Avatar/63128-ninhnguyen1239-638164809348787755.jpg">
                    </div>

                    <div class="summer">
                        <p><strong>Nguyễn Quang Ninh</strong></p>
                        <p class="change-avatar"><a href="javascript:;"
                                onclick="$('#avtImage').trigger('click'); return false;"><i
                                    class="icon-change-avatar"></i> Thay đổi ảnh đại diện</a></p>
                        <input type="file" name="upfile" id="avtImage" accept="image/*" style="display: none;">
                    </div>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="/account/index" class="actived"><i class="icon-controls"></i><span>Bảng điều
                                khiển</span></a></li>
                    <li><a href="/account/info"><i class="icon-account"></i><span>Thông tin tài khoản</span></a></li>
                    <li><a href="/account/order"><i class="icon-order-mgr"></i><span>Đơn hàng của bạn</span></a></li>
                    <li><a href="/account/wishlist"><i class="icon-love"></i><span>Sản phẩm yêu thích</span></a></li>
                    <li><a href="/account/comment"><i class="icon-comment"></i><span>Quản lý bình luận</span></a></li>
                    <li><a href="/account/review"><i class="icon-edit-squad"></i><span>Quản lý đánh giá</span></a></li>
                    <li><a href="javascript:document.getElementById('logoutForm').submit()"><i
                                class="icon-logout"></i><span>Đăng xuất</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="body-content">
        <h1>Bảng điều khiển</h1>
        <div class="header">
            <div class="bg">
                <div class="text">
                    <h2>CHÀO MỪNG QUAY TRỞ LẠI, NGUYỄN QUANG NINH</h2>
                    <p><i>Tổng quát các hoạt động của bạn tại đây</i></p>
                </div>
            </div>
            <div class="icon">
                <img src="https://hoanghamobile.com/Content/web/content-icon/icon-account-home.png">
            </div>
        </div>
        <div class="account-layout">
            <div class="row equaHeight" data-obj=".col .box-bg-white">
                <div class="col">
                    <h3>Thông tin cá nhân</h3>
                    <div class="box-bg-white" style="height: 376px;">
                        <div class="account-info">
                            <div class="tools">
                                <a href="/account/info" title="Thay đổi thông tin cá nhân"><i
                                        class="icon-edit-squad"></i></a>
                            </div>

                            <p><strong>Họ tên:</strong> <i>Nguyễn Quang Ninh</i></p>
                            <p><strong>Tài khoản:</strong> <i>ninhnguyen1239</i></p>
                            <p><strong>Ngày tháng năm sinh:</strong> <i>10/01/2002</i></p>
                            <p><strong>Ngày tham gia:</strong> <i>07/04/2023</i></p>
                            <p><strong>Email:</strong> <i>ninhnguyen1239@gmail.com</i></p>
                            <p><strong>Địa chỉ:</strong> <i>thôn 1 xã Nghĩa An</i></p>
                            <p><strong>Số điện thoại:</strong> <i>0869694275</i></p>
                            <p><strong>Tên công ty:</strong> <i></i></p>
                            <p><strong>Địa chỉ công ty:</strong> <i></i></p>
                            <p><strong>Mã số thuế:</strong> <i></i></p>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <h3>Đơn hàng đã đặt</h3>
                    <div class="box-bg-white" style="height: 376px;">
                        <div style="padding:25px;">
                            <table class="table table-border table-lgpading">
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày đặt</th>
                                        <th>Tổng tiền</th>
                                        <th>Giảm giá</th>
                                        <th>Sản phẩm đặt hàng</th>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col" style="max-width:100%;">
                    <h3>Sản phẩm yêu thích</h3>
                    <div class="box-bg-white" style="padding:25px;">

                        <div class="tools">
                            <a href="/account/wishlist" title="Chỉnh sửa danh sách sản phẩm yêu thích"><i
                                    class="icon-edit-squad"></i></a>
                        </div>

                        <div style="max-width:100%; padding:0 30px;">
                            <div class="owl-carousel owl-reponsive lr-slider owl-loaded owl-drag">

                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 256px;">
                                        <div class="lr-item active" style="width: 245.15px; margin-right: 10px;">
                                            <p>Chưa có sản phẩm nào trong danh sách yêu thích của bạn.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled"><button type="button" role="presentation"
                                        class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button
                                        type="button" role="presentation" class="owl-next disabled"><span
                                            aria-label="Next">›</span></button></div>
                                <div class="owl-dots disabled"><button role="button"
                                        class="owl-dot active"><span></span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h3>Quản lý đánh giá</h3>

                    <div class="box-bg-white" style="padding:25px;">

                        <div class="tools">
                            <a href="/account/review" title="Xem tất cả các đánh giá bạn đã gửi"><i
                                    class="icon-eye"></i></a>
                        </div>

                        <div class="review-content comment-content" style="max-width:100%; padding:0 30px;">
                            <p>Bạn chưa gửi đánh giá nào cả.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h3>Quản lý bình luận</h3>

                    <div class="box-bg-white" style="padding:25px;">

                        <div class="tools">
                            <a href="/account/comment" title="Xem tất cả các bình luận bạn đã gửi"><i
                                    class="icon-eye"></i></a>
                        </div>

                        <div class="review-content comment-content" style="max-width:100%; padding:0 30px;">
                            <p>Bạn chưa gửi bình luận nào cả.</p>
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