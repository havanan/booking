<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span><img src="../admin/assets/images/logo-icon.png" alt="elegant admin template"></span>
        <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i class="mdi mdi-toggle-switch"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="{{route('admin.index')}}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="nav-small-cap"></li>
                    <li> <a class="waves-effect waves-dark" href="{{route('admin.tour_categories.index')}}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Loại Tour</span></a></li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Tour</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="app-email.html">Danh sách <i class="icon-envelope-open"></i></a></li>
                            <li><a href="app-email-detail.html">Bảng giá <i class="ti-layout-media-left-alt"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Booking</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="app-email.html">Danh sách <i class="icon-envelope-open"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="waves-effect waves-dark" href="{{route('admin.tour_categories.index')}}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dịch vụ đi kèm</span></a></li>
                <li class="nav-small-cap"></li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Nhân viên</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="app-email.html">Danh sách <i class="icon-envelope-open"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="waves-effect waves-dark" href="{{route('admin.tour_categories.index')}}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Khách hàng</span></a></li>
                <li class="nav-small-cap"></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Bài viết</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="app-email.html">Danh sách <i class="icon-envelope-open"></i></a></li>
                    </ul>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{route('admin.tour_categories.index')}}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Loại bài viết</span></a></li>
                <li class="nav-small-cap"></li>
                    <li> <a class="waves-effect waves-dark" href="{{route('admin.report.index')}}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Báo cáo</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>