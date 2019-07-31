@extends('layouts.admin')
@section('title') Tiến độ dự án @endsection
@section('breadcrumb') Tiến độ dự án @endsection
@section('css')
    <link href="{{asset('admin/dist/css/pages/icon-page.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tiến độ dự án</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="scroll-sidebar">
                                <!-- Sidebar navigation-->
                                <nav class="sidebar-nav">
                                    <ul id="sidebarnav">
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.index')}}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a></li>
                                        <li class="nav-small-cap"></li>
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.tour_categories.index')}}" aria-expanded="false"><i class="icon-check text-success"></i><span class="hide-menu">Loại Tour</span></a></li>
                                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-check text-success"></i><span class="hide-menu">Tour</span></a>
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
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.service.index')}}" aria-expanded="false"><i class="icon-check text-success"></i><span class="hide-menu">Dịch vụ đi kèm</span></a></li>
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.icon')}}" aria-expanded="false"><i class="icon-check text-success"></i><span class="hide-menu">Icon</span></a></li>

                                        <li class="nav-small-cap"></li>
                                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-check text-success"></i><span class="hide-menu">Nhân viên</span></a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li><a href="{{route('admin.user.index')}}">Danh sách <i class="icon-envelope-open"></i></a></li>
                                            </ul>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.customer.index')}}" aria-expanded="false"><i class="icon-check text-success"></i><span class="hide-menu">Khách hàng</span></a></li>
                                        <li class="nav-small-cap"></li>
                                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-check text-success"></i><span class="hide-menu">Bài viết</span></a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li><a href="{{route('admin.post.create')}}">Đăng bài</a></li>
                                                <li><a href="{{route('admin.post.index')}}">Danh sách</a></li>
                                            </ul>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.categories.index')}}" aria-expanded="false"><i class="icon-check text-success"></i><span class="hide-menu">Loại bài viết</span></a></li>
                                        <li class="nav-small-cap"></li>
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.location.index')}}" aria-expanded="false"><i class="icon-check text-success"></i><span class="hide-menu">Địa điểm</span></a></li>
                                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-bar-chart-alt"></i><span class="hide-menu">Báo cáo</span></a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
