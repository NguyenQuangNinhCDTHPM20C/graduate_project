@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <style>
        .product-filters2 {
            font-size: 12px;
            background: #fff 0% 0% no-repeat padding-box;
            box-shadow: 0 3px 6px #00000029;
            border-radius: 14px;
            margin: 20px 3rem 20px 3rem;
        }

        .product-filters2 a {
            text-decoration: none;
            color: #00483d;
        }

        .product-filters2 .sub a:hover {
            color: #00917a;
        }

        .product-filters2 {
            position: relative;
            display: flex
        }

        .product-filters2 .left,
        .product-filters2 .right {
            display: flex;
            justify-items: right;
            justify-content: right;
            width: 100px;
            flex-grow: 0;
            flex-shrink: 0
        }

        .product-filters2 .left {
            flex-basis: auto;
            flex-shrink: 1;
            flex-grow: 2
        }

        .product-filters2 strong.label {
            display: inline-block;
            color: #00917a;
            padding: 15px 20px;
            font-size: 14px;
        }

        .product-filters2 .facet {
            display: block;
            padding: 15px 10px;
            margin-right: 20px
        }

        .product-filters2 .facet .sub {
            display: none;
            position: absolute;
            width: 100%;
            z-index: 123;
            left: 0;
            top: 40px;
            padding-top: 10px
        }

        .product-filters2 .facet:hover .sub {
            display: block
        }

        .product-filters2 .facet:hover label a,
        .product-filters2 .facet:hover label span {
            color: #fd475a
        }

        .product-filters2 .facet .sub ul {
            background: #fff;
            box-shadow: 0 3px 6px #00000029;
            border-radius: 14px;
            margin: 0;
            display: grid;
            grid-template-columns: auto auto auto auto auto;
            paddaing: 5px 10px;
            grid-column-gap: 10px
        }

        .product-filters2 .facet .sub ul li {
            list-style: none;
            padding: 5px
        }

        .product-filters2 .facet label {
            display: flex
        }

        .product-filters2 .facet label span,
        .product-filters2 .facet label strong {
            display: block;
            margin-right: 5px
        }

        .product-filters2 .facet i.icon-rightar::before {
            font-size: 8px;
            transform: rotate(90deg)
        }

        .product-filters2 .facet i.icon-minutes {
            font-size: 8px;
            background: #fd475a;
            line-height: 16px;
            width: 16px;
            height: 16px;
            display: block;
            border-radius: 20px;
            text-align: center;
            color: #fff;
            margin-right: 5px
        }

        .product-filters2 .facet ul li a {
            display: flex
        }

        .product-filters2 .facet ul li i.total {
            color: #888;
            margin-left: 4px
        }

        .container2 {
            display: none;
        }

        .product-filters2 h3 {
            padding: 0;
            margin: 0 0 10px 0
        }

        .product-filters2 .container-filters2 {
            padding: 10px 15px;
            border-radius: 6px
        }

        .product-filters2 .container-filters2 .facet {
            display: grid;
            grid-template-columns: 40% 60%;
            margin-bottom: 8px
        }

        .product-filters2 .container-filters2 .facet label {
            padding: 5px 0;
            color: #888;
            font-weight: bold
        }

        .product-filters2 .container-filters2 .facet select {
            border: 1px solid #009981;
            color: #009981;
            padding: 4px 8px
        }

        @media screen and (min-width: 992px) {}

        @media(max-width: 992px) {
            .container2 {
                display: block;
                margin: 0 0 20px 0;
            }

            .product-filters2 .left {
                display: none;
            }

            .product-filters2 .right {
                display: none;
            }
        }
    </style>
@endsection

@section('content')

    <!-- Products Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark text-decoration-none" href="#">Home</a>
                    <span class="breadcrumb-item active">Search</span>
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
                                <li><a href="/laptop/macbook">Apple</a></li>
                                <li><a href="/laptop/asus">ASUS</a></li>
                                <li><a href="/laptop/dell">Dell</a></li>
                                <li><a href="/laptop/hang-san-xuat/acer">Acer</a></li>
                                <li><a href="/laptop/msi">MSI</a></li>
                                <li><a href="/laptop/hang-san-xuat/lg">LG</a></li>
                                <li><a href="/laptop/huawei">Huawei</a></li>
                                <li><a href="/laptop/microsoft">Surface</a></li>
                                <li><a href="/laptop/lenovo">Lenovo</a></li>
                                <li><a href="/laptop/hp">HP</a></li>
                                <li><a href="/laptop/gigabyte">GIGABYTE</a></li>
                                <li><a href="/laptop/itel">Itel</a></li>
                                <li><a href="/laptop/hang-san-xuat/xiaomi">Xiaomi</a></li>
                                <li><a href="/laptop/masstel">Masstel</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="facet">
                        <label>
                            <a href="javascript:;">Dòng CPU <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22Core+i5%22%7d&amp;search=true">Core i5
                                        <i class="total">(66)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22Ryzen+5%22%7d&amp;search=true">Ryzen 5
                                        <i class="total">(16)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22Ryzen+7%22%7d&amp;search=true">Ryzen 7
                                        <i class="total">(15)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22Core+i3%22%7d&amp;search=true">Core i3
                                        <i class="total">(14)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22Core+i7%22%7d&amp;search=true">Core i7
                                        <i class="total">(14)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22Apple+M2%22%7d&amp;search=true">Apple M2
                                        <i class="total">(5)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22Apple+M1%22%7d&amp;search=true">Apple M1
                                        <i class="total">(4)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22Celeron%22%7d&amp;search=true">Celeron
                                        <i class="total">(3)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22Apple+M1+8-core%22%7d&amp;search=true">Apple
                                        M1 8-core <i class="total">(2)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22M2%22%7d&amp;search=true">M2 <i
                                            class="total">(2)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22Core+i9%22%7d&amp;search=true">Core i9
                                        <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22dong-cpu%22%3a%22Intel+Core+i5+Tiger+Lake%22%7d&amp;search=true">Intel
                                        Core i5 Tiger Lake <i class="total">(1)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22M1+series%22%7d&amp;search=true">M1
                                        series <i class="total">(1)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22Pentium+Silver%22%7d&amp;search=true">Pentium
                                        Silver <i class="total">(1)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22dong-cpu%22%3a%22Ryzen+3%22%7d&amp;search=true">Ryzen 3
                                        <i class="total">(1)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Thương hiệu <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%2245%22%7d&amp;search=true">HP <i
                                            class="total">(49)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%2249%22%7d&amp;search=true">Acer <i
                                            class="total">(26)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%225%22%7d&amp;search=true">Lenovo <i
                                            class="total">(19)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%22135%22%7d&amp;search=true">MSI <i
                                            class="total">(19)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%2248%22%7d&amp;search=true">Dell <i
                                            class="total">(16)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%229%22%7d&amp;search=true">LG <i
                                            class="total">(15)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%2211%22%7d&amp;search=true">Huawei <i
                                            class="total">(7)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%22202%22%7d&amp;search=true">Microsoft <i
                                            class="total">(3)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%22221%22%7d&amp;search=true">Gigabyte <i
                                            class="total">(3)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%22114%22%7d&amp;search=true">Itel <i
                                            class="total">(2)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%221%22%7d&amp;search=true">Apple <i
                                            class="total">(28)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%228%22%7d&amp;search=true">Asus <i
                                            class="total">(40)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22brand%22%3a%223%22%7d&amp;search=true">Xiaomi <i
                                            class="total">(2)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Giá <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="/laptop?filters=%7b%22price%22%3a%22T100t%22%7d&amp;search=true">Trên 100
                                        triệu
                                        <i class="total">(2)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22price%22%3a%223t-4t%22%7d&amp;search=true">3 đến 4 triệu
                                        <i class="total">(3)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22price%22%3a%225t-6t%22%7d&amp;search=true">5 đến 6 triệu
                                        <i class="total">(2)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22price%22%3a%226t-8t%22%7d&amp;search=true">6 đến 8 triệu
                                        <i class="total">(2)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22price%22%3a%228t-10t%22%7d&amp;search=true">8 đến 10
                                        triệu <i class="total">(10)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22price%22%3a%2210t-12t%22%7d&amp;search=true">10 đến 12
                                        triệu <i class="total">(11)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22price%22%3a%2212t-15t%22%7d&amp;search=true">12 đến 15
                                        triệu <i class="total">(38)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22price%22%3a%2215t-20t%22%7d&amp;search=true">15 đến 20
                                        triệu <i class="total">(71)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22price%22%3a%2220t-100tr%22%7d&amp;search=true">20 đến
                                        100 triệu <i class="total">(88)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Loại sản phẩm <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="/laptop?filters=%7b%22type%22%3a%2247%22%7d&amp;search=true">PC <i
                                            class="total">(5)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22type%22%3a%223%22%7d&amp;search=true">Laptop <i
                                            class="total">(226)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Độ phân giải <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%221920x1080%22%7d&amp;search=true">1920x1080
                                        <i class="total">(64)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%221920+x+1080%22%7d&amp;search=true">1920
                                        x 1080 <i class="total">(33)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%22Full+HD+(1920+x+1080)%22%7d&amp;search=true">Full
                                        HD (1920 x 1080) <i class="total">(13)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%221920+x+1200%22%7d&amp;search=true">1920
                                        x 1200 <i class="total">(8)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%22Retina+(2560+x+1600)%22%7d&amp;search=true">Retina
                                        (2560 x 1600) <i class="total">(7)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%222560+x+1600%22%7d&amp;search=true">2560
                                        x 1600 <i class="total">(5)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%222880x1800%22%7d&amp;search=true">2880x1800
                                        <i class="total">(5)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%222560x1600%22%7d&amp;search=true">2560x1600
                                        <i class="total">(4)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%223456+x+2234%22%7d&amp;search=true">3456
                                        x 2234 <i class="total">(4)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%221366+x+768%22%7d&amp;search=true">1366
                                        x 768 <i class="total">(3)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%221920x1200%22%7d&amp;search=true">1920x1200
                                        <i class="total">(3)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%222880+x+1800%22%7d&amp;search=true">2880
                                        x 1800 <i class="total">(3)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%223024+x+1964%22%7d&amp;search=true">3024
                                        x 1964 <i class="total">(3)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%222560+x1600%22%7d&amp;search=true">2560
                                        x1600 <i class="total">(2)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%222560x1440%22%7d&amp;search=true">2560x1440
                                        <i class="total">(2)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%222736+x+1824+pixels%22%7d&amp;search=true">2736
                                        x 1824 pixels <i class="total">(2)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%222880+x+1864%22%7d&amp;search=true">2880
                                        x 1864 <i class="total">(2)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%224.5K+(4480x2520)%22%7d&amp;search=true">4.5K
                                        (4480x2520) <i class="total">(2)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%22Liquid+Retina+(2560+x+1664)%22%7d&amp;search=true">Liquid
                                        Retina (2560 x 1664) <i class="total">(2)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%221366x768%22%7d&amp;search=true">1366x768
                                        <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%222160+x+1440%2c+185+PPI%22%7d&amp;search=true">2160
                                        x 1440, 185 PPI <i class="total">(1)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%222160x1440%22%7d&amp;search=true">2160x1440
                                        <i class="total">(1)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%222560+x+1440%22%7d&amp;search=true">2560
                                        x 1440 <i class="total">(1)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%223456x2160%22%7d&amp;search=true">3456x2160
                                        <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%22Aspect+ratio%3a+3%3a2%22%7d&amp;search=true">Aspect
                                        ratio: 3:2 <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%22FHD+(1920x1080)%22%7d&amp;search=true">FHD
                                        (1920x1080) <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%22HD+(1366+x+768)%22%7d&amp;search=true">HD
                                        (1366 x 768) <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%22QHD+(2160+x+1440)%22%7d&amp;search=true">QHD
                                        (2160 x 1440) <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%22Resolution%3a+2736+x+1824+(267+PPI)%22%7d&amp;search=true">Resolution:
                                        2736 x 1824 (267 PPI) <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%22Screen%3a+12.3+inch+PixelSense%e2%84%a2+Display%22%7d&amp;search=true">Screen:
                                        12.3 inch PixelSense™ Display <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%22Touch%3a+10+point+multi-touch%22%7d&amp;search=true">Touch:
                                        10 point multi-touch <i class="total">(1)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22do-phan-giai%22%3a%22sRGB+100%25%22%7d&amp;search=true">sRGB
                                        100% <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22do-phan-giai%22%3a%22%c4%90%e1%bb%99+ph%c3%a2n+gi%e1%ba%a3i%22%7d&amp;search=true">Độ
                                        phân giải <i class="total">(1)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Kích thước màn hình <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2215.6+inch%22%7d&amp;search=true">15.6
                                        inch <i class="total">(80)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2214+inch%22%7d&amp;search=true">14
                                        inch <i class="total">(46)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2216+inch%22%7d&amp;search=true">16
                                        inch <i class="total">(13)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2213.3+inch%22%7d&amp;search=true">13.3
                                        inch <i class="total">(11)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2216.1+inch%22%7d&amp;search=true">16.1
                                        inch <i class="total">(4)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2216.2+inch%22%7d&amp;search=true">16.2
                                        inch <i class="total">(4)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2211.6+inch%22%7d&amp;search=true">11.6
                                        inch <i class="total">(3)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2214.2+inch%22%7d&amp;search=true">14.2
                                        inch <i class="total">(3)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2212.3+inch%22%7d&amp;search=true">12.3
                                        inch <i class="total">(2)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2213.6+inch%22%7d&amp;search=true">13.6
                                        inch <i class="total">(2)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2215.3+inch%22%7d&amp;search=true">15.3
                                        inch <i class="total">(2)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2217.3+inch%22%7d&amp;search=true">17.3
                                        inch <i class="total">(2)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2218+inch%22%7d&amp;search=true">18
                                        inch <i class="total">(2)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2224+inch%22%7d&amp;search=true">24
                                        inch <i class="total">(2)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2213.4+inch%22%7d&amp;search=true">13.4
                                        inch <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22kich-thuoc-man-hinh%22%3a%2217+inch%22%7d&amp;search=true">17
                                        inch <i class="total">(1)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">RAM <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="/laptop?filters=%7b%22ram%22%3a%228GB%22%7d&amp;search=true">8GB <i
                                            class="total">(130)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22ram%22%3a%2216GB%22%7d&amp;search=true">16GB <i
                                            class="total">(32)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22ram%22%3a%224GB%22%7d&amp;search=true">4GB <i
                                            class="total">(10)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22ram%22%3a%2232GB%22%7d&amp;search=true">32GB <i
                                            class="total">(6)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22ram%22%3a%228+GB%22%7d&amp;search=true">8 GB <i
                                            class="total">(1)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Card đồ hoạ rời <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22RTX+3050%22%7d&amp;search=true">RTX
                                        3050 <i class="total">(23)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22GTX+1650%22%7d&amp;search=true">GTX
                                        1650 <i class="total">(8)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22RTX+3050Ti%22%7d&amp;search=true">RTX
                                        3050Ti <i class="total">(7)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22RTX+3060%22%7d&amp;search=true">RTX
                                        3060 <i class="total">(2)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22RTX+4080%22%7d&amp;search=true">RTX
                                        4080 <i class="total">(2)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22AMD+Radeon+660M%22%7d&amp;search=true">AMD
                                        Radeon 660M <i class="total">(1)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22MX550%22%7d&amp;search=true">MX550
                                        <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22NVIDIA+GeForce+MX450%22%7d&amp;search=true">NVIDIA
                                        GeForce MX450 <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22NVIDIA+GeForce+MX550%22%7d&amp;search=true">NVIDIA
                                        GeForce MX550 <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22NVIDIA+GeForce+RTX+3050%22%7d&amp;search=true">NVIDIA
                                        GeForce RTX 3050 <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22NVIDIA+GeForce+RTX+3060%22%7d&amp;search=true">NVIDIA
                                        GeForce RTX 3060 <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22NVIDIA+GeForce+RTX+4050%22%7d&amp;search=true">NVIDIA
                                        GeForce RTX 4050 <i class="total">(1)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22card-do-hoa-roi%22%3a%22RX6600M%22%7d&amp;search=true">RX6600M
                                        <i class="total">(1)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="javascript:;">Ổ cứng mặc định <i class="fa fa-angle-down mt-1"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="/laptop?filters=%7b%22o-cung-mac-dinh%22%3a%22512GB%22%7d&amp;search=true">512GB
                                        <i class="total">(116)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22o-cung-mac-dinh%22%3a%22256GB%22%7d&amp;search=true">256GB
                                        <i class="total">(36)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22o-cung-mac-dinh%22%3a%221TB%22%7d&amp;search=true">1TB
                                        <i class="total">(6)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22o-cung-mac-dinh%22%3a%22128GB%22%7d&amp;search=true">128GB
                                        <i class="total">(4)</i></a></li>
                                <li><a href="/laptop?filters=%7b%22o-cung-mac-dinh%22%3a%222TB%22%7d&amp;search=true">2TB
                                        <i class="total">(2)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22o-cung-mac-dinh%22%3a%22512+GB+SSD+NVMe+PCIe+(C%c3%b3+th%e1%bb%83+th%c3%a1o+ra%2c+l%e1%ba%afp+thanh+kh%c3%a1c+t%e1%bb%91i+%c4%91a+1TB)%22%7d&amp;search=true">512
                                        GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB) <i
                                            class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22o-cung-mac-dinh%22%3a%22Gen4+512GB%22%7d&amp;search=true">Gen4
                                        512GB <i class="total">(1)</i></a></li>
                                <li><a
                                        href="/laptop?filters=%7b%22o-cung-mac-dinh%22%3a%22H%e1%bb%97+tr%e1%bb%a3+th%c3%aam+1+khe+c%e1%ba%afm+SSD+M.2+PCIe+m%e1%bb%9f+r%e1%bb%99ng+(n%c3%a2ng+c%e1%ba%a5p+t%e1%bb%91i+%c4%91a+1TB)%22%7d&amp;search=true">Hỗ
                                        trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1TB) <i
                                            class="total">(1)</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div class="facet">
                        <label>Sắp xếp <i class="fa fa-angle-down mt-1"></i></label>
                        <div class="sub">
                            <ul>
                                <li><a href="/laptop?filters=%7b%22sort%22%3a%2212%22%7d&amp;search=true"> Mặc định</a>
                                </li>
                                <li><a href="/laptop?filters=%7b%22sort%22%3a%221%22%7d&amp;search=true"> Sản phẩm mới -
                                        cũ</a></li>
                                <li><a href="/laptop?filters=%7b%22sort%22%3a%222%22%7d&amp;search=true"> Giá thấp đến
                                        cao</a></li>
                                <li><a href="/laptop?filters=%7b%22sort%22%3a%223%22%7d&amp;search=true"> Giá cao đến
                                        thấp</a></li>
                                <li><a href="/laptop?filters=%7b%22sort%22%3a%224%22%7d&amp;search=true"> Mới cập nhật</a>
                                </li>
                                <li><a href="/laptop?filters=%7b%22sort%22%3a%225%22%7d&amp;search=true"> Sản phẩm cũ</a>
                                </li>
                                <li><a href="/laptop?filters=%7b%22sort%22%3a%226%22%7d&amp;search=true"> Xem nhiều hôm
                                        nay</a></li>
                                <li><a href="/laptop?filters=%7b%22sort%22%3a%227%22%7d&amp;search=true"> Xem nhiều tuần
                                        này</a></li>
                                <li><a href="/laptop?filters=%7b%22sort%22%3a%228%22%7d&amp;search=true"> Xem nhiều tháng
                                        này</a></li>
                                <li><a href="/laptop?filters=%7b%22sort%22%3a%2210%22%7d&amp;search=true"> Xem nhiều năm
                                        nay</a></li>
                                <li><a href="/laptop?filters=%7b%22sort%22%3a%229%22%7d&amp;search=true"> Xem nhiều
                                        nhất</a></li>
                                <li><a href="/laptop?filters=%7b%22sort%22%3a%2211%22%7d&amp;search=true"> Kết quả tìm
                                        kiếm</a></li>
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
                                <option>Laptop</option>
                                <option value="/laptop/macbook">&nbsp; &nbsp; &nbsp; Apple</option>
                                <option value="/laptop/asus">&nbsp; &nbsp; &nbsp; ASUS</option>
                                <option value="/laptop/dell">&nbsp; &nbsp; &nbsp; Dell</option>
                                <option value="/laptop/hang-san-xuat/acer">&nbsp; &nbsp; &nbsp; Acer</option>
                                <option value="/laptop/msi">&nbsp; &nbsp; &nbsp; MSI</option>
                                <option value="/laptop/phan-loai-san-pham">&nbsp; &nbsp; &nbsp; Phân loại sản phẩm
                                </option>
                                <option value="/laptop/hang-san-xuat/lg">&nbsp; &nbsp; &nbsp; LG</option>
                                <option value="/laptop/huawei">&nbsp; &nbsp; &nbsp; Huawei</option>
                                <option value="/laptop/microsoft">&nbsp; &nbsp; &nbsp; Surface</option>
                                <option value="/laptop/lenovo">&nbsp; &nbsp; &nbsp; Lenovo</option>
                                <option value="/laptop/hp">&nbsp; &nbsp; &nbsp; HP</option>
                                <option value="/laptop/gigabyte">&nbsp; &nbsp; &nbsp; GIGABYTE</option>
                                <option value="/laptop/itel">&nbsp; &nbsp; &nbsp; Itel</option>
                                <option value="/laptop/hang-san-xuat/xiaomi">&nbsp; &nbsp; &nbsp; Xiaomi</option>
                                <option value="/laptop/masstel">&nbsp; &nbsp; &nbsp; Masstel</option>
                                <option value="/laptop/hang-san-xuat">&nbsp; &nbsp; &nbsp; Hãng sản xuất</option>
                            </select>
                        </div>


                        <div class="facet">
                            <label>Dòng CPU</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn Dòng CPU</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Core+i5%22%7d&amp;search=true">
                                    Core i5 (66)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Ryzen+5%22%7d&amp;search=true">
                                    Ryzen 5 (16)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Ryzen+7%22%7d&amp;search=true">
                                    Ryzen 7 (15)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Core+i3%22%7d&amp;search=true">
                                    Core i3 (14)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Core+i7%22%7d&amp;search=true">
                                    Core i7 (14)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Apple+M2%22%7d&amp;search=true">
                                    Apple M2 (5)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Apple+M1%22%7d&amp;search=true">
                                    Apple M1 (4)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Celeron%22%7d&amp;search=true">
                                    Celeron (3)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Apple+M1+8-core%22%7d&amp;search=true">
                                    Apple M1 8-core (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22M2%22%7d&amp;search=true">
                                    M2 (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Core+i9%22%7d&amp;search=true">
                                    Core i9 (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Intel+Core+i5+Tiger+Lake%22%7d&amp;search=true">
                                    Intel Core i5 Tiger Lake (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22M1+series%22%7d&amp;search=true">
                                    M1 series (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Pentium+Silver%22%7d&amp;search=true">
                                    Pentium Silver (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22dong-cpu%22%3a%22Ryzen+3%22%7d&amp;search=true">
                                    Ryzen 3 (1)</option>
                            </select>
                        </div>
                        <div class="facet">
                            <label>Thương hiệu</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn Thương hiệu</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%2245%22%7d&amp;search=true">
                                    HP (49)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%2249%22%7d&amp;search=true">
                                    Acer (26)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%225%22%7d&amp;search=true">
                                    Lenovo (19)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%22135%22%7d&amp;search=true">
                                    MSI (19)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%2248%22%7d&amp;search=true">
                                    Dell (16)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%229%22%7d&amp;search=true">
                                    LG (15)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%2211%22%7d&amp;search=true">
                                    Huawei (7)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%22202%22%7d&amp;search=true">
                                    Microsoft (3)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%22221%22%7d&amp;search=true">
                                    Gigabyte (3)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%22114%22%7d&amp;search=true">
                                    Itel (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%221%22%7d&amp;search=true">
                                    Apple (28)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%228%22%7d&amp;search=true">
                                    Asus (40)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22brand%22%3a%223%22%7d&amp;search=true">
                                    Xiaomi (2)</option>
                            </select>
                        </div>
                        <div class="facet">
                            <label>Giá</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn Giá</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22price%22%3a%22T100t%22%7d&amp;search=true">
                                    Trên 100 triệu (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22price%22%3a%223t-4t%22%7d&amp;search=true">
                                    3 đến 4 triệu (3)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22price%22%3a%225t-6t%22%7d&amp;search=true">
                                    5 đến 6 triệu (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22price%22%3a%226t-8t%22%7d&amp;search=true">
                                    6 đến 8 triệu (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22price%22%3a%228t-10t%22%7d&amp;search=true">
                                    8 đến 10 triệu (10)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22price%22%3a%2210t-12t%22%7d&amp;search=true">
                                    10 đến 12 triệu (11)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22price%22%3a%2212t-15t%22%7d&amp;search=true">
                                    12 đến 15 triệu (38)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22price%22%3a%2215t-20t%22%7d&amp;search=true">
                                    15 đến 20 triệu (71)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22price%22%3a%2220t-100tr%22%7d&amp;search=true">
                                    20 đến 100 triệu (88)</option>
                            </select>
                        </div>
                        <div class="facet">
                            <label>Loại sản phẩm</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn Loại sản phẩm</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22type%22%3a%2247%22%7d&amp;search=true">
                                    PC (5)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22type%22%3a%223%22%7d&amp;search=true">
                                    Laptop (226)</option>
                            </select>
                        </div>
                        <div class="facet">
                            <label>Độ phân giải</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn Độ phân giải</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%221920x1080%22%7d&amp;search=true">
                                    1920x1080 (64)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%221920+x+1080%22%7d&amp;search=true">
                                    1920 x 1080 (33)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%22Full+HD+(1920+x+1080)%22%7d&amp;search=true">
                                    Full HD (1920 x 1080) (13)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%221920+x+1200%22%7d&amp;search=true">
                                    1920 x 1200 (8)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%22Retina+(2560+x+1600)%22%7d&amp;search=true">
                                    Retina (2560 x 1600) (7)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%222560+x+1600%22%7d&amp;search=true">
                                    2560 x 1600 (5)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%222880x1800%22%7d&amp;search=true">
                                    2880x1800 (5)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%222560x1600%22%7d&amp;search=true">
                                    2560x1600 (4)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%223456+x+2234%22%7d&amp;search=true">
                                    3456 x 2234 (4)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%221366+x+768%22%7d&amp;search=true">
                                    1366 x 768 (3)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%221920x1200%22%7d&amp;search=true">
                                    1920x1200 (3)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%222880+x+1800%22%7d&amp;search=true">
                                    2880 x 1800 (3)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%223024+x+1964%22%7d&amp;search=true">
                                    3024 x 1964 (3)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%222560+x1600%22%7d&amp;search=true">
                                    2560 x1600 (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%222560x1440%22%7d&amp;search=true">
                                    2560x1440 (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%222736+x+1824+pixels%22%7d&amp;search=true">
                                    2736 x 1824 pixels (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%222880+x+1864%22%7d&amp;search=true">
                                    2880 x 1864 (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%224.5K+(4480x2520)%22%7d&amp;search=true">
                                    4.5K (4480x2520) (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%22Liquid+Retina+(2560+x+1664)%22%7d&amp;search=true">
                                    Liquid Retina (2560 x 1664) (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%221366x768%22%7d&amp;search=true">
                                    1366x768 (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%222160+x+1440%2c+185+PPI%22%7d&amp;search=true">
                                    2160 x 1440, 185 PPI (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%222160x1440%22%7d&amp;search=true">
                                    2160x1440 (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%222560+x+1440%22%7d&amp;search=true">
                                    2560 x 1440 (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%223456x2160%22%7d&amp;search=true">
                                    3456x2160 (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%22Aspect+ratio%3a+3%3a2%22%7d&amp;search=true">
                                    Aspect ratio: 3:2 (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%22FHD+(1920x1080)%22%7d&amp;search=true">
                                    FHD (1920x1080) (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%22HD+(1366+x+768)%22%7d&amp;search=true">
                                    HD (1366 x 768) (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%22QHD+(2160+x+1440)%22%7d&amp;search=true">
                                    QHD (2160 x 1440) (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%22Resolution%3a+2736+x+1824+(267+PPI)%22%7d&amp;search=true">
                                    Resolution: 2736 x 1824 (267 PPI) (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%22Screen%3a+12.3+inch+PixelSense%e2%84%a2+Display%22%7d&amp;search=true">
                                    Screen: 12.3 inch PixelSense™ Display (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%22Touch%3a+10+point+multi-touch%22%7d&amp;search=true">
                                    Touch: 10 point multi-touch (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%22sRGB+100%25%22%7d&amp;search=true">
                                    sRGB 100% (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22do-phan-giai%22%3a%22%c4%90%e1%bb%99+ph%c3%a2n+gi%e1%ba%a3i%22%7d&amp;search=true">
                                    Độ phân giải (1)</option>
                            </select>
                        </div>
                        <div class="facet">
                            <label>Kích thước màn hình</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn Kích thước màn hình</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2215.6+inch%22%7d&amp;search=true">
                                    15.6 inch (80)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2214+inch%22%7d&amp;search=true">
                                    14 inch (46)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2216+inch%22%7d&amp;search=true">
                                    16 inch (13)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2213.3+inch%22%7d&amp;search=true">
                                    13.3 inch (11)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2216.1+inch%22%7d&amp;search=true">
                                    16.1 inch (4)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2216.2+inch%22%7d&amp;search=true">
                                    16.2 inch (4)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2211.6+inch%22%7d&amp;search=true">
                                    11.6 inch (3)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2214.2+inch%22%7d&amp;search=true">
                                    14.2 inch (3)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2212.3+inch%22%7d&amp;search=true">
                                    12.3 inch (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2213.6+inch%22%7d&amp;search=true">
                                    13.6 inch (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2215.3+inch%22%7d&amp;search=true">
                                    15.3 inch (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2217.3+inch%22%7d&amp;search=true">
                                    17.3 inch (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2218+inch%22%7d&amp;search=true">
                                    18 inch (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2224+inch%22%7d&amp;search=true">
                                    24 inch (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2213.4+inch%22%7d&amp;search=true">
                                    13.4 inch (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22kich-thuoc-man-hinh%22%3a%2217+inch%22%7d&amp;search=true">
                                    17 inch (1)</option>
                            </select>
                        </div>
                        <div class="facet">
                            <label>RAM</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn RAM</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22ram%22%3a%228GB%22%7d&amp;search=true">
                                    8GB (130)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22ram%22%3a%2216GB%22%7d&amp;search=true">
                                    16GB (32)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22ram%22%3a%224GB%22%7d&amp;search=true">
                                    4GB (10)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22ram%22%3a%2232GB%22%7d&amp;search=true">
                                    32GB (6)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22ram%22%3a%228+GB%22%7d&amp;search=true">
                                    8 GB (1)</option>
                            </select>
                        </div>
                        <div class="facet">
                            <label>Card đồ hoạ rời</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn Card đồ hoạ rời</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22RTX+3050%22%7d&amp;search=true">
                                    RTX 3050 (23)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22GTX+1650%22%7d&amp;search=true">
                                    GTX 1650 (8)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22RTX+3050Ti%22%7d&amp;search=true">
                                    RTX 3050Ti (7)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22RTX+3060%22%7d&amp;search=true">
                                    RTX 3060 (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22RTX+4080%22%7d&amp;search=true">
                                    RTX 4080 (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22AMD+Radeon+660M%22%7d&amp;search=true">
                                    AMD Radeon 660M (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22MX550%22%7d&amp;search=true">
                                    MX550 (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22NVIDIA+GeForce+MX450%22%7d&amp;search=true">
                                    NVIDIA GeForce MX450 (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22NVIDIA+GeForce+MX550%22%7d&amp;search=true">
                                    NVIDIA GeForce MX550 (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22NVIDIA+GeForce+RTX+3050%22%7d&amp;search=true">
                                    NVIDIA GeForce RTX 3050 (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22NVIDIA+GeForce+RTX+3060%22%7d&amp;search=true">
                                    NVIDIA GeForce RTX 3060 (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22NVIDIA+GeForce+RTX+4050%22%7d&amp;search=true">
                                    NVIDIA GeForce RTX 4050 (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22card-do-hoa-roi%22%3a%22RX6600M%22%7d&amp;search=true">
                                    RX6600M (1)</option>
                            </select>
                        </div>
                        <div class="facet">
                            <label>Ổ cứng mặc định</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn Ổ cứng mặc định</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22o-cung-mac-dinh%22%3a%22512GB%22%7d&amp;search=true">
                                    512GB (116)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22o-cung-mac-dinh%22%3a%22256GB%22%7d&amp;search=true">
                                    256GB (36)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22o-cung-mac-dinh%22%3a%221TB%22%7d&amp;search=true">
                                    1TB (6)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22o-cung-mac-dinh%22%3a%22128GB%22%7d&amp;search=true">
                                    128GB (4)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22o-cung-mac-dinh%22%3a%222TB%22%7d&amp;search=true">
                                    2TB (2)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22o-cung-mac-dinh%22%3a%22512+GB+SSD+NVMe+PCIe+(C%c3%b3+th%e1%bb%83+th%c3%a1o+ra%2c+l%e1%ba%afp+thanh+kh%c3%a1c+t%e1%bb%91i+%c4%91a+1TB)%22%7d&amp;search=true">
                                    512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB) (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22o-cung-mac-dinh%22%3a%22Gen4+512GB%22%7d&amp;search=true">
                                    Gen4 512GB (1)</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22o-cung-mac-dinh%22%3a%22H%e1%bb%97+tr%e1%bb%a3+th%c3%aam+1+khe+c%e1%ba%afm+SSD+M.2+PCIe+m%e1%bb%9f+r%e1%bb%99ng+(n%c3%a2ng+c%e1%ba%a5p+t%e1%bb%91i+%c4%91a+1TB)%22%7d&amp;search=true">
                                    Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1TB) (1)</option>
                            </select>
                        </div>
                        <div class="facet">
                            <label>Sắp xếp</label>
                            <select onchange="window.location = this.value;">
                                <option>Chọn cách sắp xếp</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22sort%22%3a%2212%22%7d&amp;search=true">
                                    Mặc định</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22sort%22%3a%221%22%7d&amp;search=true">
                                    Sản phẩm mới - cũ</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22sort%22%3a%222%22%7d&amp;search=true">
                                    Giá thấp đến cao</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22sort%22%3a%223%22%7d&amp;search=true">
                                    Giá cao đến thấp</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22sort%22%3a%224%22%7d&amp;search=true">
                                    Mới cập nhật</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22sort%22%3a%225%22%7d&amp;search=true">
                                    Sản phẩm cũ</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22sort%22%3a%226%22%7d&amp;search=true">
                                    Xem nhiều hôm nay</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22sort%22%3a%227%22%7d&amp;search=true">
                                    Xem nhiều tuần này</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22sort%22%3a%228%22%7d&amp;search=true">
                                    Xem nhiều tháng này</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22sort%22%3a%2210%22%7d&amp;search=true">
                                    Xem nhiều năm nay</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22sort%22%3a%229%22%7d&amp;search=true">
                                    Xem nhiều nhất</option>
                                <option
                                    value="/laptop?gclid=EAIaIQobChMIlYS1-f2M-gIVCw1cCh0HjAzkEAEYASAAEgIT1vD_BwE&amp;filters=%7b%22sort%22%3a%2211%22%7d&amp;search=true">
                                    Kết quả tìm kiếm</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                <span class="bg-secondary pr-3">Products</span>
            </h5>
            <div class="row px-xl-5">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4 item-p bg-radius">
                            <div class="product-img position-relative overflow-hidden img-p">
                                <img class="img-fluid" src="{{ asset('assets/product/' . $product->image) }}"
                                    alt="{{ $product->name }}" />

                            </div>
                            <div class="text-center py-4 px-4 overflow-text">
                                <a class="h6 text-decoration-none text-truncate"
                                    href="{{ route('product-detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>{{ $product->selling_price }}VND</h5>
                                    <h6 class="text-muted ml-2">
                                        <del>{{ $product->discount_price }}VND</del>
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
