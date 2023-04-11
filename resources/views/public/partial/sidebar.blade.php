<div class="sidebar">
    <div class="ctn">
        <div class="header">
            <div class="logo">
                <a href="{{route('home')}}"><img src="{{asset('images/logoshop1.png')}}" alt="Hoàng Hà Mobile"></a>
            </div>

            <div class="info">
                <div class="avt" id="myAvatar">
                    <img
                        src="https://hoanghamobile.com/avatar/Uploads/Avatar/63128-ninhnguyen1239-638164809348787755.jpg">
                </div>

                <div class="summer">
                    <p><strong>Nguyễn Quang Ninh</strong></p>
                    <p class="change-avatar"><a href="javascript:;"
                            onclick="$('#avtImage').trigger('click'); return false;"><i class="fal fa fa-user"></i>
                            Thay đổi ảnh đại diện</a></p>
                    <input type="file" name="upfile" id="avtImage" accept="image/*" style="display: none;">
                </div>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="{{route('account.index')}}" class="actived"><i
                            class="fas fa fa-tachometer-alt"></i><span>Bảng điều
                            khiển</span></a></li>
                <li><a href="{{route('account.infor')}}"><i class="fal fa fa-user-circle"></i><span>Thông tin tài
                            khoản</span></a></li>
                <li><a href="{{route('account.order')}}"><i class="fal fa fa-box-open"></i><span>Đơn hàng của
                            bạn</span></a>
                </li>
                <li><a href="{{route('account.wishlist')}}"><i class="fal fa fa-heart"></i><span>Sản phẩm yêu
                            thích</span></a>
                </li>
                <li><a href="{{route('account.comment')}}"><i class="fal fa fa-comment"></i><span>Quản lý bình
                            luận</span></a>
                </li>
                <li><a href="{{route('account.review')}}"><i class="fal fa fa-edit"></i><span>Quản lý đánh
                            giá</span></a></li>
                <li><a href="javascript:document.getElementById('logoutForm').submit()"><i
                            class="fal fa fa-sign-out-alt"></i><span>Đăng xuất</span></a></li>
            </ul>
        </nav>
    </div>
</div>