@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <style>
        fieldset,
        label {
            margin: 0;
            padding: 0;
        }

        .rating {
            border: none;
            float: left;
        }

        .rating>input {
            display: none;
        }

        .rating>label:before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }

        .rating>.half:before {
            content: "\f089";
            position: absolute;
        }

        .rating>label {
            color: #ddd;
            float: right;
        }

        .rating>input:checked~label,
        .rating>input:checked~label~label {
            color: #FFD700;
        }

        .rating>.half:checked~label {
            color: #FFED85;
        }

        .rating>label:hover {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
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
                            <div
                                class="d-flex justify-content-center align-items-center carousel-item {{ $key == 0 ? 'active' : '' }}">
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
                            @php
                                $full_stars = floor($average_rating);
                                // dd($average_rating);
                                $decimal_part = $average_rating - $full_stars;
                                $half_star = $decimal_part >= 0.25 && $decimal_part < 0.75;
                            @endphp


                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $full_stars)
                                    <small class="fas fa-star"></small>
                                @elseif ($half_star && $i == floor($average_rating) + 1)
                                    <small class="fas fa-star-half-alt"></small>
                                @else
                                    <small class="far fa-star"></small>
                                @endif
                            @endfor

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
                        <form id="add-to-cart" action="{{ route('cart.add') }}" method="POST">
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
                                <span class="btn btn-primary btn-minus bg-number-left border border-dark-subtle">
                                    <i class="fa fa-minus"></i>
                                </span>
                            </div>
                            <input type="number"
                                class="form-control bg-radius-none text-center text-dark border border-dark-subtle p-0"
                                name="quantity" min="1" value="1">
                            <div class="input-group-btn">
                                <span class="btn btn-primary btn-plus bg-number-right border border-dark-subtle">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->discount_price }}">
                        <input type="hidden" name="image" value="{{ optional($product->featured_image)->image_path }}">
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
                            <h4 class="mb-3">Mô tả sản phẩm</h4>
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
                                                        <i>{{ \Carbon\Carbon::parse($_review->created_at)->format('d/m/Y') }}</i></small>
                                                </h6>
                                                <div class="text-primary mb-2">
                                                    @for ($i = 1; $i <= $_review->rating; $i++)
                                                        <i class="fas fa-star checked"></i>
                                                    @endfor

                                                    @for ($i = $_review->rating + 1; $i <= 5; $i++)
                                                        <i class="far fa-star"></i>
                                                    @endfor
                                                    {{-- <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i> --}}
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
                                            class="img-fluid mr-3 mt-1" style="width: 45px; border-radius:50%;">
                                        <small>
                                            {{ session()->has('account') ? session('account')->name : '' }}
                                        </small>
                                        <form action="{{ route('review.add') }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <div class="d-flex my-3">
                                                <p class="mb-0 mr-2">Bình chọn* :</p>
                                                <div class="text-primary">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating"
                                                            value="5" /><label class="full" for="star5"
                                                            title="Xuất sắc"></label>
                                                        <input type="radio" id="star4" name="rating"
                                                            value="4" /><label class="full" for="star4"
                                                            title="Tốt"></label>
                                                        <input type="radio" id="star3" name="rating"
                                                            value="3" /><label class="full" for="star3"
                                                            title="Trung bình"></label>
                                                        <input type="radio" id="star2" name="rating"
                                                            value="2" /><label class="full" for="star2"
                                                            title="Kém"></label>
                                                        <input type="radio" id="star1" name="rating"
                                                            value="1" /><label class="full" for="star1"
                                                            title="Rất tệ"></label>
                                                    </fieldset>
                                                </div>

                                            </div>
                                            <input type="hidden" id="product_id" name="product_id"
                                                value="{{ $product->id }}">
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
    </script>
@stop
