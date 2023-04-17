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
                        <!-- <li class=""><a href="#"><i data-feather="align-justify"></i><span>Print
                                    Barcode</span></a></li>
                        <li class=""><a href="#"><i
                                    data-feather="minimize-2"></i><span>Import Products</span></a></li> -->
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Sales</h6>
                    <ul>
                        <li class=""><a href="{{ route('sales-list') }}"><i
                                    data-feather="shopping-cart"></i><span>Sales</span></a></li>
                        <li class=""><a href="{{ route('invoice-report') }}"><i
                                    data-feather="file-text"></i><span>Invoices</span></a></li>
                        <!-- <li class=""><a href="#"><i data-feather="copy"></i><span>Sales
                                    Return</span></a></li>
                        <li class=""><a href="#"><i
                                    data-feather="save"></i><span>Quotation</span></a></li>
                        <li class=""><a href="#"><i data-feather="hard-drive"></i><span>POS</a></li>
                        <li class="submenu">
                            <a class="" href="javascript:void(0);"><i
                                    data-feather="shuffle"></i><span>Transfer</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="#">Transfer
                                        List</a></li>
                                <li><a class="" href="#">Import
                                        Transfer </a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="submenu">
                            <a class="" href="javascript:void(0);"><i
                                    data-feather="corner-up-left"></i><span>Return</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="#">Sales
                                        Return</a></li>
                                <li><a class="" href="#">Purchase
                                        Return</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </li>
                <!-- <li class="submenu-open">
                    <h6 class="submenu-hdr">Purchases</h6>
                    <ul>
                        <li class=""><a href="#"><i
                                    data-feather="shopping-bag"></i><span>Purchases</span></a></li>
                        <li class=""><a href="#"><i
                                    data-feather="minimize-2"></i><span>Import Purchases</span></a></li>
                        <li class=""><a href="#"><i
                                    data-feather="file-minus"></i><span>Purchase Order</span></a></li>
                        <li class=""><a href="#"><i
                                    data-feather="refresh-cw"></i><span>Purchase Return</span></a></li>
                    </ul>
                </li> -->
                <!-- <li class="submenu-open">
                    <h6 class="submenu-hdr">Finance & Accounts</h6>
                    <ul>
                        <li class="submenu">
                            <a class="" href="javascript:void(0);"><i
                                    data-feather="file-text"></i><span>Expense</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="#">Expenses</a>
                                </li>
                                <li><a class="" href="#">Expense
                                        Category</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Peoples</h6>
                    <ul>
                        <li class=""><a href="{{ route('customer-list') }}"><i
                                    data-feather="user"></i><span>Customers</span></a></li>
                        <li class=""><a href="{{ route('supplier-list') }}"><i
                                    data-feather="users"></i><span>Suppliers</span></a></li>
                        <li class=""><a href="{{ route('user-list') }}"><i
                                    data-feather="user-check"></i><span>Users</span></a></li>
                        <!-- <li class=""><a href="#"><i
                                    data-feather="home"></i><span>Stores</span></a></li> -->
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Reports</h6>
                    <ul>
                        <li class=""><a href="{{ route('sales-report') }}"><i data-feather="bar-chart-2"></i><span>Sales
                                    Report</span></a></li>
                        <!-- <li class=""><a href="#"><i
                                    data-feather="pie-chart"></i><span>Purchase report</span></a></li>
                        <li class=""><a href="#"><i
                                    data-feather="credit-card"></i><span>Inventory Report</span></a></li> -->
                        <li class=""><a href="{{ route('invoice-report') }}"><i data-feather="file"></i><span>Invoice
                                    Report</span></a></li>
                        <!-- <li class=""><a href="#"><i
                                    data-feather="bar-chart"></i><span>Purchase Report</span></a></li>
                        <li class=""><a href="#"><i
                                    data-feather="database"></i><span>Supplier Report</span></a></li>
                        <li class=""><a href="#"><i
                                    data-feather="pie-chart"></i><span>Customer Report</span></a></li> -->
                    </ul>
                </li>
                <!-- <li class="submenu-open">
                    <h6 class="submenu-hdr">User Management</h6>
                    <ul>
                        <li class="submenu">
                            <a class="" href="javascript:void(0);"><i data-feather="users"></i><span>Manage
                                    Users</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="#">New
                                        User </a></li>
                                <li><a class="" href="#">Users
                                        List</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="submenu-open">
                    <h6 class="submenu-hdr">Pages</h6>
                    <ul>
                        <li class="submenu">
                            <a class="" href="javascript:void(0);"><i
                                    data-feather="shield"></i><span>Authentication</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="#">Log in</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Forgot Password</a></li>
                                <li><a href="#">Reset Password</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a class="" href="javascript:void(0);"><i data-feather="file-minus"></i><span>Error
                                    Pages</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="#">404
                                        Error </a></li>
                                <li><a class="" href="#">500
                                        Error </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a class="" href="javascript:void(0);"><i data-feather="map"></i><span>Places</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="#">Countries</a>
                                </li>
                                <li><a class="" href="#">States</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#"><i data-feather="file"></i><span>Blank Page</span> </a>
                        </li>
                        <li class="">
                            <a href="#"><i data-feather="pen-tool"></i><span>Components</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="submenu-open">
                    <h6 class="submenu-hdr">UI Interface</h6>
                    <ul>
                        <li class="submenu">
                            <a class="active subdrop" href="javascript:void(0);"><i
                                    data-feather="layers"></i><span>Elements</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="#">Sweet
                                        Alerts</a></li>
                                <li><a class="" href="#">Tooltip</a>
                                </li>
                                <li><a class="" href="#">Popover</a>
                                </li>
                                <li><a class="" href="#">Ribbon</a>
                                </li>
                                <li><a class="active" href="#">Clipboard</a>
                                </li>
                                <li><a class="" href="#">Drag
                                        & Drop</a></li>
                                <li><a class="" href="#">Range
                                        Slider</a></li>
                                <li><a class="" href="#">Rating</a>
                                </li>
                                <li><a class="" href="#">Toastr</a>
                                </li>
                                <li><a class="" href="#">Text
                                        Editor</a></li>
                                <li><a class="" href="#">Counter</a>
                                </li>
                                <li><a class="" href="#">Scrollbar</a>
                                </li>
                                <li><a class="" href="#">Spinner</a>
                                </li>
                                <li><a class="" href="#">Notification</a>
                                </li>
                                <li><a class="" href="#">Lightbox</a>
                                </li>
                                <li><a class="" href="#">Sticky
                                        Note</a></li>
                                <li><a class="" href="#">Timeline</a>
                                </li>
                                <li><a class="" href="#">Form
                                        Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a class="" href="javascript:void(0);"><i
                                    data-feather="bar-chart-2"></i><span>Charts</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="#chart-apex">Apex
                                        Charts</a></li>
                                <li><a class="" href="#chart-js">Chart
                                        Js</a></li>
                                <li><a class="" href="#chart-morris">Morris
                                        Charts</a></li>
                                <li><a class="" href="#chart-flot">Flot
                                        Charts</a></li>
                                <li><a class="" href="#chart-peity">Peity
                                        Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a class="" href="javascript:void(0);"><i
                                    data-feather="database"></i><span>Icons</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="#">Fontawesome
                                        Icons</a></li>
                                <li><a class="" href="#">Feather
                                        Icons</a></li>
                                <li><a class="" href="#">Ionic
                                        Icons</a></li>
                                <li><a class="" href="#">Material
                                        Icons</a></li>
                                <li><a class="" href="#">Pe7
                                        Icons</a></li>
                                <li><a class="" href="#">Simpleline
                                        Icons</a></li>
                                <li><a class="" href="#">Themify
                                        Icons</a></li>
                                <li><a class="" href="#">Weather
                                        Icons</a></li>
                                <li><a class="" href="#">Typicon
                                        Icons</a></li>
                                <li><a class="" href="#">Flag
                                        Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a class="" href="javascript:void(0);"><i data-feather="edit"></i><span>Forms</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="#">Basic
                                        Inputs </a></li>
                                <li><a class="" href="#">Input
                                        Groups </a></li>
                                <li><a class="" href="#">Horizontal
                                        Form </a></li>
                                <li><a class="" href="#">
                                        Vertical Form </a></li>
                                <li><a class="" href="#">Form
                                        Mask </a></li>
                                <li><a class="" href="#">Form
                                        Validation </a></li>
                                <li><a class="" href="#">Form
                                        Select2 </a></li>
                                <li><a class="" href="#">File
                                        Upload </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a class="" href="javascript:void(0);"><i
                                    data-feather="columns"></i><span>Tables</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="#">Basic
                                        Tables </a></li>
                                <li><a class="" href="#">Data
                                        Table </a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Settings</h6>
                    <ul>
                        <!-- <li class="submenu">
                            <a class="" href="javascript:void(0);"><i
                                    data-feather="settings"></i><span>Settings</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="#">General
                                        Settings</a></li>
                                <li><a class="" href="#">Email
                                        Settings</a></li>
                                <li><a class="" href="#">Payment
                                        Settings</a></li>
                                <li><a class="" href="#">Currency
                                        Settings</a></li>
                                <li><a class="" href="#">Group
                                        Permissions</a></li>
                                <li><a class="" href="#">Tax
                                        Rates</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="{{ route('signin') }}"><i data-feather="log-out"></i><span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>