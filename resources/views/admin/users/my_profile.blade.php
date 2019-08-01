@extends('layouts.admin')
@section('title') Trang Cá Nhân @endsection
@section('breadcrumb') Trang cá nhân @endsection
@section('js')
    <script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
    <script>
        var route_prefix = "{{ url(config('lfm.url_prefix')) }}";
        $('#lfm').filemanager('image', {prefix: route_prefix});
    </script>
@endsection
@section('content')
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                @include('layouts.components.notification')
                <div class="card-body">
                    <center class="m-t-30"> <img src="{{Auth::user()->avatar ? Auth::user()->avatar : asset('admin/assets/images/users/1.jpg')}}" class="img-circle" width="150" />
                        <h4 class="card-title m-t-10">{{Auth::user()->name}}</h4>
                        <h6 class="card-subtitle">{{Auth::user()->role == 1 ? 'Admin' : 'Nhân viên'}}</h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr> </div>
                <div class="card-body"> <small class="text-muted">Email address </small>
                    <h6><a href="http://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cca4ada2a2adaba3baa9be8caba1ada5a0e2afa3a1">[{{Auth::user()->email}}]</a></h6> <small class="text-muted p-t-30 db">Phone</small>
                    <h6>{{Auth::user()->phone}}</h6> <small class="text-muted p-t-30 db">Address</small>
                    <h6>{{Auth::user()->address}}</h6>
                    <div class="map-box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div> <small class="text-muted p-t-30 db">Social Profile</small>
                    <br/>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Đổi mật khẩu</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#update-avatar" role="tab">Đổi Avatar</a> </li>

                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!--second tab-->
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-xs-6 b-r"> <strong>Tên đầy đủ</strong>
                                    <br>
                                    <p class="text-muted">{{Auth::user()->name}}</p>
                                </div>
                                <div class="col-md-12 col-xs-6 b-r"> <strong>Điện thoại</strong>
                                    <br>
                                    <p class="text-muted">{{Auth::user()->phone}}</p>
                                </div>
                                <div class="col-md-12 col-xs-6 b-r"> <strong>Email</strong>
                                    <br>
                                    <p class="text-muted"><a href="#" class="__cf_email__" data-cfemail="d2b8bdbabcb3a6bab3bc92b3b6bfbbbcfcb1bdbf">{{Auth::user()->email}}</a></p>
                                </div>
                                <div class="col-md-12 col-xs-6"> <strong>Địa chỉ</strong>
                                    <br>
                                    <p class="text-muted">{{Auth::user()->address}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-xs-6 b-r"> <strong>Sinh nhật</strong>
                                    <br>
                                    <p class="text-muted">{{Auth::user()->birthday}}</p>
                                </div>
                                <div class="col-md-12 col-xs-6 b-r"> <strong>Trạng thái</strong>
                                    <br>
                                    <p class="text-muted">{{Auth::user()->status == 1 ? 'Hoạt động' : 'Vô hiệu hóa'}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right pb-2">
                                    <a href="{{route('admin.post.edit',Auth::user()->id)}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal form-material" method="post" action="{{route('admin.user.update_password')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Mật khẩu cũ</label>
                                    <div class="col-md-12">
                                        <input type="password"  class="form-control form-control-line" name="password">
                                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Mật khẩu mới</label>
                                    <div class="col-md-12">
                                        <input type="password"  class="form-control form-control-line" name="new_password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nhập lại mật khẩu mới</label>
                                    <div class="col-md-12">
                                        <input type="password"  class="form-control form-control-line" name="password_check">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Đổi mật khẩu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="update-avatar" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal form-material" method="post" action="{{route('admin.user.update_avatar')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <img id="holder">
                                            <br>
                                            <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-info" style="color: white">
                                            <i class="fa fa-picture-o"></i> Chọn ảnh bìa
                                        </a>
                                    </span>
                                            <input id="thumbnail" class="form-control file-upload" type="text" name="avatar">
                                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit">Cập nhật </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
@endsection
