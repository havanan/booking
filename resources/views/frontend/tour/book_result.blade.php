@extends('layouts.travel')
@section('title') Chi tiết đơn hàng @endsection

@section('content')
    <div class="section grey sm">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div class="widget w600 shadow-sm">
                        <div class="header">
                            <div class="text-center">
                                <svg id="successAnimation" class="animated" xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 70 70">
                                    <path id="successAnimationResult" fill="#D8D8D8" d="M35,60 C21.1928813,60 10,48.8071187 10,35 C10,21.1928813 21.1928813,10 35,10 C48.8071187,10 60,21.1928813 60,35 C60,48.8071187 48.8071187,60 35,60 Z M23.6332378,33.2260427 L22.3667622,34.7739573 L34.1433655,44.40936 L47.776114,27.6305926 L46.223886,26.3694074 L33.8566345,41.59064 L23.6332378,33.2260427 Z"/>
                                    <circle id="successAnimationCircle" cx="35" cy="35" r="24" stroke="#979797" stroke-width="2" stroke-linecap="round" fill="transparent"/>
                                    <polyline id="successAnimationCheck" stroke="#979797" stroke-width="2" points="23 34 34 43 47 27" fill="transparent"/>
                                </svg>
                            </div>
                            <div class=" text-center text-uppercase h4">
                                @if($booking['status'] == 2)
                                    Đặt Tour Thất Bại
                                @else
                                    Đặt Tour Thành Công
                                @endif
                            </div>
                            <!-- /.title -->
                            <div class="text-center text-muted">
                                @if($booking['status'] == 0)
                                    Đặt tour thành công, chúng tôi sẽ liên hệ xác nhận theo số điện thoại của bạn trong vài phút tới
                                @elseif($booking['status'] == 2)
                                    Tour của bạn đã bị hủy
                                @else
                                    Cám ơn quý khách đã lựa chọn và sử dụng dịch vụ của chúng tôi
                                @endif

                            </div>
                        </div>
                        <!-- /.header -->
                        <div class="body">
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Mã Booking
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8">
                                    BK-{{isset($booking['id']) ? $booking['id'] : ''}}
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <!-- /.row -->

                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Tour
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8 wp-bw">
                                    {{isset($booking->tour->name) ? $booking->tour->name : ''}}
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Tên Khách Hàng

                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8 wp-bw">
                                    {{isset($booking->customer->name) ? $booking->customer->name : ''}}
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <!-- /.row -->
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Ngày Khởi Hành
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8">
                                    {{date('d/m/Y',strtotime($booking['start_date']))}}
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <!-- /.row -->
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Ngày Đặt Tour
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8">
                                    {{date('d/m/Y',strtotime($booking['booking_date']))}}
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <!-- /.row -->
                            <div class="row mt-1 mb-2">
                                <div class="col-4 font-weight-bold">
                                    Trạng Thái
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-8">
                                    @if($booking['status'] == 0)
                                        <span class="btn btn-warning">Chưa xác nhận</span>
                                    @elseif($booking['status'] == 2)
                                            <span class="btn btn-danger">Đã hủy</span>
                                    @else
                                        <span class="btn btn-success">Đã xác nhận</span>
                                    @endif
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
                                <a href="{{route('home')}}" class="btn btn-success btn-block btn-lg round-1">
                                   Quay lại trang chủ
                                </a>
                                <!-- /.btn btn-success btn-block -->
                            </div>
                            <!-- /.row -->
                        </div>
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
@endsection
