@extends('layouts.admin')
@section('title') Dịch Vụ Đi Kèm @endsection
@section('breadcrumb') Dịch vụ @endsection
@section('js')
    <script src="{{asset('admin/assets/node_modules/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/data-table-init.js')}}"></script>
@endsection
@section('content')
    {{isset($status) ? $status : ''}}
    <div class="row">
        <div class="col-md-12">
           <div class="card">
               <div class="card-body">
                    <div class="row">
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#responsive-modal">
                            <i class="fa fa-plus-circle"></i> Tạo mới
                        </button>
                    </div>
                   @include('layouts.components.notification')
                   <div class="table-responsive m-t-40">
                       <table id="table-data" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                           <thead>
                           <tr>
                               <th class="text-center">Stt</th>
                               <th class="text-center">Mã dịch vụ</th>
                               <th class="text-center">Icon</th>
                               <th class="text-center">Tên dịch vụ</th>
                               <th class="text-center">Giá tiền</th>
                               <th class="text-center">Trạng thái</th>
                               <th class="text-center">Ngày tạo</th>
                               <th class="text-center">Tác vụ</th>
                           </tr>
                           </thead>
                           <tbody>
                           @if(count($data) > 0)
                               @foreach($data as $key => $item)
                                   <tr>
                                       <td class="text-center">{{$key +1}}</td>
                                       <td class="text-center">{{$item->id}}</td>
                                       <td class="text-center">{{$item->icon}}</td>
                                       <td><strong>{{$item->name}}</strong></td>
                                       <td class="text-center">
                                           <del>{{number_format($item->price)}}</del>
                                           <br>
                                           {{number_format($item->discount)}}
                                       </td>
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
                                       <td class="text-center">{{date('d/m/Y',strtotime($item->created_at))}}</td>
                                       <td class="text-center">
                                           <button class="btn btn-primary" data-toggle="modal" data-target="#edit-modal-{{$item->id}}"><i class="icon-pencil"></i></button>
                                           <button class="btn btn-danger"  data-toggle="modal" data-target="#responsive-modal-{{$item->id}}"><i class="icon-trash"></i></button>
                                           @include('admin.tour_categories.delete_model',['title' =>$item->name,'id' => $item->id])
                                       </td>
                                       @include('admin.tour_categories.edit_model',['title' =>$item->name,'data' => $item])
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
@include('admin.tour_categories.small_model')
@endsection
