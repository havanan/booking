@extends('layouts.admin')
@section('title') Chi tiết Tour @endsection
@section('breadcrumb') Chi tiết tour @endsection
@section('css')

@endsection
@section('js')

@endsection
@section('content')
    <div class="form-material m-t-10">
        <div class="row">
            <div class="col-md-8 text-left pb-2">

                <a href="{{route('admin.tour.index')}}" class="btn btn-secondary"><i class="icon-arrow-left-circle"></i></a>
                <a href="{{route('admin.tour.edit',$info['id'])}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                @if(Auth::user()->role == 1)
                    <a href="{{route('admin.tour.create')}}" class="btn btn-info"><i class="icon-plus"></i></a>
                    <button class="btn btn-danger"  data-toggle="modal" data-target="#responsive-modal-{{$info['id']}}"><i class="icon-trash"></i></button>
                    @include('admin.tours.delete_model',['title' =>$info['name'],'id' => $info['id']])
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @include('layouts.components.notification')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <img id="holder" @if($info['avatar'] != null) src="{{asset('/').'/'.$info['avatar']}}" @endif>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <h3 class="card-title">{{$info['name']}}</h3>
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
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Giá: <strong>{{$info['price']}}</strong> vnđ</label>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Giá khuyến mại: <strong>{{$info['price_discount']}}</strong> vnđ</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Giá trẻ em (từ 5-9 tuổi): <strong>{{$info['price_children']}}</strong> vnđ</label>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label>Giá baby: <strong>{{$info['price_baby']}}</strong> vnđ</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <label>Ngày khởi hành: <strong>{{$info['start_date']}}</strong></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <label>Địa điểm khởi hành: <strong>{{$info['start_address']}}</strong></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <label>Thời gian tour: <strong>{{$info['time']}}</strong></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Loại tour:
                                    @if(count($categories_selected) > 0)
                                        @foreach($categories_selected as $key=> $item)
                                            <strong>{{$item->category->name}}</strong>
                                        @endforeach
                                    @endif
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Địa điểm du lịch: <strong>{{$info->location->name}}</strong></label>
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label text-left col-md-12">Trạng thái: <strong>{{$info->status == 1 ?  'Hiển thị' : 'Ẩn'}}</strong></label>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label class="control-label text-left">Phương tiện:
                                    <strong>{{isset($vehicle_seleced['car'])   ? 'Ô tô,' : ''}}</strong>
                                    <strong>{{isset($vehicle_seleced['plane'])   ? 'Máy bay,' : ''}}</strong>
                                    <strong>{{isset($vehicle_seleced['train'])   ? 'Tàu hỏa' : ''}}</strong>
                                </label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="control-label text-left">Dịch vụ đi kèm:
                                    <br>
                                    @if(count($services) > 0)
                                        @foreach($services as $item)
                                            <strong>
                                                @if(isset($services_seleced[$item->slug]))
                                                    <i class="fa {{$item->icon}}"></i> {{$item->name}}
                                                @endif
                                            </strong>
                                        @endforeach
                                    @endif
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
