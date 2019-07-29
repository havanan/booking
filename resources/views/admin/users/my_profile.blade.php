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
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#responsive-modal">
                            <i class="fa fa-plus-circle"></i> Tạo mới
                        </button>
                    </div>
                    @include('layouts.components.notification')
                </div>
            </div>
        </div>
    </div>
@endsection
