@extends('layouts.admin')
@section('title') Địa Diểm Du Lịch @endsection
@section('breadcrumb') Địa điểm du lịch @endsection
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
                        <a href="{{route('admin.post.index')}}" class="btn btn-info"> <i class="fa fa-plus-circle"></i> Tạo mới</a>
                    </div>
                   @include('layouts.components.notification')
                   <div class="table-responsive m-t-40">
                       <table id="table-data" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                           <thead>
                           <tr>
                               <th class="text-center">Stt</th>
                               <th class="text-center">Mã bài viết</th>
                               <th>Tên</th>
                               <th class="text-center">Tác giả</th>
                               <th class="text-center">Địa danh</th>
                               <th class="text-center">Lượt xem</th>
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
                                       <td class="text-center">P-{{$item->id}}</td>
                                       <td>
                                           @if($item->avatar != null)
                                           <img class="thumb-sm" src="{{asset('/').'/'.$item->avatar}}" >
                                           @endif
                                           <strong>{{$item->name}}</strong>
                                       </td>
                                       <td class="text-center">{{$item->author->name}}</td>
                                       <td class="text-center">{{$item->location->name}}</td>
                                       <td class="text-center">{{number_format($item->view)}}</td>
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
                                           <a href="{{route('admin.post.show',$item['id'])}}" class="btn btn-info"><i class="icon-eye"></i></a>

                                           @if(Auth::user()->id == $item['author_id'] || Auth::user()->role == 1)
                                               <a href="{{route('admin.post.edit',$item['id'])}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                                               <button class="btn btn-danger"  data-toggle="modal" data-target="#responsive-modal-{{$item->id}}"><i class="icon-trash"></i></button>
                                           @else
                                               <button class="btn btn-primary" disabled><i class="icon-pencil" title="Chỉ Admin hoặc tác giả mới thực hiện được tác vụ"></i></button>
                                               <button class="btn btn-danger" disabled><i class="icon-trash" title="Chỉ Admin hoặc tác giả mới thực hiện được tác vụ"></i></button>
                                           @endif
                                           @include('admin.posts.delete_model',['title' =>$item->name,'id' => $item->id])
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
@include('admin.posts.create_model')
@endsection
