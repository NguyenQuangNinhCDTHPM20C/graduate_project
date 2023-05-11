<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Main</h6>
                    <ul>
                        <li class="">
                            <a href="{{ route('index') }}"><i data-feather="grid"></i><span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i
                                    data-feather="smartphone"></i><span>Application</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="{{ route('chat') }}">Chat</a>
                                </li>
                                <li><a class="" href="{{ route('email') }}">Email</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Products</h6>
                    <ul>
                        <li class=""><a href="{{ route('product.list') }}"><i
                                    data-feather="box"></i><span>Products</span></a></li>
                        <li class=""><a href="{{ route('category.list') }}"><i
                                    data-feather="codepen"></i><span>Category</span></a></li>
                        <li class=""><a href="{{ route('brand.list') }}"><i
                                    data-feather="tag"></i><span>Brands</span></a></li>
                        <li class=""><a href="{{ route('subcategory.list') }}"><i data-feather="speaker"></i><span>Sub
                                    Category</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Sales</h6>
                    <ul>
                        <li class=""><a href="{{ route('sales-list') }}"><i
                                    data-feather="shopping-cart"></i><span>Sales</span></a></li>
                        <li class=""><a href="{{ route('invoice.list') }}"><i
                                    data-feather="file-text"></i><span>Invoices</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Peoples</h6>
                    <ul>
                        <li class=""><a href="{{ route('customer-list') }}"><i
                                    data-feather="user"></i><span>Customers</span></a></li>
                        <li class=""><a href="{{ route('supplier-list') }}"><i
                                    data-feather="users"></i><span>Suppliers</span></a></li>
                        <li class=""><a href="{{ route('user-list') }}"><i
                                    data-feather="user-check"></i><span>Users</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Reports</h6>
                    <ul>
                        <li class=""><a href="{{ route('sales-report') }}"><i data-feather="bar-chart-2"></i><span>Sales
                                    Report</span></a></li>
                        <li class=""><a href="{{ route('invoice-report') }}"><i data-feather="file"></i><span>Invoice
                                    Report</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Settings</h6>
                    <ul>
                        <li>
                            <a href="{{ route('admin.login') }}"><i data-feather="log-out"></i><span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>