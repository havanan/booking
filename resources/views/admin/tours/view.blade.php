@extends('layouts.admin')
@section('title') Chi Tiết Bài Viết @endsection
@section('breadcrumb') Chi tiết bài viết @endsection
@section('css')

@endsection
@section('js')

@endsection
@section('content')
    <div class="form-material m-t-10">
        <div class="row">
            <div class="col-md-8 text-left pb-2">
                <a href="{{route('admin.tour.index')}}" class="btn btn-secondary"><i class="icon-arrow-left-circle"></i></a>
                <a href="{{route('admin.tour.create')}}" class="btn btn-info"><i class="icon-plus"></i></a>
                @if(Auth::user()->id == $info['author_id'] || Auth::user()->role == 1)
                    <a href="{{route('admin.tour.edit',$info['id'])}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                    <button class="btn btn-danger"  data-toggle="modal" data-target="#responsive-modal-{{$info['id']}}"><i class="icon-trash"></i></button>
                @else
                    <button class="btn btn-primary" disabled><i class="icon-pencil" title="Chỉ Admin hoặc tác giả mới thực hiện được tác vụ"></i></button>
                    <button class="btn btn-danger" disabled><i class="icon-trash" title="Chỉ Admin hoặc tác giả mới thực hiện được tác vụ"></i></button>
                @endif
            </div>
            @include('admin.posts.delete_model',['title' =>$info['name'],'id' => $info['id']])
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                <h3 class="card-title">{{$info['name']}}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img id="holder" class="avatar-post" @if($info['avatar'] != null) src="{{asset('/').'/'.$info['avatar']}}" @endif>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 ">
                               <h4><strong> {{$info['summary']}}</strong></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 content-body">
                                {!! $info['content'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Số lượt xem: <strong>{{number_format($info['view'])}}</strong></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Loại bài viết: <strong>{{$info->category->name}}</strong></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Địa điểm du lịch: <strong>{{$info->location->name}}</strong></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tác giả: <strong>{{$info->author->name}}</strong></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label text-left col-md-12">Trạng thái: <strong>{{$info->status == 1 ?  'Hiển thị' : 'Ẩn'}}</strong></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
