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
                               <th>Tên</th>
                               <th >Giá</th>
                               <th class="text-center">Địa danh</th>
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
                                       <td class="text-center">Tr-{{$item->id}}</td>
                                       <td title="{{$item->name}}">
                                           @if($item->avatar != null)
                                           <img class="thumb-sm" src="{{asset('/').'/'.$item->avatar}}" >
                                           @endif
                                           <strong>{{ substr ($item->name,0,30) }}...</strong>
                                       </td>
                                       <td>
                                           <p>Giá: {{number_format($item->price)}} vnđ</p>
                                           {{--<p>Giá khuyến mại: {{number_format($item->price_discount)}} vnđ</p>--}}
                                           {{--<p>Giá trẻ em (từ 5-9 tuổi): {{number_format($item->price_children)}} vnđ</p>--}}
                                           {{--<p>Giá baby: {{number_format($item->price_baby)}} vnđ</p>--}}
                                       </td>
                                       <td class="text-center">{{$item->location->name}}</td>
                                       <td class="text-center">{{date('d/m/Y',strtotime($item->created_at))}}</td>
                                       <td class="text-center">
                                           @if($item->status == 1)
                                               <h4>
                                                   <span class="badge badge-success">Hiển thị</span>
                                               </h4>
                                           @else
                                               <h4>
                                                   <span class="badge badge-danger">Ẩn</span>
                                               </h4>
                                           @endif
                                       </td>
                                       <td class="text-center">
                                           <a href="{{route('admin.tour.show',$item['id'])}}" class="btn btn-info"><i class="icon-eye"></i></a>
                                           <a href="{{route('admin.tour.edit',$item['id'])}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                                           <button class="btn btn-danger"  data-toggle="modal" data-target="#responsive-modal-{{$item->id}}"><i class="icon-trash"></i></button>
                                           @include('admin.tours.delete_model',['title' =>$item->name,'id' => $item->id])
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
