@extends('layouts.admin')
@section('title') Báo Cáo đoanh Thu  @endsection
@section('breadcrumb') Báo cáo doanh thu @endsection
@section('js')
    <script src="{{asset('js/c3-chart-init.js')}}"></script>
    <script>
        makeBarchar('income',<?php echo $dataTopPrice ?>)
        makeDonutChar('visitor',<?php echo $dataTopPrice ?>)

    </script>
@endsection
@section('content')
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card bg-success text-white text-center">
                <div class="card-body">
                    <small>Doanh Thu Ngày</small>
                    <h3>{{number_format($price_daily)}} VNĐ</h3>
                    <div id="sparkline11" class="m-t-10"></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card bg-info text-white text-center">
                <div class="card-body">
                    <small>Doanh Thu Tuần</small>
                    <h3>{{number_format($price_weekly)}} VNĐ</h3>
                    <div id="sparkline12" class="m-t-10"></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card bg-primary text-white text-center">
                <div class="card-body">
                    <small>Doanh Thu Tháng</small>
                    <h3>{{number_format($price_monthly)}} VNĐ</h3>
                    <div id="sparkline13" class="m-t-10"></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card bg-danger text-white text-center">
                <div class="card-body">
                    <small>Doanh Thu Năm</small>
                    <h3>{{number_format($price_yearly)}} VNĐ</h3>
                    <div id="sparkline14" class="m-t-10"></div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card-group">
                <!-- card -->
                <div class="card o-income">
                    <div class="card-body">
                        <div class="d-flex m-b-30 no-block">
                            <h4 class="card-title m-b-0 align-self-center">Top Tour Có Doanh Thu Tốt Nhất</h4>
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
@endsection
