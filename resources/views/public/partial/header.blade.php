<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
                <a class="text-body mr-3" href=""><i class="fa fa-phone-alt text-primary mr-3"></i>+ 012 345
                    6789</a>
                <a class="text-body mr-3" href=""></a>
                <a class="text-body mr-3" href=""><i
                        class="fa fa-envelope text-primary mr-3"></i>info@example.com</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <div class="btn-group">
                    @if (session()->has('account'))
                        <div class="drop-down">
                            <a class="text-body drop-btn" href="#"><img
                                    src="{{ asset(session('account')->photo) }}" alt="Avatar"
                                    style="width: 25px; border-radius: 50%; margin-right: 10px;"> Welcome,
                                {{ session('account')->username }}</a>
                            <div class="dropdown-menu dropdown-menu-right drop-down-content">
                                <a href="{{ route('account.index') }}" class="profile-link">
                                    <i class="fal fa fa-user-circle"></i>
                                    <span>Profile</span>
                                </a>
                                <a href="javascript:void(0);" onclick="logout()" class="profile-link">
                                    <i class="fal fa fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                                <form action="{{ route('public.logout') }}" method="POST" id="logout-form"
                                    style="display: none;">
                                    @method('POST')
                                    @csrf
                                </form>
                            </div>
                        </div>
                </div>
            @else
                <a class="text-body" href="{{ route('public.login') }}">Login</a>
                @endif

            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-sm dropdown-toggle btn-lan" data-toggle="dropdown">
                    EN
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button">
                        FR
                    </button>
                    <button class="dropdown-item" type="button">
                        AR
                    </button>
                    <button class="dropdown-item" type="button">
                        RU
                    </button>
                </div>
            </div>
            <div class="btn-group-2">
                <a href="{{ route('account.favorite') }}" class="btn px-0 ml-2">
                    <i class="fas fa-heart text-white"></i>
                    <span class="badge text-white border border-white rounded-circle"
                        style="padding-bottom: 2px">{{ $favorite_count }}</span>
                </a>
                <a href="{{ route('cart.list') }}" class="btn px-0 ml-2">
                    <i class="fas fa-shopping-cart text-white"></i>
                    <span class="badge text-white border border-white rounded-circle"
                        style="padding-bottom: 2px">{{ Cart::getTotalQuantity() }}</span>
                </a>

                <button id="scan-button" class="btn px-0 ml-2">
                    <i class="fas fa-solid fa-qrcode text-white"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="row align-items-center py-3 px-xl-5 d-none d-lg-flex">
    <div class="col-lg-4">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('images/logoshop1.png') }}"
                style="  width: 50%;
        padding-right: 10px;
        object-fit: cover;" alt="double-n shop">
        </a>
    </div>
    <div class="col-lg-4 col-6 text-left input-search">
        <form action="{{ route('search') }}" method="GET">
            <div class="input-group ">
                <input type="text" name="slug" class="form-control bg-search" placeholder="Search for products" />
                <span class="input-group-text bg-transparent text-primary search-bar">
                    <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
    </div>
    <div class="col-lg-4 col-6 text-right right-search">
        <a class="itemCheckOrder" id="btnCheckOrder" href="{{ route('account.order') }}">
            <span><i class="icon fa fa-truck-fast"></i></span>
            <span class="text">Kiểm tra đơn hàng</span>
        </a>
        <a class="itemCart" href="{{ route('cart.list') }}">
            <i class="fas fa-light fa-cart-shopping"></i>
            <label>
                <i class="cart-total fas fa fa-comment"></i>
                <span class="cart-total cart-total-text">{{ Cart::getTotalQuantity() }}</span>
            </label>
        </a>
        <a class="itemCart" href="{{ route('account.favorite') }}">
            <i class="fas fa-light fa-heart"></i>
            <label>
                <i class="cart-total fas fa fa-comment"></i>
                <div id="favorite-count"></div>
                <span class="cart-total cart-total-text">{{ $favorite_count }}</span>
            </label>
        </a>
        <a class="itemCart" href="{{ route('account.favorite') }}">
            <i class="fa-solid fa-qrcode"></i>
        </a>
    </div>

</div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid mb-30 bg-menu-container">
    <div class="row px-xl-5 bg-dark bg-menu">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-category w-100" data-toggle="collapse"
                href="#navbar-vertical" style="height: 65px; padding: 0 30px">
                <h6 class="text-white m-0">
                    <i class="fa fa-bars mr-2"></i>Categories
                </h6>
                <i class="fa fa-angle-down text-white"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999">
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown dropright nav-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses
                            <i class="fa fa-angle-right float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="" class="dropdown-item">Men's Dresses</a>
                            <a href="" class="dropdown-item">Women's Dresses</a>
                            <a href="" class="dropdown-item">Baby's Dresses</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link">Shirts</a>
                    <a href="" class="nav-item nav-link">Jeans</a>
                    <a href="" class="nav-item nav-link">Swimwear</a>
                    <a href="" class="nav-item nav-link">Sleepwear</a>
                    <a href="" class="nav-item nav-link">Sportswear</a>
                    <a href="" class="nav-item nav-link">Jumpsuits</a>
                    <a href="" class="nav-item nav-link">Blazers</a>
                    <a href="" class="nav-item nav-link">Jackets</a>
                    <a href="" class="nav-item nav-link">Shoes</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="{{ route('home') }}" class="text-decoration-none d-block d-lg-none">
                    <img src="{{ asset('images/logoshop1.png') }}"
                        style="  width: 50%;padding-right: 10px;object-fit: cover;background-color:white;"
                        alt="double-n shop">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('home') }}"
                            class="nav-item nav-link{{ request()->is('/') ? ' active' : '' }}">Home</a>
                        <a href="{{ route('products') }}"
                            class="nav-item nav-link{{ request()->is('products*') ? ' active' : '' }}">Products</a>
                        <div class="nav-item dropdown{{ request()->is('cart.list', 'checkout') ? ' active' : '' }}">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages
                                <i class="fa fa-angle-down mt-1"></i>
                            </a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0 bg-drop">
                                <a href="{{ route('cart.list') }}"
                                    class="dropdown-item{{ request()->is('cart.list') ? ' active' : '' }}">Shopping
                                    Cart</a>
                                <a href="{{ route('checkout') }}"
                                    class="dropdown-item{{ request()->is('checkout') ? ' active' : '' }}">Checkout</a>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}"
                            class="nav-item nav-link{{ request()->is('contact') ? ' active' : '' }}">Contact</a>
                        <a href="{{ route('blogs') }}"
                            class="nav-item nav-link{{ request()->is('blogs') ? ' active' : '' }}">Blog</a>
                        <div class="nav-item">
                            <form action="{{ route('search') }}" method="GET">
                                <div class="input-group bg-search-1">
                                    <input type="text" name="slug" class="form-control bg-search"
                                        placeholder="Search for products" />
                                    <span class="input-group-text bg-transparent text-primary search-bar">
                                        <button class="btn-search" type="submit"><i
                                                class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
<script>
    function logout() {
        document.getElementById('logout-form').submit();
    }
</script>
