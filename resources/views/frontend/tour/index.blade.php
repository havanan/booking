@extends('layouts.travel')
@section('title') {{$info['name']}} @endsection

@section('content')
    @include('frontend.home.search_box')
    <!-- /.page-hero -->
    <div class="section md">
        <div class="container">
            <div class="row">

                <!-- /.col-12 -->
            @include('frontend.tour.left')
            <!-- /.col-lg-3 col-md-4 col-sm-12 -->
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="row">
                        @if(count($data) > 0)
                            @foreach($data as $item)
                                <div class="col-12">
                                    <div class="hotel-list-card">
                                        <div class="row no-gutters">
                                            <div class="col-lg-3 col-md-12 col-sm-12">
                                                <div class="hotle-cover-img-box">
                                                    <div class="wish-btn">
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                    <!-- /.wish-btn -->
                                                    <a href="{{route('tour.view',$item->slug)}}">
                                                        <img src="{{asset('/').'/'.$item->avatar}}" alt="img alt" class="hotel-cover-img"/>
                                                    </a>
                                                </div>
                                                <!-- /.hotle-cover-img-box -->
                                            </div>
                                            <!-- /.col-lg-3 col-md-12 col-sm-12 -->
                                            <div class="col-lg-9 col-md-12 col-sm-12">
                                                <div class="p-3">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-12 ">
                                                            <div class="h5 hotel-name">
                                                                <a href="{{route('tour.view',$item->slug)}}">
                                                                    {{$item->name}}
                                                                </a>
                                                            </div>
                                                            <div class="hotel-location">
                                                                <i class="flaticon-map-marker mr-1 x-small-icon"></i> {{$item->location->name}}
                                                            </div>
                                                            <!-- /.hotel-location -->


                                                        </div>
                                                        <!-- /.col-lg-8 col-md-8 col-sm-12 -->
                                                        <div class="col-lg-4 col-md-4 col-sm-12 d-inline-flex justify-content-center align-items-center mt-3 mt-lg-0 mt-md-0">
                                                            <div>
                                                                <div class="small mb-2">
                                                                    <span class="h3">
                                                                         @if($item->price > 0 && $item->price_discount <= 0)
                                                                            {{number_format($item->price)}}
                                                                        @elseif($item->price_discount > 0)
                                                                            {{number_format($item->price_discount)}}
                                                                        @else
                                                                            <span class="text-danger">Liên hệ</span>

                                                                        @endif
                                                                    </span>
                                                                    <div>{{$item->time}}</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- /.col-lg-4 col-md-4 col-sm-12 -->
                                                    </div>
                                                    <!-- /.row -->
                                                    <!-- /.hotel-review-rate -->
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-12">
                                                            <div class="row gutters-2 mr-0 ml-0 mt-3 mt-lg-0 mt-md-0">
                                                                <?php
                                                                $slide = $item->slide;
                                                                ?>

                                                                @if($slide != null && count(json_decode($slide)) > 0)
                                                                    @foreach(json_decode($slide) as $value)
                                                                        <div class="col-lg-2 col-md-2 col-3">
                                                                            <div class="img-square">
                                                                                <img src="{{asset('/').'/'.$value}}" alt="img alt"/>
                                                                            </div>
                                                                            <!-- /.img-square -->
                                                                        </div>
                                                                    @endforeach
                                                                    @endif
                                                            </div>
                                                            <!-- /.row -->
                                                        </div>
                                                        <!-- /.col-lg-8 col-md-8 col-sm-12 -->
                                                        <div class="col-lg-4 col-md-4 col-sm-12 d-inline-flex align-items-center">
                                                            <a href="{{route('tour.book',$item->slug)}}" class="text-white btn btn-book-now btn-block mt-3 mt-lg-0 mt-md-0">
                                                                Đặt ngay
                                                            </a>
                                                            <!-- /.btn btn-booking btn-block -->
                                                        </div>
                                                        <!-- /.col-lg-4 col-md-4 col-sm-12 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                            </div>
                                            <!-- /.col-lg-3 col-md-12 col-sm-12 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.hotel-list-card -->
                                </div>
                                <!-- /.col-12 -->
                            @endforeach
                        @endif
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                            {{ $data->links() }}

                            {{--<nav aria-label="pagination">--}}
                                {{--<ul class="pagination">--}}
                                    {{--<li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
                                    {{--<!-- /.page-item -->--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                    {{--<!-- /.page-item -->--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                    {{--<!-- /.page-item -->--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
                                    {{--<!-- /.page-item -->--}}
                                {{--</ul>--}}
                                {{--<!-- /.pagination -->--}}
                            {{--</nav>--}}
                        </div>
                        <!-- /.col-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-lg-9 col-md-8 col-sm-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section -->
@endsection
