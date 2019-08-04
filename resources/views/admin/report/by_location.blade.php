@extends('layouts.admin')
@section('title') Báo Cáo Theo Địa Diểm Du Lịch @endsection
@section('breadcrumb') Báo cáo theo địa điểm du lịch @endsection
@section('js')
<script>
    var chart = c3.generate({
        bindto: '#income',
        data: {
            columns: <?php echo $dataTourLocation ?>,
            type: 'bar'
        },
        bar: {
            space: 0.2,
            // or
        },
        resize: true
    });
    var chart = c3.generate({
        bindto: '#post-bar',
        data: {
            columns: <?php echo $dataPostLocation ?>,
            type: 'bar'
        },
        bar: {
            space: 0.2,
            // or
        },
        resize: true
    });
    var chart = c3.generate({
        bindto: '#visitor',
        data: {
            columns: <?php echo $dataTourLocation ?>,

            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "Hiển thị theo %",
            width: 30,

        },

        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
    });
    var chart = c3.generate({
        bindto: '#post-donut',
        data: {
            columns: <?php echo $dataPostLocation ?>,

            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "Hiển thị theo %",
            width: 30,

        },

        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
    });
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
