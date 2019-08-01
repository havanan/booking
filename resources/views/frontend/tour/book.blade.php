@extends('layouts.travel')
@section('title') {{$info['name']}} @endsection

@section('content')
    <div class="section grey sm">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div class="widget w600 shadow-sm">
                        <div class="header">
                            <div class=" text-center text-uppercase h4">
                                Thông tin liên hệ
                            </div>
                            <!-- /.title -->
                            <div class="text-center text-muted">
                                Vui lòng cung cấp đầy đủ thông tin để hoàn tất đặt tour
                            </div>
                        </div>
                        <!-- /.header -->
                        <form method="post" class="body">
                            @csrf
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Họ và tên<span class="text-danger">*</span>
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8">
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <!-- /.row -->
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Email<span class="text-danger">*</span>

                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8 wp-bw">
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <!-- /.row -->
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Điện thoại<span class="text-danger">*</span>
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8">
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <!-- /.row -->
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Địa chỉ<span class="text-danger">*</span>
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8">
                                    <input type="text" name="address" class="form-control" required>
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Người lớn<span class="text-danger">*</span>
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8">
                                    <input type="number" name="customer" class="form-control" required value="0" min="0">
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Trẻ em (5-9 tuổi)<span class="text-danger">*</span>
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8">
                                    <input type="text" name="children" class="form-control" required value="0" min="0">
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Trẻ em (dưới 5)<span class="text-danger">*</span>
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8">
                                    <input type="text" name="baby" class="form-control" required value="0" min="0">
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <!-- /.row -->
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Yêu cầu khác
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8">
                                   <textarea class="form-control" name="note"></textarea>
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <!-- /.row -->

                            <div class="row mt-3 mb-2">
                                <div class="col-12">
                                    <div class="small font-weight-bold text-uppercase mb-2">
                                        Ghi chú (<span class="text-danger">*</span>)
                                    </div>
                                    <!-- /.small font-weight-bold text-uppercase -->
                                    <div class="small text-muted">
                                        Chúng tôi cam kết bảo mật thông tin của quý khách.
                                    </div>
                                    <!-- /.small text-muted -->
                                </div>
                                <!-- /.col-12 -->
                            </div>
                            <div class="row mt-4">
                                <button type="submit" class="btn btn-success btn-block btn-lg round-1">
                                    Hoàn Tất Đặt Tour
                                </button>
                                <!-- /.btn btn-success btn-block -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /.body -->
                    </div>
                    <!-- /.widget -->

                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section -->
@endsection
