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
                        <h2>CHÀO MỪNG QUAY TRỞ LẠI, {!! Str::upper(session('account')->name) !!}</h2>
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
                        <h3>Quản lý bình luận của bạn tại đây</h3>
                        <div class="box-bg-white" style="height: 100%;">
                            <div style="padding:25px;">
                                <div class="review-content comment-content" style="max-width:100%; padding:0 30px;">
                                    @foreach ($comments as $comment)
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
                                                            ({{ $comment->created_at }})
                                                            <span>- bài viết gốc:</span> <a
                                                                class="text-dark text-decoration-none text-truncate name-product"
                                                                target="_blank"
                                                                href="{{ route('product-detail', ['slug' => $comment->product_slug]) }}">{{ route('product-detail', ['slug' => $comment->product_slug]) }}</a>
                                                        </i>
                                                    </label>
                                                </p>
                                                <div class="content">
                                                    {{ $comment->comment }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
