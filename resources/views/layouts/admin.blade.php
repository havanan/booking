<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin - @yield('title')</title>
    <!-- Fav icon tag -->
    <link rel="shortcut icon" href="http://qbgrow.com/favicon.ico" type="image/x-icon">
    <link rel="icon" href="http://qbgrow.com/favicon.ico" type="image/x-icon">

    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{asset('/admin')}}/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{asset('/admin')}}/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!--c3 plugins CSS -->
    <link href="{{asset('/admin')}}/assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('/admin')}}/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{asset('/admin')}}/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    @yield('css')
</head>
<body class="skin-blue fixed-layout lock-nav">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elegant admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
            @include('layouts.components.admin.header')

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
            @include('layouts.components.admin.left-sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">@yield('title')</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item active">@yield('breadcrumb')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            @yield('content')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 Elegent Admin by wrappixel.com
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('/admin')}}/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{asset('/admin')}}/assets/node_modules/popper/popper.min.js"></script>
    <script src="{{asset('/admin')}}/assets/node_modules/bootstrap//dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('/admin')}}/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="{{asset('/admin')}}/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{asset('/admin')}}/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('/admin')}}/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{asset('/admin')}}/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="{{asset('/admin')}}/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="{{asset('/admin')}}/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--c3 JavaScript -->
    <script src="{{asset('/admin')}}/assets/node_modules/d3/d3.min.js"></script>
    <script src="{{asset('/admin')}}/assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Popup message jquery -->
    <script src="{{asset('/admin')}}/assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    @yield('js')
</body>
</html>
