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
                        <h2>CHÀO MỪNG QUAY TRỞ LẠI, {!! Str::upper(session('account')->name) !!}
                        </h2>
                        <p><i>Tổng quát các hoạt động của bạn tại đây</i></p>
                    </div>
                </div>
                <div class="icon">
                    <img src="{{ asset('images/icon-account-home.png') }}">
                </div>
            </div>
            <div class="account-layout">
                <div class="row-acc equaHeight" data-obj=".col .box-bg-white">
                    <div class="col-acc">
                        <h3>Thông tin cá nhân</h3>
                        <div class="box-bg-white" style="height: 100%;">
                            <div class=" account-info">
                                <div class="tools">
                                    <a href="{{ route('account.infor') }}" title="Thay đổi thông tin cá nhân"><i
                                            class="fal fa fa-edit"></i></a>
                                </div>
                                <p><strong>Họ tên:</strong> <i>{{ session('account')->name }}</i></p>
                                <p><strong>Tài khoản:</strong> <i>{{ session('account')->username }}</i></p>
                                <p><strong>Ngày tham gia:</strong> <i>{{ session('account')->created_at }}</i></p>
                                <p><strong>Email:</strong> <i>{{ session('account')->email }}</i></p>
                                <p><strong>Địa chỉ:</strong> <i>{{ session('account')->address }}</i></p>
                                <p><strong>Số điện thoại:</strong> <i>{{ session('account')->phone_number }}</i></p>
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
                                            <th>Sản phẩm đặt hàng</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                        @if (count($orders) > 0)
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td>{{ $loop->index }}</td>
                                                    <td>{{ $order->code }}</td>
                                                    <td>{{ $order->created_at }}</td>
                                                    <td>{{ $order->product_name }}</td> <!-- Đóng dấu nháy đơn ở đây -->
                                                    <td>{{ $order->price }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                Bạn không có đơn hàng nào!!
                                            </tr>
                                        @endif
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

                            <div style="max-width:100%;">
                                <div class="owl-carousel owl-reponsive lr-slider owl-loaded owl-drag">

                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                            <div class="lr-item active" style="width:100%; margin-right: 10px;">
                                                @if (count($favorites) > 0)
                                                    <div class="review-content comment-content" style="max-width:100%;">
                                                        <div class="row">
                                                            @foreach ($favorites as $favorite)
                                                                <div class="col-md-3 col-sm-6 pb-1">
                                                                    <div class="product-item bg-light mb-4 item-p"
                                                                        style="border-bottom: 4px solid #00957E;">
                                                                        <div
                                                                            class="product-img position-relative overflow-hidden img-p">
                                                                            <img class="img-fluid"
                                                                                src="{{ asset('assets/product/' . $favorite->product->image) }}"
                                                                                alt="{{ $favorite->product->name }}" />
                                                                        </div>
                                                                        <div class="text-center py-4 px-4 overflow-text">
                                                                            <a class="h6 text-decoration-none text-truncate name-product"
                                                                                href="{{ route('product-detail', ['id' => $favorite->id]) }}">{{ $favorite->product->name }}</a>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-center mt-2">
                                                                                <h5 style="color: #fd475a;">
                                                                                    {{ $favorite->product->selling_price }}VND
                                                                                </h5>
                                                                                <h6 class="text-muted ml-2">
                                                                                    <del>{{ $favorite->product->discount_price }}VND</del>
                                                                                </h6>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-center mb-1">
                                                                                <small
                                                                                    class="fa fa-star text-primary mr-1"></small>
                                                                                <small
                                                                                    class="fa fa-star text-primary mr-1"></small>
                                                                                <small
                                                                                    class="fa fa-star text-primary mr-1"></small>
                                                                                <small
                                                                                    class="fa fa-star text-primary mr-1"></small>
                                                                                <small
                                                                                    class="fa fa-star text-primary mr-1"></small>
                                                                                <small>(99)</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                    </div>
                                                @else
                                                    <p>Chưa có sản phẩm nào trong danh sách yêu thích của bạn.</p>
                                                @endif
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
                            @if (count($reviews) > 0)
                                <div class="review-content comment-content" style="max-width:100%; padding:0 30px;">
                                    @foreach ($reviews as $review)
                                        <div class="item item-selected">
                                            <div class="avt">
                                                <img src="{{ asset(session('account')->photo) }}">
                                            </div>
                                            <div class="info">
                                                <p>
                                                    <strong class="name">{{ session('account')->name }}</strong>
                                                </p>
                                                <p>
                                                    <label>
                                                        <i>
                                                            ({{ $review->created_at }})
                                                            <span>- bài viết gốc:</span> <a target="_blank"
                                                                href="{{ route('product-detail', ['id' => $review->product_id]) }}">{{ route('product-detail', ['id' => $review->product_id]) }}</a>
                                                        </i>
                                                    </label>
                                                </p>
                                                <div class="content">
                                                    {{ $review->comment }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="review-content comment-content" style="max-width:100%; padding:0 30px;">
                                    <p>Bạn chưa gửi đánh giá nào cả.</p>
                                </div>
                            @endif
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
