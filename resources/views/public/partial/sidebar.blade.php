<div class="sidebar">
    <div class="ctn">
        <div class="header">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('images/logoshop1.png') }}" alt="Hoàng Hà Mobile"></a>
            </div>

            <div class="info">
                <div class="avt" id="myAvatar">
                    <img src="{{ asset(session('account')->photo) }}" alt="{{ session('account')->username }}"
                        style="width: 100%">
                </div>

                <div class="summer">
                    <p><strong>{{ session('account')->username }}</strong></p>
                    <p class="change-avatar"><a href="javascript:;"
                            onclick="$('#avtImage').trigger('click'); return false;"><i class="fal fa fa-user"></i>
                            Change avatar</a></p>
                    <form id="update-avt-form" action="{{ route('account.update') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="file" name="image" id="avtImage" accept="image/*" style="display: none">
                        <input type="hidden" name="name" value="{{ session('account')->name }}">
                        <input type="hidden" name="username" value="{{ session('account')->username }}">
                        <input type="hidden" name="email" value="{{ session('account')->email }}">
                        <input type="hidden" name="password" value="{{ session('account')->password }}">
                        <input type="hidden" name="address" value="{{ session('account')->address }}">
                        <input type="hidden" name="district" value="{{ session('account')->district }}">
                        <input type="hidden" name="province" value="{{ session('account')->province }}">
                        <input type="hidden" name="phone_nummber" value="{{ session('account')->phone_number }}">
                    </form>
                </div>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('account.index') }}"
                        class="{{ request()->routeIs('account.index') ? 'actived' : '' }}"><i
                            class="fas fa fa-sliders"></i><span>Dashboard</span></a></li>
                <li><a href="{{ route('account.infor') }}"
                        class="{{ request()->routeIs('account.infor') ? 'actived' : '' }}"><i
                            class="fal fa fa-user-circle"></i><span>Account information</span></a></li>
                <li><a href="{{ route('account.order') }}"
                        class="{{ request()->routeIs('account.order') ? 'actived' : '' }}"><i
                            class="fal fa fa-box-open"></i><span>Your Order</span></a></li>
                <li><a href="{{ route('account.favorite') }}"
                        class="{{ request()->routeIs('account.favorite') ? 'actived' : '' }}"><i
                            class="fal fa fa-heart"></i><span>Favorite product</span></a></li>
                <li><a href="{{ route('account.review') }}"
                        class="{{ request()->routeIs('account.review') ? 'actived' : '' }}"><i
                            class="fal fa fa-edit"></i><span>Manage reviews</span></a></li>

                <li>
                    <a href="javascript:void(0);" onclick="logout()">
                        <i class="fal fa fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('public.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function logout() {
        document.getElementById('logout-form').submit();
    }
    $(document).ready(function() {
        $('#avtImage').change(function() {
            $('#update-avt-form').submit();
        });
    });
</script>
