@extends('layouts.admin')
@section('title') Địa Diểm Du Lịch @endsection
@section('breadcrumb') Địa điểm du lịch @endsection
@section('js')
    <script src="{{asset('admin')}}/assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/data-table-init.js')}}"></script>
    <script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
    <script>
        var route_prefix = "{{ url(config('lfm.url_prefix')) }}";
        // $('.lfm').filemanager('image', {prefix: route_prefix});
        $('#upload-avatar').filemanager('image', {prefix: route_prefix});

    </script>
@endsection
@section('content')
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
                               <th class="text-center">Mã Địa Điểm</th>
                               <th>Tên</th>
                               <th class="text-center">Trạng thái</th>
                               <th class="text-center">IP</th>
                               <th class="text-center">Ngày tạo</th>
                               <th class="text-center">Tác vụ</th>
                           </tr>
                           </thead>
                           <tbody>
                           @if(count($data) > 0)
                               @foreach($data as $key => $item)
                                   <tr>
                                       <td class="text-center">{{$key +1}}</td>
                                       <td class="text-center">LC-{{$item->id}}</td>
                                       <td>
                                           @if($item->avatar != null)
                                               <img class="thumb-sm" src="{{asset('/').'/'.$item->avatar}}" >
                                           @endif
                                           <strong>{{$item->name}}</strong>
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
                                       <td class="text-center">{{$item->location}}</td>
                                       <td class="text-center">{{date('d/m/Y',strtotime($item->created_at))}}</td>
                                       <td class="text-center">
                                           <button class="btn btn-primary" data-toggle="modal" data-target="#edit-modal-{{$item->id}}"><i class="icon-pencil"></i></button>
                                           <button class="btn btn-danger"  data-toggle="modal" data-target="#responsive-modal-{{$item->id}}"><i class="icon-trash"></i></button>
                                           @include('admin.locations.delete_model',['title' =>$item->name,'id' => $item->id])
                                       </td>
                                       @include('admin.locations.edit_model',['title' =>$item->name,'data' => $item])
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
@include('admin.locations.create_model')
@endsection
