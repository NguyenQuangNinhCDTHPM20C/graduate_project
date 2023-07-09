@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('product.list') }}">Sản phẩm /</a>
                        <span>{{ $product->name }}</span>
                    </h6>
                    <h4>Xem chi tiết sản phẩm</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="bar-code-view">
                                <div>
                                    <div>{!! DNS1D::getBarcodeHTML($product->code, 'C128', 1.4, 22) !!}</div>
                                    <p class="pid">{{ $product->code }}</p>
                                </div>
                                <a class="printimg">
                                    <img src="{{ asset('images/printer.svg') }}" alt="print">
                                </a>
                            </div>
                            <div class="productdetails">
                                <ul class="product-bar">
                                    <li>
                                        <h4>Sản phẩm</h4>
                                        <h6>{{ $product->name }}</h6>
                                    </li>
                                    <li>
                                        <h4>Danh mục</h4>
                                        <h6>{{ optional($product->category)->name }}</h6>
                                    </li>
                                    <li>
                                        <h4>Phụ mục</h4>
                                        <h6>{{ optional($product->sub_category)->name }}</h6>
                                    </li>
                                    <li>
                                        <h4>Thương hiệu</h4>
                                        <h6>{{ optional($product->brand)->name }}</h6>
                                    </li>
                                    <li>
                                        <h4>Code</h4>
                                        <h6>{{ $product->code }}</h6>
                                    </li>
                                    <li>
                                        <h4>Số lượng</h4>
                                        <h6>{{ $product->quantity }}</h6>
                                    </li>
                                    <li>
                                        <h4>Giá bán</h4>
                                        <h6>{{ $product->selling_price }}</h6>
                                    </li>
                                    @if ($product->discount_price)
                                        <li>
                                            <h4>Giá giảm</h4>
                                            <h6>{{ $product->discount_price }}</h6>
                                        </li>
                                    @endif
                                    <li>
                                        <h4>Trạng thái</h4>
                                        @if ($product->status == 1)
                                            <h6>Còn bán</h6>
                                        @else
                                            <h6>Hết bán</h6>
                                        @endif
                                    </li>
                                    <li>
                                        <h4>Mô tả</h4>
                                        <h6>{{ $product->description }}</h6>
                                    </li>
                                    <li>
                                        <h4>Màu sắc</h4>
                                        <h6>
                                            @foreach ($colors as $product_color)
                                                {{ $product_color->color->name }}
                                            @endforeach
                                        </h6>
                                    </li>
                                    @if ($product_laptop)
                                        <li>
                                            <h4>Hãng CPU</h4>
                                            <h6>{{ $product_laptop->cpu_brand }}</h6>
                                        </li>
                                        <li>
                                            <h4>Dòng CPU</h4>
                                            <h6>{{ $product_laptop->cpu_series }}</h6>
                                        </li>
                                        <li>
                                            <h4>Model CPU</h4>
                                            <h6>{{ $product_laptop->cpu_model }}</h6>
                                        </li>
                                        <li>
                                            <h4>CPU Base Clock</h4>
                                            <h6>{{ $product_laptop->cpu_base_clock }}</h6>
                                        </li>
                                        <li>
                                            <h4>Bộ nhớ Cache CPU</h4>
                                            <h6>{{ $product_laptop->cpu_cache }}</h6>
                                        </li>
                                        <li>
                                            <h4>CPU Max Clock</h4>
                                            <h6>{{ $product_laptop->cpu_max_clock }}</h6>
                                        </li>
                                        <li>
                                            <h4>Số lõi CPU</h4>
                                            <h6>{{ $product_laptop->cpu_cores }}</h6>
                                        </li>
                                        <li>
                                            <h4>Số luồng CPU</h4>
                                            <h6>{{ $product_laptop->cpu_threads }}</h6>
                                        </li>
                                        <li>
                                            <h4>Dung lượng RAM</h4>
                                            <h6>{{ $product_laptop->ram_size }}</h6>
                                        </li>
                                        <li>
                                            <h4>Chuẩn RAM</h4>
                                            <h6>{{ $product_laptop->ram_standard }}</h6>
                                        </li>
                                        <li>
                                            <h4>Tốc độ RAM</h4>
                                            <h6>{{ $product_laptop->ram_speed }}</h6>
                                        </li>
                                        <li>
                                            <h4>Dung lượng Lưu trữ</h4>
                                            <h6>{{ $product_laptop->storage_capacity }}</h6>
                                        </li>
                                        <li>
                                            <h4>Loại Ổ lưu trữ</h4>
                                            <h6>{{ $product_laptop->storage_type }}</h6>
                                        </li>
                                        <li>
                                            <h4>Kích thước Màn hình</h4>
                                            <h6>{{ $product_laptop->display_size }}</h6>
                                        </li>
                                        <li>
                                            <h4>Độ phân giải Màn hình</h4>
                                            <h6>{{ $product_laptop->display_resolution }}</h6>
                                        </li>
                                        <li>
                                            <h4>Công nghệ Màn hình</h4>
                                            <h6>{{ $product_laptop->display_technology }}</h6>
                                        </li>
                                        <li>
                                            <h4>Tốc độ làm mới</h4>
                                            <h6>{{ $product_laptop->refresh_rate }}</h6>
                                        </li>
                                        <li>
                                            <h4>Bộ nhớ đồ họa</h4>
                                            <h6>{{ $product_laptop->graphics_vram }}</h6>
                                        </li>
                                        <li>
                                            <h4>Đồ họa tích hợp</h4>
                                            <h6>{{ $product_laptop->onboard_graphics }}</h6>
                                        </li>
                                        <li>
                                            <h4>Đồ họa rời</h4>
                                            <h6>{{ $product_laptop->dedicated_graphics }}</h6>
                                        </li>
                                        <li>
                                            <h4>Kết nối không dây</h4>
                                            <h6>{{ $product_laptop->wireless_connectivity }}</h6>
                                        </li>
                                        <li>
                                            <h4>Hệ điều hành</h4>
                                            <h6>{{ $product_laptop->operating_system }}</h6>
                                        </li>
                                        <li>
                                            <h4>Kích thước</h4>
                                            <h6>{{ $product_laptop->dimensions }}</h6>
                                        </li>
                                        <li>
                                            <h4>Trọng lượng</h4>
                                            <h6>{{ $product_laptop->weight }}</h6>
                                        </li>
                                        <li>
                                            <h4>Dung lượng Pin</h4>
                                            <h6>{{ $product_laptop->battery_capacity }}</h6>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="slider-product-details">
                                <div class="owl-carousel owl-theme product-slide">
                                    @foreach ($images as $image)
                                        <div class="slider-product">
                                            <img src="{{ asset($image->image_path) }}" alt="{{ $product->name }}">
                                            <h6>{{ optional($image->product)->name }}</h6>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
