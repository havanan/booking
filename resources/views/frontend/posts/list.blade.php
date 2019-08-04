@extends('layouts.travel')
@section('title')Trang chủ@endsection
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="offset-lg-1 offset-md-1 col-gl-10 col-md-10 col-sm-12">
                    <div class="row">

                        @if(!empty($data))
                            @foreach($data as $item)
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="blog-card" data-url="blog-single-page.html">
                                        <div class="post-img">
                                            <img src="{{asset('/').$item->avatar}}" alt="blog post img">
                                        </div>
                                        <!-- /.post-img -->
                                        <div class="post-title">
                                            {{$item->name}}
                                        </div>
                                        <!-- /.post-title -->
                                        <div class="post-short-description">
                                        </div>
                                        <!-- /.post-short-description -->
                                        <div class="post-info">
                                            <div class="post-date">
                                                {{date('d/m/Y',strtotime($item->created_at))}}
                                            </div>
                                            <!-- /.post-date -->
                                        </div>
                                        <!-- /.post-info -->
                                    </div>
                                    <!-- /.blog-card -->
                                </div>
                            @endforeach
                        @endif
                        <!-- /.col-lg-4 col-md-4 col-sm-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <nav aria-label="pagination">
                                @if(!empty($data))
                                    {{$data->links()}}
                                @endif
                            </nav>
                        </div>
                        <!-- /.col-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.offset-lg-1 offset-md-1 col-gl-10 col-md-10 col-sm-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.section -->
@endsection
