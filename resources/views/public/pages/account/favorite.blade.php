@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/public/account/style.css') }}">
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
                        <p><i>Xem và kiểm tra những sản phẩm yêu thích của bạn tại đây
                            </i></p>
                    </div>
                </div>
                <div class="icon">
                    <img src="{{ asset('images/icon-account-wishlist.png') }}">
                </div>
            </div>
            <div class="account-layout ">
                <div class="row equaHeight" data-obj=".col .box-bg-white">
                    <div class="col col-lg">
                        <h3>Sản phẩm yêu thích của bạn</h3>
                        <div class="box-bg-white" style="height: 100%;">
                            <div style="padding:25px;">
                                @if (count($favorites) > 0)
                                    <table class="table table-border table-lgpading">
                                        <tbody>
                                            <tr>
                                                <th>STT</th>
                                                <th>Sản phẩm</th>
                                                <th>Giá gốc</th>
                                                <th>Giá giảm</th>
                                                <th>Chức năng</th>
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
                                    @else
                                        <p>Chưa có sản phẩm nào trong danh sách yêu thích của bạn.</p>
                                @endif
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@stop
