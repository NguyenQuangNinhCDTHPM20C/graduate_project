<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <ul>
                        <li class="{{ request()->routeIs('index') ? 'active' : '' }}">
                            <a href="{{ route('index') }}"><i data-feather="grid"></i><span>Bảng điều khiển</span></a>
                        </li>
                        {{-- <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ request()->routeIs('chat') || request()->routeIs('email') ? 'active' : '' }}"><i
                                    data-feather="smartphone"></i><span>Ứng
                                    dụng</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="{{ request()->routeIs('chat') ? 'active' : '' }}"><a class=""
                                        href="{{ route('chat') }}">Chat</a></li>
                                <li class="{{ request()->routeIs('email') ? 'active' : '' }}"><a class=""
                                        href="{{ route('email') }}">Email</a></li>
                            </ul>
                        </li> --}}
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ request()->routeIs('product.list') || request()->routeIs('product.add') || request()->routeIs('product.edit') || request()->routeIs('product.detail') || request()->routeIs('color.list') || request()->routeIs('color.edit') || request()->routeIs('color.add') ? 'active' : '' }}"><i
                                    data-feather="box"></i><span>Quản lý
                                    sản phẩm</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="{{ request()->routeIs('product.list') ? 'active' : '' }}"><a class=""
                                        href="{{ route('product.list') }}">Danh sách sản phẩm</a></li>
                                <li class="{{ request()->routeIs('product.add') ? 'active' : '' }}"><a class=""
                                        href="{{ route('product.add') }}">Thêm sản phấm</a></li>
                                <li class="{{ request()->routeIs('color.list') ? 'active' : '' }}"><a class=""
                                        href="{{ route('color.list') }}">Danh sách màu sản phẩm</a></li>
                                <li class="{{ request()->routeIs('color.add') ? 'active' : '' }}"><a class=""
                                        href="{{ route('color.add') }}">Thêm màu sản phẩm</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ request()->routeIs('category.list') || request()->routeIs('category.add') || request()->routeIs('category.edit') ? 'active' : '' }}"><i
                                    data-feather="codepen"></i><span>Quản lý
                                    danh mục</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="{{ request()->routeIs('category.list') ? 'active' : '' }}"><a class=""
                                        href="{{ route('category.list') }}">Danh sách danh mục</a></li>
                                <li class="{{ request()->routeIs('category.add') ? 'active' : '' }}"><a class=""
                                        href="{{ route('category.add') }}">Thêm danh mục</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ request()->routeIs('subcategory.list') || request()->routeIs('subcategory.add') || request()->routeIs('subcategory.edit') ? 'active' : '' }}"><i
                                    data-feather="speaker"></i><span>Quản lý
                                    phụ mục</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="{{ request()->routeIs('subcategory.list') ? 'active' : '' }}"><a
                                        class="" href="{{ route('subcategory.list') }}">Danh sách phụ mục</a>
                                </li>
                                <li class="{{ request()->routeIs('subcategory.add') ? 'active' : '' }}"><a
                                        class="" href="{{ route('subcategory.add') }}">Thêm phụ mục</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ request()->routeIs('brand.list') || request()->routeIs('brand.add') || request()->routeIs('brand.edit') ? 'active' : '' }}"><i
                                    data-feather="tag"></i><span>Quản lý
                                    thương hiệu</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="{{ request()->routeIs('brand.list') ? 'active' : '' }}"><a class=""
                                        href="{{ route('brand.list') }}">Danh sách thương hiệu</a>
                                </li>
                                <li class="{{ request()->routeIs('brand.add') ? 'active' : '' }}"><a class=""
                                        href="{{ route('brand.add') }}">Thêm thương hiệu</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ request()->routeIs('invoice.list') || request()->routeIs('invoice.edit') ? 'active' : '' }}"><i
                                    data-feather="shopping-cart"></i><span>Quản
                                    lý bán hàng</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="{{ request()->routeIs('invoice.list') ? 'active' : '' }}"><a class=""
                                        href="{{ route('invoice.list') }}">Danh sách hóa đơn</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ request()->routeIs('user.list') || request()->routeIs('customer.list') ? 'active' : '' }}"><i
                                    data-feather="users"></i><span>Quản
                                    lý người dùng</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="{{ request()->routeIs('user.list') ? 'active' : '' }}"><a class=""
                                        href="{{ route('user.list') }}">Danh sách người dùng</a>
                                </li>
                                <li class="{{ request()->routeIs('customer.list') ? 'active' : '' }}"><a class=""
                                        href="{{ route('customer.list') }}">Danh sách khách hàng</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ request()->routeIs('import-invoice.list') || request()->routeIs('import-invoice.create_detail') || request()->routeIs('import-invoice.edit') ? 'active' : '' }}"><i
                                    data-feather="file"></i><span>Quản
                                    lý mua hàng</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="{{ request()->routeIs('import-invoice.list') ? 'active' : '' }}">
                                    <a class="" href="{{ route('import-invoice.list') }}">Danh sách hóa
                                        đơn</a>
                                </li>
                                <li class="{{ request()->routeIs('import-invoice.create_detail') ? 'active' : '' }}"><a
                                        class="" href="{{ route('import-invoice.create_detail') }}">Thêm hóa
                                        đơn</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ request()->routeIs('blog.index') || request()->routeIs('blog.create') ? 'active' : '' }}"><i
                                    data-feather="file-text"></i><span>Quản
                                    lý tin tức</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="{{ request()->routeIs('blog.index') ? 'active' : '' }}"><a class=""
                                        href="{{ route('blog.index') }}">Danh sách tin tức</a>
                                </li>
                                <li class="{{ request()->routeIs('blog.create') ? 'active' : '' }}"><a class=""
                                        href="{{ route('blog.create') }}">Thêm tin tức</a></li>
                            </ul>
                        </li>
                        <li class="{{ request()->routeIs('setting') ? 'active' : '' }}">
                            <a href="{{ route('setting') }}"><i data-feather="settings"></i><span>Cài đặt</span></a>
                        </li>
                        <li>
                            <form action="{{ route('admin.logout') }}" method="POST" id="logout-form">
                                @method('POST')
                                @csrf
                                <button class="dropdown-item logout pb-0" type="submit"><i
                                        data-feather="log-out"></i><span>Đăng xuất</span></button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
