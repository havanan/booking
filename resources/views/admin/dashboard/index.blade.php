@extends('layouts.admin')
@section('title') Dashboard @endsection
@section('breadcrumb') @endsection
@section('content')
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="card-group">
        <!-- card -->
        <div class="card o-income">
            <div class="card-body">
                <div class="d-flex m-b-30 no-block">
                    <h4 class="card-title m-b-0 align-self-center">Daily Income</h4>
                    <div class="ml-auto">
                        <select class="custom-select border-0">
                            <option selected="">Today</option>
                            <option value="1">Tomorrow</option>
                        </select>
                    </div>
                </div>
                <div id="income" style="height:260px; width:100%;"></div>
                <ul class="list-inline m-t-30 text-center font-12">
                    <li><i class="fa fa-circle text-success"></i> Growth</li>
                    <li><i class="fa fa-circle text-info"></i> Net</li>
                </ul>
            </div>
        </div>
        <!-- card -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex m-b-30 no-block">
                    <h4 class="card-title m-b-0 align-self-center">Visitors</h4>
                    <div class="ml-auto">
                        <select class="custom-select border-0">
                            <option selected="">Today</option>
                            <option value="1">Tomorrow</option>
                        </select>
                    </div>
                </div>
                <div id="visitor" style="height:260px; width:100%;"></div>
                <ul class="list-inline m-t-30 text-center font-12">
                    <li><i class="fa fa-circle text-primary"></i> Tablet</li>
                    <li><i class="fa fa-circle text-danger"></i> Desktops</li>
                    <li><i class="fa fa-circle text-info"></i> Mobile</li>
                </ul>
            </div>
        </div>
        <!-- card -->
        <div class="card">
            <div class="p-20 p-t-25">
                <h4 class="card-title">Reports</h4>
            </div>
            <div class="d-flex no-block p-15 align-items-center">
                <div class="round round-info"><i class="icon-wallet font-16"></i></div>
                <div class="m-l-10 ">
                    <h3 class="m-b-0">$18090</h3>
                    <h6 class="text-muted font-light m-b-0">Your last year total Income</h6> </div>
            </div>
            <hr>
            <div class="d-flex no-block p-15 align-items-center">
                <div class="round round-primary"><i class="icon-umbrella font-16"></i></div>
                <div class="m-l-10">
                    <h3 class="m-b-0">18%</h3>
                    <h6 class="text-muted font-light m-b-0">Your site bounce rate</h6></div>
            </div>
            <hr>
            <div class="d-flex no-block p-15 m-b-15 align-items-center">
                <div class="round round-danger"><i class="icon-chart font-16"></i></div>
                <div class="m-l-10">
                    <h3 class="m-b-0">21090</h3>
                    <h6 class="text-muted font-light m-b-0">Your last year site visits</h6></div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Yearly Sales -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card oh">
                <div class="card-body">
                    <div class="d-flex m-b-30 align-items-center no-block">
                        <h5 class="card-title ">Yearly Sales</h5>
                        <div class="ml-auto">
                            <ul class="list-inline font-12">
                                <li><i class="fa fa-circle text-info"></i> Iphone</li>
                                <li><i class="fa fa-circle text-primary"></i> Ipad</li>
                            </ul>
                        </div>
                    </div>
                    <div id="morris-area-chart" style="height: 350px;"></div>
                </div>
                <div class="card-body bg-light">
                    <div class="row text-center m-b-20">
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h2 class="m-b-0 font-light">6000</h2><span class="text-muted">Total sale</span>
                        </div>
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h2 class="m-b-0 font-light">4000</h2><span class="text-muted">Iphone</span>
                        </div>
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h2 class="m-b-0 font-light">2000</h2><span class="text-muted">Ipad</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Today's Schedule</h5>
                    <h6 class="card-subtitle">check out your daily schedule</h6>
                    <div class="steamline m-t-40">
                        <div class="sl-item">
                            <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fa fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="img-circle" alt="user" src="../admin/assets/images/users/1.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">John Doe <span class="sl-date"> 5pm</span></div>
                                <div class="desc">Call today with gohn doe </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="img-circle" alt="user" src="../admin/assets/images/users/2.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="img-circle" alt="user" src="../admin/assets/images/users/3.jpg"> </div>
                            <div class="sl-right">
                                <div><a href="#">Tiger Sroff</a> <span class="sl-date">5 minutes ago</span></div>
                                <div class="desc">Approve meeting with tiger
                                    <br><a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
@endsection