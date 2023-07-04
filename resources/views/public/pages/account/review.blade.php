@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/public/account/style.css') }}">
@stop

@section('content')
    <section class="account">
        @include('Public.partial.sidebar')
        <div class="body-content">
            <h1>Manage reviews</h1>

            <div class="header">
                <div class="bg">
                    <div class="text">
                        <h2>WELCOME TO BACK, {!! Str::upper(session('account')->name) !!}</h2>
                        <p><i>View and check your product reviews here</i></p>
                    </div>
                </div>
                <div class="icon">
                    <img src="{{ asset('images/icon-account-comment.png') }}">
                </div>
            </div>
            <div class="account-layout ">
                <div class="row equaHeight" data-obj=".col .box-bg-white">
                    <div class="col col-lg">
                        <h3>Review products</h3>
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
    </section>
@stop
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@stop
