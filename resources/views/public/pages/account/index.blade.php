@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
<link href="css/Public/account/style.css" rel="stylesheet">
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
        <h1>Bảng điều khiển</h1>
        <div class="header">
            <div class="bg">
                <div class="text">
                    <h2>CHÀO MỪNG QUAY TRỞ LẠI, {!! Str::upper(session('username')) !!}
                    </h2>
                    <p><i>Tổng quát các hoạt động của bạn tại đây</i></p>
                </div>
            </div>
            <div class="icon">
                <img src="{{asset('images/icon-account-home.png')}}">
            </div>
        </div>
        <div class="account-layout">
            <div class="row-acc equaHeight" data-obj=".col .box-bg-white">
                <div class="col-acc">
                    <h3>Thông tin cá nhân</h3>
                    <div class="box-bg-white" style="height: 100%;">
                        <div class=" account-info">
                            <div class="tools">
                                <a href="/account/info" title="Thay đổi thông tin cá nhân"><i
                                        class="fal fa fa-edit"></i></a>
                            </div>
                            <p><strong>Họ tên:</strong> <i>{{session('account')->name}}</i></p>
                            <p><strong>Tài khoản:</strong> <i>{{session('account')->username}}</i></p>
                            <p><strong>Ngày tháng năm sinh:</strong> <i>10/01/2002</i></p>
                            <p><strong>Ngày tham gia:</strong> <i>07/04/2023</i></p>
                            <p><strong>Email:</strong> <i>{{session('account')->email}}</i></p>
                            <p><strong>Địa chỉ:</strong> <i>{{session('account')->address}}</i></p>
                            <p><strong>Số điện thoại:</strong> <i>0869694275</i></p>

                        </div>
                    </div>
                </div>

                <div class="col-acc">
                    <h3>Đơn hàng đã đặt</h3>
                    <div class="box-bg-white" style="height: 100%;">
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
                                    <tr>
                                        <td>1</td>
                                        <td>123</td>
                                        <td>9/4/2023</td>
                                        <td>100.000d</td>
                                        <td>10%</td>
                                        <td>Laptop gaming MSI</td>
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
                                    class="fal fa fa-edit"></i></a>
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
                                    class="fal fa fa-eye"></i></a>
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
                                    class="fal fa fa-eye"></i></a>
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