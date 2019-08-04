@extends('layouts.admin')
@section('title') Danh Sách Tour @endsection
@section('breadcrumb') Danh sách tour @endsection
@section('js')
    <script src="{{asset('admin')}}/assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/data-table-init.js')}}"></script>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
           <div class="card">
               <div class="card-body">
                    <div class="row">
                        <a href="{{route('admin.tour.create')}}" class="btn btn-info"> <i class="fa fa-plus-circle"></i> Tạo mới</a>
                    </div>
                   @include('layouts.components.notification')
                   <div class="table-responsive m-t-40">
                       <table id="table-data" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                           <thead>
                           <tr>
                               <th class="text-center">Stt</th>
                               <th class="text-center">Mã tour</th>
                               <th>Tên tour</th>
                               <th >Giá</th>
                               <th>Khách hàng</th>
                               <th>Người tạo</th>
                               <th class="text-center">Ngày tạo</th>
                               <th class="text-center">Trạng thái</th>
                               <th class="text-center">Tác vụ</th>
                           </tr>
                           </thead>
                           <tbody>
                           @if(count($data) > 0)
                               @foreach($data as $key => $item)
                                   <tr>
                                       <td class="text-center">{{$key +1}}</td>
                                       <td class="text-center">Tr-{{$item->tour_id}}</td>
                                       <td title="{{$item->tour->name}}">
                                           @if($item->tour->avatar != null)
                                           <img class="thumb-sm" src="{{asset('/').'/'.$item->tour->avatar}}" >
                                           @endif
                                           <strong>{{ $item->tour->name }}</strong>
                                       </td>
                                       <td>
                                           <p>Giá: {{number_format($item->total_price)}} vnđ</p>
                                       </td>
                                       <td>
                                           @if($item->customer != null)
                                               @if($item->customer->avatar != null)
                                                   <img class="thumb-sm" src="{{asset('/').'/'.$item->customer->avatar}}" >
                                               @endif
                                               <strong>{{ $item->customer->name }}</strong>
                                           @endif
                                       </td>
                                       <td>
                                           @if($item->author != null)
                                               @if($item->author->avatar != null)
                                                   <img class="thumb-sm" src="{{asset('/').'/'.$item->customer->avatar}}" >
                                               @endif
                                               <strong>{{ $item->author->name }}</strong>
                                           @endif
                                       </td>
                                       <td class="text-center">{{date('d/m/Y',strtotime($item->created_at))}}</td>
                                       <td class="text-center">
                                           @if($item->status == 1)
                                               <h4>
                                                   <span class="badge badge-success">Đã xác thực</span>
                                               </h4>
                                           @elseif($item->status == 2)
                                               <h4>
                                                   <span class="badge badge-danger">Đã Hủy</span>
                                               </h4>
                                           @else
                                               <h4>
                                                   <span class="badge badge-warning">Chưa xác thực</span>
                                               </h4>
                                           @endif
                                       </td>
                                       <td class="text-center">
                                           <a href="{{route('admin.booking.show',$item['id'])}}" class="btn btn-info"><i class="icon-eye"></i></a>
                                           {{--<a href="{{route('admin.booking.edit',$item['id'])}}" class="btn btn-primary"><i class="icon-pencil"></i></a>--}}
                                           @if($item['status'] == 1)
                                               <a href="{{route('admin.booking.change_status',[0,$item['id']])}}" class="btn btn-danger" title="Hủy kích hoạt tour"><i class="ti-unlink"></i></a>
                                           @else
                                               <a href="{{route('admin.booking.change_status',[1,$item['id']])}}" class="btn btn-success" title="Kích hoạt tour"><i class="icon-check"></i></a>
                                           @endif
                                       </td>
                                   </tr>
                               @endforeach
                           @endif
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
    </div>
@endsection
