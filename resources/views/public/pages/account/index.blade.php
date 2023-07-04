@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <link href="css/public/account/style.css" rel="stylesheet">
@stop

@section('content')
    <section class="account">
        @include('Public.partial.sidebar')
        <div class="body-content">
            <h1>Dashboard</h1>
            <div class="header">
                <div class="bg">
                    <div class="text">
                        <h2>WELCOME TO BACK, {!! Str::upper(session('account')->name) !!}
                        </h2>
                        <p><i>Overview of your activities here</i></p>
                    </div>
                </div>
                <div class="icon">
                    <img src="{{ asset('images/icon-account-home.png') }}">
                </div>
            </div>
            <div class="account-layout">
                <div class="row-acc equaHeight" data-obj=".col .box-bg-white">
                    <div class="col-acc">
                        <h3>Personal information</h3>
                        <div class="box-bg-white" style="height: 100%;">
                            <div class=" account-info">
                                <div class="tools">
                                    <a href="{{ route('account.infor') }}" title="Thay đổi thông tin cá nhân"><i
                                            class="fal fa fa-edit"></i></a>
                                </div>
                                <p><strong>Full name:</strong> <i>{{ session('account')->name }}</i></p>
                                <p><strong>User name:</strong> <i>{{ session('account')->username }}</i></p>
                                <p><strong>Join date:</strong>
                                    <i>{{ \Carbon\Carbon::parse(session('account')->created_at)->format('d/m/Y') }}
                                    </i></p>
                                <p><strong>Email:</strong> <i>{{ session('account')->email }}</i></p>
                                <p><strong>Address:</strong>
                                    <i>{{ session('account')->address }}, {{ session('account')->district }},
                                        {{ session('account')->province }}</i>
                                </p>
                                <p><strong>Phone number:</strong> <i>{{ session('account')->phone_number }}</i></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-acc">
                        <h3>Orders placed</h3>
                        <div class="box-bg-white" style="height: 100%;">
                            <div style="padding:25px;">
                                <table class="table table-border table-lgpading">
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <th>Code</th>
                                            <th>Order date</th>
                                            <th>Ordered products</th>
                                            <th>Total</th>
                                        </tr>
                                        @if (count($orders) > 0)
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td>{{ $loop->index }}</td>
                                                    <td>{{ $order->code }}</td>
                                                    <td>{{ $order->order_date }}</td>
                                                    <td>{{ $order->product_name }}</td> <!-- Đóng dấu nháy đơn ở đây -->
                                                    <td>{{ $order->price }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                You don't have any orders!!
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
                        <h3>Favorite products</h3>
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
                                                                                src="{{ asset($favorite->product->featured_image->image_path) }}"
                                                                                alt="{{ $favorite->product->name }}" />
                                                                        </div>
                                                                        <div class="text-center py-4 px-4 overflow-text">
                                                                            <a class="h6 text-decoration-none text-truncate name-product"
                                                                                href="{{ route('product-detail', ['slug' => $favorite->product->slug]) }}">{{ $favorite->product->name }}</a>
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
                                                    <p>There are no products in your favorites.</p>
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
                        <h3>Manage reviews</h3>

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
                                                            <span>- original review:</span> <a
                                                                class="text-dark text-decoration-none text-truncate name-product"
                                                                target="_blank"
                                                                href="{{ route('product-detail', ['slug' => $review->product_slug]) }}">{{ route('product-detail', ['slug' => $review->product_slug]) }}</a>
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
                                    <p>You have not submitted any reviews yet.</p>
                                </div>
                            @endif
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
