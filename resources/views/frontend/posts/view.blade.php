@extends('layouts.travel')
@section('title')Trang chủ@endsection
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-3">
                            <aside class="sticky-sidebar">
                                <div class="widget sm mt-0">
                                    <div class="body">
                                        <div class="sidebar-widget">
                                            <div class="title">
                                                Chuyên Mục
                                            </div>
                                            <!-- /.title -->
                                            <ul class="list-items">
                                                <li class="list-items-item">
                                                    <a href="{{route('post.get_all_cat')}}">
                                                        <i class="fa fa-angle-right"></i>
                                                       Tất Cả
                                                    </a>
                                                </li>
                                                @if(!empty($category))
                                                    @foreach($category as $key => $item)
                                                        <li class="list-items-item">
                                                            <a href="{{route('post.get_by_cat',$key)}}">
                                                                <i class="fa fa-angle-right"></i>
                                                                {{$item}}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                        <!-- /.sidebar-widget -->
                                    </div>
                                    <!-- /.body -->
                                </div>
                                <!-- /.widget -->
                            </aside>
                        </div>
                        <div class="col-md-9">
                            <img src="{{asset('/').$info['avatar']}}" style="width: 100%;">
                            <div>
                                <i class="fa fa-user text-primary"> {{$info->author->name}}</i>
                                <i class="fa fa-calendar text-primary"> {{date('d/m/Y',strtotime($info['created_at']))}}</i>
                                <i class="fa fa-eye text-primary"> {{$info->view}}</i>
                                <i class="fa fa-location-arrow text-primary"> {{$info->location->name}}</i>

                            </div>
                            <h3 class="mb-4">{{$info['name']}}</h3>
                            {{$info['summary']}}
                            {!! $info['content'] !!}
                        </div>
                    </div>
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section -->
@endsection
