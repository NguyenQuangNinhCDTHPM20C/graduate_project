<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Main</h6>
                    <ul>
                        <li class="{{ request()->routeIs('index') ? 'active' : '' }}">
                            <a href="{{ route('index') }}"><i data-feather="grid"></i><span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i
                                    data-feather="smartphone"></i><span>Application</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li class="{{ request()->routeIs('chat') ? 'active' : '' }}"><a class=""
                                        href="{{ route('chat') }}">Chat</a></li>
                                <li class="{{ request()->routeIs('email') ? 'active' : '' }}"><a class=""
                                        href="{{ route('email') }}">Email</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Products</h6>
                    <ul>
                        <li class="{{ request()->routeIs('product.list') ? 'active' : '' }}"><a
                                href="{{ route('product.list') }}"><i data-feather="box"></i><span>Products</span></a>
                        </li>
                        <li class="{{ request()->routeIs('category.list') ? 'active' : '' }}"><a
                                href="{{ route('category.list') }}"><i
                                    data-feather="codepen"></i><span>Category</span></a></li>
                        <li class="{{ request()->routeIs('brand.list') ? 'active' : '' }}"><a
                                href="{{ route('brand.list') }}"><i data-feather="tag"></i><span>Brands</span></a></li>
                        <li class="{{ request()->routeIs('subcategory.list') ? 'active' : '' }}"><a
                                href="{{ route('subcategory.list') }}"><i data-feather="speaker"></i><span>Sub
                                    Category</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Sales</h6>
                    <ul>
                        <li class="{{ request()->routeIs('sales-list') ? 'active' : '' }}"><a
                                href="{{ route('sales-list') }}"><i
                                    data-feather="shopping-cart"></i><span>Sales</span></a></li>
                        <li class="{{ request()->routeIs('invoice.list') ? 'active' : '' }}"><a
                                href="{{ route('invoice.list') }}"><i
                                    data-feather="file-text"></i><span>Invoices</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Peoples</h6>
                    <ul>
                        <li class="{{ request()->routeIs('customer-list') ? 'active' : '' }}"><a
                                href="{{ route('customer-list') }}"><i
                                    data-feather="user"></i><span>Customers</span></a></li>
                        <li class="{{ request()->routeIs('supplier-list') ? 'active' : '' }}"><a
                                href="{{ route('supplier-list') }}"><i
                                    data-feather="users"></i><span>Suppliers</span></a></li>
                        <li class="{{ request()->routeIs('user-list') ? 'active' : '' }}"><a
                                href="{{ route('user-list') }}"><i data-feather="user-check"></i><span>Users</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Reports</h6>
                    <ul>
                        <li class="{{ request()->routeIs('sales-report') ? 'active' : '' }}"><a
                                href="{{ route('sales-report') }}"><i data-feather="bar-chart-2"></i><span>Sales
                                    Report</span></a></li>
                        <li class="{{ request()->routeIs('invoice-report') ? 'active' : '' }}"><a
                                href="{{ route('invoice-report') }}"><i data-feather="file"></i><span>Invoice
                                    Report</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Blogs</h6>
                    <ul>
                        <li class="{{ request()->routeIs('blog.create') ? 'active' : '' }}"><a
                                href="{{ route('blog.create') }}"><i data-feather="bar-chart-2"></i><span>Add
                                    Blog</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Settings</h6>
                    <ul>
                        <li>
                            <form action="{{ route('admin.logout') }}" method="POST" id="logout-form">
                                @method('POST')
                                @csrf
                                <button class="dropdown-item logout pb-0" type="submit"><i
                                        data-feather="log-out"></i><span>Logout</span></button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
