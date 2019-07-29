<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span><img src="{{asset('admin/assets/images/logo-icon.png')}}" alt="elegant admin template"></span>
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
                    <li> <a class="waves-effect waves-dark" href="{{route('admin.tour_categories.index')}}" aria-expanded="false"><i class=" icon-directions"></i><span class="hide-menu">Loại Tour</span></a></li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-map"></i><span class="hide-menu">Tour</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('admin.tour.index')}}">Danh sách</a></li>
                            <li><a href="{{route('admin.price.index')}}">Bảng giá</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-compass"></i><span class="hide-menu">Booking</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('admin.booking.index')}}">Danh sách</a></li>
                        </ul>
                    </li>
                    <li> <a class="waves-effect waves-dark" href="{{route('admin.service.index')}}" aria-expanded="false"><i class=" icon-calculator"></i><span class="hide-menu">Dịch vụ đi kèm</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="{{route('admin.icon')}}" aria-expanded="false"><i class="ti-light-bulb"></i><span class="hide-menu">Icon</span></a></li>

                <li class="nav-small-cap"></li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-user"></i><span class="hide-menu">Nhân viên</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('admin.user.index')}}">Danh sách <i class="icon-envelope-open"></i></a></li>
                        </ul>
                    </li>
                    <li> <a class="waves-effect waves-dark" href="{{route('admin.customer.index')}}" aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Khách hàng</span></a></li>
                <li class="nav-small-cap"></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-notebook"></i><span class="hide-menu">Bài viết</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.post.create')}}">Đăng bài</a></li>
                        <li><a href="{{route('admin.post.index')}}">Danh sách</a></li>
                    </ul>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{route('admin.categories.index')}}" aria-expanded="false"><i class="icon-folder-alt"></i><span class="hide-menu">Loại bài viết</span></a></li>
                <li class="nav-small-cap"></li>
                    <li> <a class="waves-effect waves-dark" href="{{route('admin.location.index')}}" aria-expanded="false"><i class="icon-location-pin"></i><span class="hide-menu">Địa điểm</span></a></li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class=" ti-bar-chart-alt"></i><span class="hide-menu">Báo cáo</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('admin.report.index')}}">Tổng hợp</a></li>
                            <li><a href="{{route('admin.post.index')}}">Theo địa điểm</a></li>
                        </ul>
                    </li>
                <li class="nav-small-cap"></li>
                <li> <a class="waves-effect waves-dark" href="{{route('admin.tiendo')}}" aria-expanded="false"><i class="ti-target"></i><span class="hide-menu">Tiến độ job</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
