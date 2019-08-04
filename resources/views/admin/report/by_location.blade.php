@extends('layouts.admin')
@section('title') Báo Cáo Theo Địa Diểm Du Lịch @endsection
@section('breadcrumb') Báo cáo theo địa điểm du lịch @endsection
@section('js')
    <script src="{{asset('js/c3-chart-init.js')}}"></script>
<script>
    makeBarchar('income',<?php echo $dataTourLocation ?>)
    makeBarchar('post-bar',<?php echo $dataPostLocation ?>)
    makeDonutChar('visitor',<?php echo $dataTourLocation ?>)
    makeDonutChar('post-donut',<?php echo $dataPostLocation ?>)
</script>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card-group">
                <!-- card -->
                <div class="card o-income">
                    <div class="card-body">
                        <div class="d-flex m-b-30 no-block">
                            <h4 class="card-title m-b-0 align-self-center">Tour Theo Địa Điểm Du Lịch</h4>
                        </div>
                        <div id="income" style="height:260px; width:100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-group">
                <!-- card -->
                <div class="card o-income">
                    <div class="card-body">
                        <div class="d-flex m-b-30 no-block">
                            <h4 class="card-title m-b-0 align-self-center"><i class="icon-location-pin"></i></h4>
                        </div>
                        <div id="visitor" style="height:260px; width:100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Post  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-8">
            <div class="card-group">
                <!-- card -->
                <div class="card o-income">
                    <div class="card-body">
                        <div class="d-flex m-b-30 no-block">
                            <h4 class="card-title m-b-0 align-self-center">Bài Viết Theo Địa Điểm Du Lịch</h4>
                        </div>
                        <div id="post-bar" style="height:260px; width:100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-group">
                <!-- card -->
                <div class="card o-income">
                    <div class="card-body">
                        <div class="d-flex m-b-30 no-block">
                            <h4 class="card-title m-b-0 align-self-center"><i class="icon-location-pin"></i></h4>
                        </div>
                        <div id="post-donut" style="height:260px; width:100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
@endsection
