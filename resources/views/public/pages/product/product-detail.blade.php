@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <style>
        .jq-toast-wrap {
            z-index: 900000 !important;
            display: block;
            position: fixed;
            width: 250px;
            pointer-events: none !important;
            letter-spacing: normal;
            z-index: 2000000005 !important;
        }

        .jq-toast-single {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 0 0 5px;
            border-radius: 4px;
            font-size: 12px;
            font-family: arial, sans-serif;
            line-height: 17px;
            position: relative;
            pointer-events: all !important;
            background-color: #444;
            color: #fff;
        }

        .jq-toast-loader {
            display: block;
            position: absolute;
            top: -2px;
            height: 5px;
            width: 0;
            left: 0;
            border-radius: 5px;
            background: red;
        }

        .close-jq-toast-single {
            position: absolute;
            top: 3px;
            right: 7px;
            font-size: 14px;
            cursor: pointer;
        }

        .jq-toast-wrap .cart-msg {
            color: #000;
            margin: -11px;
            padding: 12px;
            background: #fff 0% 0% no-repeat padding-box;
            box-shadow: 3px 4px 6px #00000029;
            border-radius: 6px;
            text-align: center;
            width: 280px !important;
            max-width: 280px !important;
        }

        .jq-toast-wrap .cart-msg p {
            margin: 0 0 15px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .jq-toast-wrap .cart-msg p i.text-red {
            background: #fd475a;
        }

        .jq-toast-wrap .cart-msg p i {
            font-size: 9px;
            background: #009981 0% 0% no-repeat padding-box;
            width: 18px;
            height: 18px;
            line-height: 18px;
            text-align: center;
            color: #fff;
            border-radius: 18px;
            display: block;
            margin-right: 5px;
        }

        .jq-toast-wrap .cart-msg a.button-red {
            background: #fd475a;
        }

        .jq-toast-wrap .cart-msg a.button {
            display: block;
            background: #009a82 0% 0% no-repeat padding-box;
            padding: 8px 10px;
            font-weight: bold;
            color: #fff;
            font-size: 12px;
            border-radius: 3px;
            text-align: center;
        }

        .jq-toast-single {
            text-align: left;
            display: none;
        }

        vz.pd-wrap {
            padding: 40px 0;
            font-family: 'Poppins', sans-serif;
        }

        .heading-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .sub-heading {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            display: block;
            font-weight: 600;
            color: #2e9ca1;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .heading-section h2 {
            font-size: 32px;
            font-weight: 500;
            padding-top: 10px;
            padding-bottom: 15px;
            font-family: 'Poppins', sans-serif;
        }

        .user-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            position: relative;
            min-width: 80px;
            background-size: 100%;
        }

        .carousel-testimonial .item {
            padding: 30px 10px;
        }

        .quote {
            position: absolute;
            top: -23px;
            color: #2e9da1;
            font-size: 27px;
        }

        .name {
            margin-bottom: 0;
            line-height: 14px;
            font-size: 17px;
            font-weight: 500;
        }

        .position {
            color: #adadad;
            font-size: 14px;
        }

        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translate(0, -50%);
            outline: none;
            height: 25px;
        }

        .owl-nav button svg {
            width: 25px;
            height: 25px;
        }

        .owl-nav button.owl-prev {
            left: 25px;
        }

        .owl-nav button.owl-next {
            right: 25px;
        }

        .owl-nav button span {
            font-size: 45px;
        }

        .product-thumb .item img {
            height: 100px;
        }

        .product-name {
            font-size: 22px;
            font-weight: 500;
            line-height: 22px;
            margin-bottom: 4px;
        }

        .product-price-discount {
            font-size: 22px;
            font-weight: 400;
            padding: 10px 0;
            clear: both;
        }

        .product-price-discount span.line-through {
            text-decoration: line-through;
            margin-left: 10px;
            font-size: 14px;
            vertical-align: middle;
            color: #a5a5a5;
        }

        .display-flex {
            display: flex;
        }

        .align-center {
            align-items: center;
        }

        .product-info {
            width: 100%;
        }

        .reviews-counter {
            font-size: 13px;
        }

        .reviews-counter span {
            vertical-align: -2px;
        }

        .rate {
            float: left;
            padding: 0 10px 0 0;
        }

        .rate:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 15px;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 21px;
            color: #ccc;
            margin-bottom: 0;
            line-height: 21px;
        }

        .rate:not(:checked)>label:before {
            content: '\2605';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }

        .product-dtl p {
            font-size: 14px;
            line-height: 24px;
            color: #7a7a7a;
        }

        .product-dtl .form-control {
            font-size: 15px;
        }

        .product-dtl label {
            line-height: 16px;
            font-size: 15px;
        }

        .form-control:focus {
            outline: none;
            box-shadow: none;
        }

        .product-count {
            margin-top: 15px;
        }

        .product-count .qtyminus,
        .product-count .qtyplus {
            width: 34px;
            height: 34px;
            background: #212529;
            text-align: center;
            font-size: 19px;
            line-height: 36px;
            color: #fff;
            cursor: pointer;
        }

        .product-count .qtyminus {
            border-radius: 3px 0 0 3px;
        }

        .product-count .qtyplus {
            border-radius: 0 3px 3px 0;
        }

        .product-count .qty {
            width: 60px;
            text-align: center;
        }

        .round-black-btn {
            border-radius: 4px;
            background: #212529;
            color: #fff;
            padding: 7px 45px;
            display: inline-block;
            margin-top: 20px;
            border: solid 2px #212529;
            transition: all 0.5s ease-in-out 0s;
        }

        .round-black-btn:hover,
        .round-black-btn:focus {
            background: transparent;
            color: #212529;
            text-decoration: none;
        }

        .product-info-tabs {
            margin-top: 25px;
        }

        .product-info-tabs .nav-tabs {
            border-bottom: 2px solid #d8d8d8;
        }

        .product-info-tabs .nav-tabs .nav-item {
            margin-bottom: 0;
        }

        .product-info-tabs .nav-tabs .nav-link {
            border: none;
            border-bottom: 2px solid transparent;
            color: #323232;
        }

        .product-info-tabs .nav-tabs .nav-item .nav-link:hover {
            border: none;
        }

        .product-info-tabs .nav-tabs .nav-item.show .nav-link,
        .product-info-tabs .nav-tabs .nav-link.active,
        .product-info-tabs .nav-tabs .nav-link.active:hover {
            border: none;
            border-bottom: 2px solid #d8d8d8;
            font-weight: bold;
        }

        .product-info-tabs .tab-content .tab-pane {
            padding: 30px 20px;
            font-size: 15px;
            line-height: 24px;
            color: #7a7a7a;
        }
    </style>
@endsection

@section('content')
    <!-- Shop Detail Start -->
    <div class="jq-toast-wrap" role="alert" aria-live="polite" style="left: 643px; bottom: 20px;">
        <div class="jq-toast-single" style="text-align: left;"><span class="jq-toast-loader"></span><span
                class="close-jq-toast-single">×</span>
            <div class="cart-msg">
                <p><i class="fa-solid fa-check"></i> <span id="messageText">{{ session('message') }}</span>

                </p>
                <a class="button button-red" href="/account/wishlist">Quản lý danh sách</a>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark text-decoration-none" href="{{ route('home') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark text-decoration-none" href="{{ route('products') }}">Sản phẩm</a>
                    <span class="breadcrumb-item active">{{ $product->name }}</span>
                </nav>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light bg-radius">
                        <div class="love-this-button">
                            @if ($existingFavoriteDetail)
                                <form id="favorite-form-{{ $product->id }}"
                                    action="{{ route('favorite.delete', ['id' => $product->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"> <i class="fa fa-heart"></i></button>
                                </form>
                            @else
                                <form id="favorite-form" action="{{ route('favorite.add') }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" id="product_id" name="product_id" value="{{ $product->id }}">
                                    <button type="submit"> <i class="fa-regular fa-heart"></i></button>
                                </form>
                            @endif
                        </div>
                        @foreach ($images as $key => $image)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img class="w-100 h-100" src="{{ $image->image_path ? asset($image->image_path) : '' }}"
                                    alt="{{ optional($image->product)->name }}">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light bg-radius p-30">
                    <h3>{{ $product->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1">({{ $review_count }} Đánh giá)</small>
                    </div>
                    <div class="d-flex align-items-center  mt-2">

                        <h5 style="color: #fd475a;font-size:1rem;">
                            {{ number_format($product->discount_price, 0, ',', '.') }}đVNĐ</h5>
                        <h6 class="text-muted ml-2">
                            <del>{{ number_format($product->selling_price, 0, ',', '.') }}đ</del>
                        </h6>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-grey mr-3">Màu sắc:</strong>
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            @foreach ($product_colors as $key => $product_color)
                                <div class="radio-item"><input name="color" id="color-{{ $key }}" type="radio"
                                        value="{{ optional($product_color->color)->name }}" required
                                        {{ $key === 0 ? 'checked' : '' }}><label
                                        for="color-{{ $key }}">{{ optional($product_color->color)->name }}</label>
                                </div>
                            @endforeach
                    </div>
                    <p class="mb-4"><strong class="text-grey mr-3">Thương hiệu:</strong>{{ $product->brand->name }}</p>
                    <p class="mb-4"><strong class="text-grey mr-3">Loại sản
                            phẩm:</strong>{{ $product->sub_category->name }}</p>
                    <p class="mb-4"><strong class="text-grey mr-3">Trạng
                            thái:</strong>{{ $product->quantity > 0 ? 'Còn hàng' : 'Hết hàng' }}</p>
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus bg-number-left">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-radius-none bg-secondary border-0 text-center"
                                name="quantity" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus bg-number-right">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->discount_price }}">
                        <input type="hidden" name="image"
                            value="{{ optional($product->featured_image)->image_path }}">
                        <button class="btn btn-primary px-3 bg-number-left bg-number-right"><i
                                class="fa fa-shopping-cart mr-1"></i> Thêm giỏ hàng</button>
                        </form>
                    </div>
                    <div class="d-flex pt-2">
                        <strong class="mr-2">Chia sẻ:</strong>
                        <div class="d-inline-flex">
                            <a class="px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light bg-radius p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-tab-p-d text-tab-p-d-active" data-toggle="tab"
                            href="#tab-pane-1">Mô tả</a>
                        <a class="nav-item nav-link text-tab-p-d" data-toggle="tab" href="#tab-pane-2">Thông tin chi
                            tiết</a>
                        <a class="nav-item nav-link text-tab-p-d" data-toggle="tab" href="#tab-pane-3">Đánh giá
                            ({{ $review_count }})</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Mô tả sản phấm</h4>
                            <p>{{ $product->description }}</p>
                        </div>
                        @if ($product->category->type == 'laptop' && $product_info)
                            <div class="tab-pane fade" id="tab-pane-2">
                                <h4 class="mb-3">Thông tin chi tiết</h4>
                                <div class="row px-xl-5">
                                    <div class="col-lg-8 table-responsive mb-5">
                                        <table class="table table-light table-borderless table-hover text-center mb-0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Thuộc tính</th>
                                                    <th>Thông tin</th>
                                                    <th>Thuộc tính</th>
                                                    <th>Thông tin</th>
                                                </tr>
                                            </thead>
                                            <tbody class="align-middle">
                                                <tr>
                                                    <td class="align-middle">Hãng CPU</td>
                                                    <td class="align-middle">{{ $product_info->cpu_brand }}</td>
                                                    <td class="align-middle">Loại ổ cứng</td>
                                                    <td class="align-middle">{{ $product_info->storage_type }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">Dòng CPU</td>
                                                    <td class="align-middle">{{ $product_info->cpu_series }}</td>
                                                    <td class="align-middle">Kích thước màn hình</td>
                                                    <td class="align-middle">{{ $product_info->display_size }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">Số hiệu CPU</td>
                                                    <td class="align-middle">{{ $product_info->cpu_model }}</td>
                                                    <td class="align-middle">Độ phân giải</td>
                                                    <td class="align-middle">{{ $product_info->display_resolution }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">Xung nhịp cơ bản</td>
                                                    <td class="align-middle">{{ $product_info->cpu_base_clock }}</td>
                                                    <td class="align-middle">Công nghệ màn hình</td>
                                                    <td class="align-middle">{{ $product_info->display_technology }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">Bộ nhớ đệm</td>
                                                    <td class="align-middle">{{ $product_info->cpu_cache }}</td>
                                                    <td class="align-middle">Tần số quét</td>
                                                    <td class="align-middle">{{ $product_info->refresh_rate }}</td>
                                                </tr>

                                                <tr>
                                                    <td class="align-middle">Xung nhịp tối đa</td>
                                                    <td class="align-middle">{{ $product_info->cpu_max_clock }}</td>
                                                    <td class="align-middle">Loại tấm nền</td>
                                                    <td class="align-middle">{{ $product_info->cpu_series }}</td>
                                                </tr>

                                                <tr>
                                                    <td class="align-middle">Số nhân</td>
                                                    <td class="align-middle">{{ $product_info->cpu_cores }}</td>
                                                    <td class="align-middle">Công nghệ âm thanh</td>
                                                    <td class="align-middle">{{ $product_info->cpu_series }}</td>
                                                </tr>

                                                <tr>
                                                    <td class="align-middle">Số luồng</td>
                                                    <td class="align-middle">{{ $product_info->cpu_threads }}</td>
                                                    <td class="align-middle">Card on-board</td>
                                                    <td class="align-middle">{{ $product_info->onboard_graphics }}</td>
                                                </tr>

                                                <tr>
                                                    <td class="align-middle">RAM</td>
                                                    <td class="align-middle">{{ $product_info->ram_size }}</td>
                                                    <td class="align-middle">Các cổng giao tiếp</td>
                                                    <td class="align-middle">{{ $product_info->dedicated_graphics }}</td>
                                                </tr>

                                                <tr>
                                                    <td class="align-middle">Tiêu chuẩn RAM</td>
                                                    <td class="align-middle">{{ $product_info->ram_standard }}</td>
                                                    <td class="align-middle">Kết nối không dây</td>
                                                    <td class="align-middle">{{ $product_info->wireless_connectivity }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="align-middle">Tốc độ Bus</td>
                                                    <td class="align-middle">{{ $product_info->ram_speed }}</td>
                                                    <td class="align-middle">Hệ điều hành</td>
                                                    <td class="align-middle">{{ $product_info->operating_system }}</td>
                                                </tr>

                                                <tr>
                                                    <td class="align-middle">Ổ cứng mặc định</td>
                                                    <td class="align-middle">{{ $product_info->storage_capacity }}</td>
                                                    <td class="align-middle">Kích thước</td>
                                                    <td class="align-middle">{{ $product_info->dimensions }}</td>
                                                </tr>

                                                <tr>
                                                    <td class="align-middle">Dung lượng pin</td>
                                                    <td class="align-middle">{{ $product_info->battery_capacity }}</td>
                                                    <td class="align-middle">Trọng lượng</td>
                                                    <td class="align-middle">{{ $product_info->weight }}</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">{{ $review_count }} đánh giá cho "{{ $product->name }}"</h4>
                                    @foreach ($reviews as $_review)
                                        <div class="media mb-4">
                                            <img src="{{ asset($_review->account_photo) }}" alt="Image"
                                                class="img-fluid mr-3 mt-1" style="width: 45px;">
                                            <div class="media-body">
                                                <h6>{{ $_review->account_name }}<small> -
                                                        <i>{{ $_review->created_at }}</i></small>
                                                </h6>
                                                <div class="text-primary mb-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <p>{{ $_review->comment }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    @if (!session()->has('account'))
                                        <small style="color:red;">Bạn cần đăng nhập để đánh giá sản phẩm ...*</small>
                                    @else
                                        <h4 class="mb-4">Để lại đánh giá</h4>
                                        <img src="{{ asset(session()->has('account') ? session('account')->photo : '') }}
"
                                            alt="{{ session()->has('account') ? session('account')->name : '' }}"
                                            class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <small>
                                            {{ session()->has('account') ? session('account')->name : '' }}
                                        </small>
                                        <form action="{{ route('review.add') }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <div class="d-flex my-3">
                                                <p class="mb-0 mr-2">Bình chọn* :</p>
                                                <div class="text-primary">
                                                    <i class="far fa-star" data-index="1"></i>
                                                    <i class="far fa-star" data-index="2"></i>
                                                    <i class="far fa-star" data-index="3"></i>
                                                    <i class="far fa-star" data-index="4"></i>
                                                    <i class="far fa-star" data-index="5"></i>
                                                </div>
                                            </div>
                                            <input type="hidden" id="product_id" name="product_id"
                                                value="{{ $product->id }}">
                                            <input type="hidden" id="rating" name="rating" value="5">
                                            <div class="form-group">
                                                <label for="message">Đánh giá *</label>
                                                <textarea id="comment" name="comment" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group mb-0">
                                                <input type="submit" value="Gửi" class="btn btn-custom px-3">
                                            </div>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->
@stop
@section('scripts')
    <script>
        // Lấy các phần tử cần thiết
        const input = document.querySelector('.quantity input');
        const btnMinus = document.querySelector('.quantity .btn-minus');
        const btnPlus = document.querySelector('.quantity .btn-plus');

        // Thêm sự kiện "click" cho nút "tăng"
        btnPlus.addEventListener('click', (event) => {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của form
            let value = parseInt(input.value);
            value += 1;
            input.value = value;
        });

        // Thêm sự kiện "click" cho nút "giảm"
        btnMinus.addEventListener('click', (event) => {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của form
            let value = parseInt(input.value);
            value -= 1;
            if (value < 1) {
                value = 1;
            }
            input.value = value;
        });

        //==========================
        const form = document.getElementById("favorite-form");
        const toast = document.querySelector(".jq-toast-single");
        form.addEventListener("submit", (event) => {
            showToast();
        });

        function showToast(message) {
            // messageText.textContent = message; // Cập nhật đoạn văn bản trong thông báo

            toast.style.display = "block"; // Hiển thị thông báo

            setTimeout(() => {
                toast.style.display = "none"; // Ẩn thông báo sau 10 giây
            }, 999999);
        }
    </script>
@stop
