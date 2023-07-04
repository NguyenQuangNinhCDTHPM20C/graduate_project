@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/public/account/style.css') }}">
@stop

@section('content')
    <section class="account">
        @include('Public.partial.sidebar')
        <div class="body-content">
            <h1>Manage favorites</h1>

            <div class="header">
                <div class="bg">
                    <div class="text">
                        <h2>WELCOME TO BACK, {!! Str::upper(session('account')->name) !!}</h2>
                        <p><i>View and check out your favorite products here</i></p>
                    </div>
                </div>
                <div class="icon">
                    <img src="{{ asset('images/icon-account-wishlist.png') }}">
                </div>
            </div>
            <div class="account-layout ">
                <div class="row equaHeight" data-obj=".col .box-bg-white">
                    <div class="col col-lg">
                        <h3>Favorite products</h3>
                        <div class="box-bg-white" style="height: 100%;">
                            <div style="padding:25px;">
                                <table class="table table-border table-lgpading">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Product</th>
                                            <th>Selling Price</th>
                                            <th>Discount Price</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($favorites as $_favorite)
                                            <tr>
                                                <td>{{ $loop->index }}</td>
                                                <td><img style="width: 50px;"
                                                        src="{{ asset($_favorite->product->featured_image->image_path) }}"
                                                        alt="{{ $_favorite->product->name }}">{{ $_favorite->product->name }}
                                                </td>
                                                <td>{{ $_favorite->product->selling_price }}</td>
                                                <td>{{ $_favorite->product->discount_price }}</td>
                                                <form
                                                    action="{{ route('account.favorite.delete', ['id' => $_favorite->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <td>
                                                        <button type="submit" class="btn btn-danger bg-radius"><i
                                                                class="fa-regular fa-trash-can"></i></button>
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
