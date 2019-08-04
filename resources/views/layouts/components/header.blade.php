<header>

    <nav class="navbar navbar-light navbar-expand-md py-md-2 fixed-top">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand">
                <img src="{{asset('/')}}assets/images/logo.svg" height="30" alt="logo" class="brand-logo"/> </a>
            <!-- /.navbar-brand -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <!-- /.navbar-toggler-icon -->
            </button>
            <!-- /.navbar-toggler -->
            <div class="navbar-collapse collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item  py-md-2">
                        <a href="{{route('home')}}" class="nav-link ">Trang chủ</a>
                        <!-- /.nav-link -->
                    </li>
                    <!-- /.nav-item py-md-2 -->
                    <li class="nav-item dropdown py-md-2">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Du lịch</a>
                        <!-- /.nav-link -->
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('tour.get_by_cat','tour-trong-nuoc')}}">Du lịch trong nước</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="{{route('tour.get_by_cat','tour-quoc-te')}}">Du lịch quốc tế</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="{{route('tour.get_by_cat','tour-gia-re')}}">Du lịch giá rẻ</a>
                        </div>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.nav-item py-md-2 -->
                    <li class="nav-item  py-md-2">
                        <a href="{{route('post.get_all_cat')}}" class="nav-link ">Blog</a>
                        <!-- /.nav-link -->
                    </li>
                    <!-- /.nav-item py-md-2 -->
                    <li class="nav-item  py-md-2">
                        <a href="{{route('contact-us')}}" class="nav-link ">Liên hệ</a>
                        <!-- /.nav-link -->
                    </li>
                    <!-- /.nav-item py-md-2 -->
                    {{--<li class="nav-item dropdown py-md-2">--}}
                        {{--<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Renee Turner--}}
                            {{--<img src="assets/images/users/img-8.jpg" alt="user profile img" class="user-profile-img"/></a>--}}
                        {{--<!-- /.nav-link -->--}}
                        {{--<div class="dropdown-menu">--}}
                            {{--<a class="dropdown-item" href="profile-edit.html">Sửa thông tin</a>--}}
                            {{--<!-- /.dropdown-item -->--}}
                            {{--<a class="dropdown-item" href="#">Đổi mật khẩu</a>--}}
                            {{--<!-- /.dropdown-item -->--}}
                            {{--<a class="dropdown-item" href="#">Đăng xuất</a>--}}
                            {{--<!-- /.dropdown-item -->--}}
                        {{--</div>--}}
                        {{--<!-- /.dropdown-menu -->--}}
                    {{--</li>--}}
                    <!-- /.nav-item py-md-2 -->
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /#navbarNav.navbar-collapse collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar navbar-dark bg-primary navbar-expand-md py-md-2 -->
</header>