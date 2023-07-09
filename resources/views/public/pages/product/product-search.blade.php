@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')

    <!-- Products Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark text-decoration-none" href="#">Trang chủ</a>
                    <span class="breadcrumb-item active">Tìm kiếm</span>
                </nav>
            </div>
        </div>
        @if (isset($products) && count($products) > 0)
            <div class="product-filters2">
                <div class="left">
                    <strong class="label">Lọc danh sách:</strong>
                    <div class="facet">
                        <label><a href="javascript:;">Danh mục <i class="fa fa-angle-down mt-1"></i></a></label>
                        <div class="sub">
                            <ul>
                                @foreach ($categories as $category)
                                    <li><a
                                            href="{{ route('products', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                    <div class="facet">
                        <label>
                            <a href="javascript:;">Dòng CPU <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                @foreach ($cpu_brands as $cpu_brand)
                                    <li><a href="{{ route('products', ['cpu_brand' => $cpu_brand]) }}">{{ $cpu_brand }}
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Thương hiệu <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                @foreach ($brands as $brand)
                                    <li><a href="{{ route('products', ['brand' => $brand]) }}">{{ $brand }}
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Giá <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="{{ route('products', ['price' => 'more_than_100']) }}">Trên 100
                                        triệu</a></li>
                                <li><a href="{{ route('products', ['price' => '3_to_4']) }}">3 đến 4 triệu</a></li>
                                <li><a href="{{ route('products', ['price' => '5_to_6']) }}">5 đến 6 triệu</a></li>
                                <li><a href="{{ route('products', ['price' => '6_to_8']) }}">6 đến 8 triệu</a></li>
                                <li><a href="{{ route('products', ['price' => '8_to_10']) }}">8 đến 10 triệu </a></li>
                                <li><a href="{{ route('products', ['price' => '10_to_12']) }}">10 đến 12 triệu </a></li>
                                <li><a href="{{ route('products', ['price' => '12_to_15']) }}">12 đến 15 triệu </a></li>
                                <li><a href="{{ route('products', ['price' => '15_to_20']) }}">15 đến 20 triệu</a></li>
                                <li><a href="{{ route('products', ['price' => '20_to_100']) }}">20 đến 100 triệu </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Loại sản phẩm <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                @foreach ($sub_categories as $item)
                                    <li><a href="{{ route('products', ['sub_category' => $item]) }}">{{ $item }}
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Độ phân giải <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                @foreach ($display_resolutions as $item)
                                    <li><a href="{{ route('products', ['display_resolution' => $item]) }}">{{ $item }}
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Kích thước màn hình <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                @foreach ($display_sizes as $item)
                                    <li><a href="{{ route('products', ['display_size' => $item]) }}">{{ $item }}
                                            inch </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">RAM <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                @foreach ($ram_sizes as $item)
                                    <li><a href="{{ route('products', ['ram_size' => $item]) }}">{{ $item }}GB
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Card đồ hoạ rời <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                @foreach ($dedicated_graphics as $item)
                                    <li><a
                                            href="{{ route('products', ['dedicated_graphic' => $item]) }}">{{ $item }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Ổ cứng mặc định <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                @foreach ($storage_capacitys as $item)
                                    <li><a href="{{ route('products', ['storage_capacity' => $item]) }}">
                                            {{ $item }}GB
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div class="facet">
                        <label>Sắp xếp <i class="fa fa-angle-down mt-1"></i></label>
                        <div class="sub">
                            <ul>
                                <li><a href="{{ route('products', ['sort' => 'defaut']) }}"> Mặc định</a>
                                </li>
                                <li><a href="{{ route('products', ['sort' => 'low_to_high_price']) }}"> Giá thấp đến
                                        cao</a></li>
                                <li><a href="{{ route('products', ['sort' => 'high_to_low_price']) }}"> Giá cao đến
                                        thấp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-filters2 container2">
                <div class="container-filters2">
                    <div>
                        <h3>Lọc danh sách:</h3>
                        <div class="facet">
                            <label>Danh mục </label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn danh mục</option>
                                @foreach ($categories as $category)
                                    <option value="{{ route('products', ['category' => $category->slug]) }}">
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="facet">
                            <label>Dòng CPU</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn dòng CPU</option>
                                @foreach ($cpu_brands as $cpu_brand)
                                    <option value="{{ route('products', ['cpu_brand' => $cpu_brand]) }}">
                                        {{ $cpu_brand }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="facet">
                            <label>Thương hiệu</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn thương hiệu</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ route('products', ['brand' => $brand]) }}">
                                        {{ $brand }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="facet">
                            <label>Giá</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn giá tiền</option>
                                <option value="{{ route('products', ['price' => 'more_than_100']) }}">Trên 100 triệu
                                </option>
                                <option value="{{ route('products', ['price' => '3_to_4']) }}">3 đến 4 triệu
                                </option>
                                <option value="{{ route('products', ['price' => '5_to_6']) }}">5 đến 6 triệu
                                </option>
                                <option value="{{ route('products', ['price' => '6_to_8']) }}">6 đến 8 triệu
                                </option>
                                <option value="{{ route('products', ['price' => '8_to_10']) }}">8 đến 10 triệu
                                </option>
                                <option value="{{ route('products', ['price' => '10_to_12']) }}">10 đến 12 triệu
                                </option>
                                <option value="{{ route('products', ['price' => '12_to_15']) }}">12 đến 15 triệu
                                </option>
                                <option value="{{ route('products', ['price' => '15_to_20']) }}">15 đến 20 triệu
                                </option>
                                <option value="{{ route('products', ['price' => '20_to_100']) }}">20 đến 100 triệu
                                </option>
                            </select>
                        </div>
                        <div class="facet">
                            <label>Loại sản phẩm</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn loại sản phẩm</option>
                                @foreach ($sub_categories as $item)
                                    <option value="{{ route('products', ['sub_category' => $item]) }}">{{ $item }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="facet">
                            <label>Độ phân giải</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn độ phân giải</option>
                                @foreach ($display_resolutions as $item)
                                    <option value="{{ route('products', ['display_resolution' => $item]) }}">
                                        {{ $item }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="facet">
                            <label>Kích thước màn hình</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn kích thước màn hình</option>
                                @foreach ($display_sizes as $item)
                                    <option value="{{ route('products', ['display_size' => $item]) }}">
                                        {{ $item }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="facet">
                            <label>RAM</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn loại RAM</option>
                                @foreach ($ram_sizes as $item)
                                    <option value="{{ route('products', ['ram_size' => $item]) }}">
                                        {{ $item }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="facet">
                            <label>Card đồ hoạ rời</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn loại Card đồ họa </option>
                                @foreach ($dedicated_graphics as $item)
                                    <option value="{{ route('products', ['dedicated_graphics' => $item]) }}">
                                        {{ $item }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="facet">
                            <label>Ổ cứng mặc định</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn ổ cứng mặc định</option>
                                @foreach ($storage_capacitys as $item)
                                    <option value="{{ route('products', ['storage_capacity' => $item]) }}">
                                        {{ $item }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="facet">
                            <label>Sắp xếp</label>
                            <select onchange="window.location = this.value;">
                                <option value="{{ route('products', ['sort' => 'defaut']) }}">
                                    Mặc định
                                </option>
                                <option value="{{ route('products', ['sort' => 'low_to_high_price']) }}">
                                    Giá thấp đến cao
                                </option>
                                <option value="{{ route('products', ['sort' => 'high_to_low_price']) }}">
                                    Giá cao đến thấp
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                <span class="pr-3"></span>
            </h5>
            <div class="row px-xl-5">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4 item-p bg-radius">
                            <div class="product-img position-relative overflow-hidden img-p">
                                <img class="img-fluid "
                                    src="{{ $product->featured_image ? asset($product->featured_image->image_path) : '' }}"
                                    alt="{{ $product->name }}" />

                            </div>
                            <div class="text-center py-4 px-4 overflow-text">
                                <a class="h6 text-decoration-none text-truncate name-product"
                                    href="{{ route('product-detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5 style="color: #fd475a; font-size:1rem;">
                                        {{ number_format($product->discount_price, 0, ',', '.') }}đ</h5>
                                    <h6 class="text-muted ml-2"style="font-size:0.9em;">
                                        <del>{{ number_format($product->selling_price, 0, ',', '.') }}đ</del>
                                    </h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small>(99)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h5 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                <span class="bg-secondary pr-3">Product not found</span>
            </h5>
        @endif
    </div>
    <!-- Products End -->

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ">
                <div class="d-flex align-items-center bg-light mb-4 bg-radius bg-shadow" style="padding: 30px">
                    <h1 class="fas fa-solid fa-clipboard-check fa-icon m-0 mr-3 fa-p"></h1>
                    <h5 class="font-weight-semi-bold m-0">Genuine Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ">
                <div class="d-flex align-items-center bg-light mb-4 bg-radius bg-shadow" style="padding: 30px">
                    <h1 class="fa fa-cart-flatbed-suitcase fa-icon m-0 mr-2 fa-p"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4 bg-radius bg-shadow" style="padding: 30px">
                    <h1 class="fa fa-rotate fa-icon m-0 mr-3 fa-p"></h1>
                    <h5 class="font-weight-semi-bold m-0">Easy Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4 bg-radius bg-shadow" style="padding: 30px">
                    <h1 class="fa fa-headset fa-icon m-0 mr-3 "></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.filter-link').hover(
                function() {
                    $(this).next('.filter-drop').show();
                },
                function() {
                    $(this).next('.filter-drop').hide();
                }
            );
        });
    </script>
@endsection
