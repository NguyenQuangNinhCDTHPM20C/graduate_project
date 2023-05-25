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
        <h1>Sản phẩm yêu thích</h1>

        <div class="header">
            <div class="bg">
                <div class="text">
                    <h2>CHÀO MỪNG QUAY TRỞ LẠI, {!! Str::upper(session('account')->name) !!}</h2>
                    <p><i>Xem và kiểm tra những sản phẩm yêu thích của bạn tại đây</i></p>
                </div>
            </div>
            <div class="icon">
                <img src="{{asset('images/icon-account-wishlist.png')}}">
            </div>
        </div>
        <div class="account-layout ">
            <div class="row equaHeight" data-obj=".col .box-bg-white">
                <div class="col col-lg">
                    <h3>Sản phẩm yêu thích</h3>
                    <div class="box-bg-white" style="height: 100%;">
                        <div style="padding:25px;">
                            <table class="table table-border table-lgpading">
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Image</th>
                                        <th>Selling Price</th>
                                        <th>Discount Price</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($favorites as $_favorite)
                                    <tr>
                                        <td>{{ $loop->index }}</td>
                                        <td>{{$_favorite->product->name}}</td>
                                        <td><img style="width: 10%;"
                                                src="{{ asset('assets/product/'.$_favorite->product->image) }}"
                                                alt="{{$_favorite->product->name}}"></td>
                                        <td>{{$_favorite->product->selling_price}}</td>
                                        <td>{{$_favorite->product->discount_price}}</td>
                                        <form action="{{ route('wishlist.delete', ['id' => $_favorite->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <button type="submit" class="btn btn-danger bg-radius">Remove</button>
                                            </td>
                                        </form>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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