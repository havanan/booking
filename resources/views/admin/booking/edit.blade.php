@extends('layouts.admin')
@section('title') Sửa Booking @endsection
@section('breadcrumb') Sửa booking @endsection
@section('css')

@endsection
@section('js')

@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body printableArea">
                <h3><b>
                        Booking -
                        @if($info['status'] == 1)
                            <span class="text-success">Đã kích hoạt</span>
                        @else
                            <span class="text-success">Đã kích hoạt</span>
                        @endif

                    </b>
                    <span class="pull-right">BK-{{$info['id']}}</span></h3>
                <hr>
                <div class="row">
                    <form method="post" action="{{route('admin.booking.update',$info['id'])}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="pull-left col-md-6">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger">{{$info->tour->name}}</b></h3>
                                            @if($info->tour->avatar != null)
                                                <img style="width: 100%" src="{{asset('/').'/'.$info->tour->avatar}}" >
                                            @endif
                                        </address>
                                    </div>
                                    <div class="pull-left text-left col-md-2">
                                        <address>
                                            <h3>Thông tin tour</h3>
                                            <p><b>Ngày đặt tour :</b><br> <i class="fa fa-calendar"></i> {{date('d/m/Y',strtotime($info['booking_date']))}}</p>

                                            <p><b>Địa điểm khởi hành :</b><br> <i class="fa fa-location-arrow"></i> {{$info->tour->start_address}}</p>
                                            <p><b>Ngày khởi hành :</b><br>
                                                <input type="date" name="start_date" value="{{date('Y-m-d',strtotime($info['start_date']))}}">
                                            </p>
                                            <p><b>Ghi chú :</b><br>
                                                <textarea name="note">
                                                    {{$info['note']}}
                                                </textarea>
                                            </p>
                                            <p><b>Trạng thái :</b><br>
                                                <input type="radio" name="status" value="1" > Kích hoạt
                                                <input type="radio" name="status" value="0" > Không kích hoạt
                                            </p>

                                        </address>
                                    </div>
                                    <div class="pull-right text-left col-md-4">
                                        <address>
                                            <h3>Thông tin khách hàng</h3>
                                            <h4 class="font-bold">{{$info->customer->name}}</h4>
                                            <p class="m-t-30"><b>Địa chỉ :</b> <i class="fa fa-location-arrow"></i> {{$info->customer->address}}</p>
                                            <p class="m-t-30"><b>Điện thoại :</b> <i class="fa fa-phone"></i> {{$info->customer->phone}}</p>
                                            <p class="m-t-30"><b>Email :</b> <i class="fa fa-envelope"></i> {{$info->customer->email}}</p>
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive m-t-40" style="clear: both;">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Sản phẩm</th>
                                            <th class="text-right">Số lượng</th>
                                            <th class="text-right">Giá tiền</th>
                                            <th class="text-right">Thành tiền</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Người lớn</td>
                                            <td class="text-right">
                                                <div class="row">
                                                    <div class="col-md-8"></div>
                                                    <input type="number" name="customer" value="{{$log['tour']['customer']}}" min="0" class="form-control col-md-4">
                                                </div>
                                            </td>
                                            <td class="text-right"> {{$log['tour']['price_discount']}} </td>
                                            <td class="text-right"> {{$log['tour']['customer'] * $log['tour']['price_discount']}} </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>Trẻ em (5-9 tuổi)</td>
                                            <td class="text-right">
                                                <div class="row">
                                                    <div class="col-md-8"></div>
                                                    <input type="number" name="children" value="{{$log['tour']['children']}}" min="0" class="form-control col-md-4">
                                                </div>
                                            </td>
                                            <td class="text-right"> {{$log['tour']['price_children']}} </td>
                                            <td class="text-right"> {{$log['tour']['children'] * $log['tour']['price_children']}} </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>Trẻ em (dưới 5 tuổi)</td>
                                            <td class="text-right">
                                                <div class="row">
                                                    <div class="col-md-8"></div>
                                                    <input type="number" name="baby" value="{{$log['tour']['baby']}}" min="0" class="form-control col-md-4">
                                                </div>
                                            </td>
                                            <td class="text-right"> {{$log['tour']['price_baby']}} </td>
                                            <td class="text-right"> {{$log['tour']['baby'] * $log['tour']['price_baby']}} </td>
                                        </tr>
                                        <?php $i = 4 ?>
                                        @if(!empty($log['service']))
                                            @foreach($log['service'] as $key => $item)
                                                <tr>
                                                    <td class="text-center">{{$i}}</td>
                                                    <td>{{$key}} </td>
                                                    <td class="text-right"> {{1}} </td>
                                                    <td class="text-right"> {{$item}}</td>
                                                    <td class="text-right"> {{$item}}</td>
                                                </tr>
                                                <?php $i ++ ?>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-12">
                        <hr>
                        <div class="text-right">
                            <a href="{{route('admin.booking.update',$info['id'])}}" class="btn btn-danger"> Cập nhật đơn hàng </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
