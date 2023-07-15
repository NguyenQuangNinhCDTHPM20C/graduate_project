<div class="header">

    <div class="header-left active">
        <a href="{{ route('index') }}" class="logo logo-normal">
            <img src="{{ asset('images/logoshop1.png') }}" alt="Double-N shop">
        </a>
        <a href="{{ route('index') }}" class="logo logo-white">
            <img src="{{ asset('images/logoshop1.png') }}" alt="Double-N shop">
        </a>
        <a href="{{ route('index') }}" class="logo-small">
            <img src="{{ asset('images/logosmall.png') }}" alt="Double-N shop">
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
            <i data-feather="chevrons-left" class="feather-16"></i>
        </a>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <ul class="nav user-menu">

        <li class="nav-item nav-searchinputs">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form action="#">
                    <div class="searchinputs">
                        <input type="text" placeholder="Tìm kiếm..">
                        <div class="search-addon">
                            <span><i data-feather="search" class="feather-14"></i></span>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-info">
                    <span class="user-letter">
                        <img src="{{ asset(session('account')->photo) }}" alt="{{ session('account')->username }}">
                    </span>
                    <span class="user-detail">
                        <span class="user-name">{{ session('account')->username }}</span>
                        <span class="user-role">Quản Lý</span>
                    </span>
                </span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <hr class="m-0">
                    <a class="dropdown-item" href="{{ route('profile') }}">
                        <i class="me-2" data-feather="user"></i> Tài khoản</a>
                    <a class="dropdown-item" href="{{ route('setting') }}"><i class="me-2"
                            data-feather="settings"></i>Cài đặt</a>
                    <hr class="m-0">
                    <form action="{{ route('admin.logout') }}" method="POST" id="logout-form">
                        @method('POST')
                        @csrf
                        <button class="dropdown-item logout pb-0" type="submit"><img
                                src="{{ asset('images/log-out.svg') }}" class="me-2" alt="img">Đăng
                            xuất</button>
                    </form>
                </div>
            </div>
        </li>
    </ul>


    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route('profile') }}">Tài khoản</a>
            <a class="dropdown-item" href="{{ route('setting') }}">Cài đặt</a>
            <a class="dropdown-item" href="{{ route('admin.login') }}">Đăng xuất</a>
        </div>
    </div>


</div>
