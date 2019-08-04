@extends('layouts.travel')
@section('title') {{$info['name']}} @endsection

@section('content')
    <div class="section md">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-9 col-sm-12">
                    <div class="mt-2 mb-3">
                        @if($info['avatar'] != null)
                        <img src="{{asset('/').'/'.$info['avatar']}}" style="width: 100%">
                        @endif
                        <h2 class="mb-2">{{$info['name']}}</h2>
                        <p>{{$info->location->name}}</p>
                    </div>
                    <!-- /.mt-4 mb-3 -->
                    <h4 class="mt-4 mb-3">Thông Tin Tour</h4>
                    <div>
                        {!! $info['content'] !!}
                    </div>
                    <h4 class="mt-4 mb-3">Dịch Vụ Đi Kèm</h4>
                    <div class="row mt20">
                        @if(count($services) > 0)
                            @foreach($services as $item)
                                <div class="col-md-6">
                                    <div class="hotel-facilities"><i class="fa {{$item->icon}}"></i> {{$item->name}}</div>
                                    <!-- /.hotel-facilities -->
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- /.col-lg-7 col-md-9 col-sm-12 -->
                <div class="col-lg-5 col-md-3 col-sm-12">
                    <div class="sticky-sidebar">
                        <div class="widget">
                            <div class="body">
                                @if($info->price > 0 && $info->price_discount <= 0)
                                    <span class="h3 text-danger">{{number_format($info->price)}} VNĐ</span>
                                @elseif($info->price_discount > 0)
                                    <span class="h3 text-danger">{{number_format($info->price_discount)}} VNĐ</span>
                                @else
                                    <span class="h3 text-danger">Liên hệ</span>

                                @endif
                                <div class="mt-2 mb-2">
                                    @if($info['price'] <= 0)
                                    <del>{{number_format($info['price'])}} VNĐ</del>
                                    @endif
                                    <span class="review-star-rate ">
                                    <span class="rate full"><i class="fa fa-star"></i></span>
                                                        <!-- /.rate fa-star-o -->
                                    <span class="rate full"><i class="fa fa-star"></i></span>
                                                        <!-- /.rate fa-star-o -->
                                    <span class="rate full"><i class="fa fa-star"></i></span>
                                                        <!-- /.rate fa-star-o -->
                                    <span class="rate full"><i class="fa fa-star"></i></span>
                                                        <!-- /.rate fa-star-o -->
                                    <span class="rate full"><i class="fa fa-star"></i></span>
                                                        <!-- /.rate fa-star-o -->
                                    </span>
                                    <!-- /.review-starts-list  -->
                                </div>
                                    <div class="mt-2 mb-2">
                                        <span>Phương tiện: </span>
                                        <strong>{{isset($vehicle_seleced['car'])   ? 'Ô tô,' : ''}}</strong>
                                        <strong>{{isset($vehicle_seleced['plane'])   ? 'Máy bay,' : ''}}</strong>
                                        <strong>{{isset($vehicle_seleced['train'])   ? 'Tàu hỏa' : ''}}</strong>
                                    </div>
                                <hr data-title="Đặt Tour" class="mt-4 mb-4"/>
                                <a class="btn btn-lg btn-book-now btn-block text-white" href="{{route('tour.book',$info['slug'])}}">
                                   Đặt Ngay
                                </a>
                                <div class="hint-text mt-3 text-center">Nhanh chân lên số lượng có hạn</div>
                            </div>
                            <!-- /.body -->
                        </div>
                        <!-- /.widget -->

                        <div class="row ml-4 mr-5 pb-4">
                            <div class="col-md-4">
                                <div class="btn btn-outline-primary btn-block">
                                    <i class="fa fa-facebook mr-2"></i> Share
                                </div>
                                <!-- /.btn btn-outline-primary btn-lg -->
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4">
                                <div class="btn btn-outline-danger btn-block">
                                    <i class="fa fa-google-plus mr-2"></i> Share
                                </div>
                                <!-- /.btn btn-outline-primary btn-lg -->
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4">
                                <div class="btn btn-outline-primary btn-block">
                                    <i class="fa fa-twitter mr-2"></i> Share
                                </div>
                                <!-- /.btn btn-outline-primary btn-lg -->
                            </div>
                            <!-- /.col-md-4 -->
                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.sticky-sidebar -->
                </div>
                <!-- /.col-lg-5 col-md-3 col-sm-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section -->
@endsection
