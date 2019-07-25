<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Travego - @yield('title')</title>
    <!-- Fav icon tag -->
    <link rel="shortcut icon" href="http://qbgrow.com/favicon.ico" type="image/x-icon">
    <link rel="icon" href="http://qbgrow.com/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/bootstrap.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/animate.css/animate.css"/>
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/owl-carousel/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/owl-carousel/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/flag-icon-css/css/flag-icon.min.css"/>
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/flaticon/flaticon.css"/>
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/hover-effects/effects.min.css"/>
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/ion.rangeslider/css/ion.rangeSlider.css"/>
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/ion.rangeslider/css/ion.rangeSlider.skinFlat.css"/>
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/icheck/skins/square/aero.css"/>

    <!-- :::::-[ Travelgo - Travel and Tours listings HTML template StyleSheet ]-:::::: -->
    <link rel="stylesheet" href="{{asset('/')}}/assets/css/style.css"/>
    @yield('css')
</head>
<body>
    <!-- ::::::-[ START PAGE MAIN HEADER ]-:::::: -->
        @include('layouts.components.header')
    <!-- ::::::-[ END-OF PAGE MAIN HEADER ]-:::::: -->

    <!-- ::::::-[ START PAGE MAIN CONTENT ]-:::::: -->
    <main>
        @yield('content')
    <!-- START Login Modal -->
    <div id="login-modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-body">

                    <div class="login-form">
                        <h3 class="title">
                            Log in to continue
                        </h3>
                        <!-- /.title -->

                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Email Address"/>
                            <!-- /.form-control -->
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Password"/>
                            <!-- /.form-control -->
                        </div>
                        <!-- /.form-group -->

                        <div class="mt-4 btn btn-primary btn-block btn-lg">
                            Login
                        </div>
                        <!-- /.btn btn-primary -->

                        <div class="mt-3 text-center text-capitalize">
                            <a href="#">forgot password?</a>
                        </div>
                        <!-- /.mt-3 text-center text-capitalize -->


                        <hr data-title="or continue with" class="mt-4 mb-4"/>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class=" btn btn-outline-secondary no-round btn-block btn-lg">
                                        <img src="assets/icons/facebook-icon.svg" alt="google icon" class="icon mr-2"/> Facebook
                                    </div>
                                    <!-- /.btn btn-primary -->
                                </div>
                                <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2 mt-lg-0 mt-sm-0">
                                    <div class=" btn btn-outline-secondary no-round btn-block btn-lg d-flex align-items-center justify-content-center">
                                        <img src="assets/icons/google-pluse-icon.svg" alt="google icon" class="icon mr-2"/> Google
                                    </div>
                                    <!-- /.btn btn-primary -->
                                </div>
                                <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                            </div>
                            <!-- /.row -->

                        </div>

                        <!-- /.mt-2 -->
                        <div class="mt-3">
                            Don’t have an account? <a href="#"> Sign up</a>
                        </div>
                        <!-- /.mt-2 -->
                    </div>
                    <!-- /.login-form -->
                </div>
            </div>
        </div>
    </div>
    <!-- #login-modal .modal -->
    <!-- END-OF Login Modal -->

    <!-- START Register Modal -->
    <div id="register-modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-body">

                    <div class="register-form">

                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="First name"/>
                            <!-- /.form-control -->
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Last name"/>
                            <!-- /.form-control -->
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Enter your email address"/>
                            <!-- /.form-control -->
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Enter password"/>
                            <!-- /.form-control -->
                        </div>
                        <!-- /.form-group -->

                        <div class="mt-3">
                            By clicking Join now, you agree to the Travelgo
                            <a href="terms.html">Terms of Service</a>, <a href="privacy.html">Privacy Policy</a>.

                        </div>
                        <!-- /.mt-3 -->

                        <div class="mt-4 btn btn-secondary btn-block btn-lg">
                            Register
                        </div>
                        <!-- /.btn btn-primary -->


                        <hr data-title="or continue with" class="mt-4 mb-4"/>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class=" btn btn-outline-secondary no-round btn-block btn-lg">
                                        <img src="assets/icons/facebook-icon.svg" alt="google icon" class="icon mr-2"/> Facebook
                                    </div>
                                    <!-- /.btn btn-primary -->
                                </div>
                                <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class=" btn btn-outline-secondary no-round btn-block btn-lg">
                                        <img src="assets/icons/google-pluse-icon.svg" alt="google icon" class="icon mr-2"/> Google
                                    </div>
                                    <!-- /.btn btn-primary -->
                                </div>
                                <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                            </div>
                            <!-- /.row -->

                        </div>

                        <!-- /.mt-2 -->
                        <div class="mt-3">
                            Already have an Travelgo account? <a href="#">Log in</a>
                        </div>
                        <!-- /.mt-2 -->
                    </div>
                    <!-- /.login-form -->
                </div>
            </div>
        </div>
    </div>
    <!-- #register-modal .modal -->
    <!-- END-OF Register Modal -->

    <!-- START Register Modal -->
    <div id="reset-password-modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-body">

                    <div class="reset-password-form">
                        <h3 class="title">
                            Password Reset
                        </h3>
                        <!-- /.title -->

                        <p>Restore your forgotten password</p>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Email address"/>
                            <!-- /.form-control -->

                        </div>
                        <!-- /.form-group -->
                        <div class="mt-2 btn btn-secondary btn-block btn-lg">
                            ≈                                    Reset Password
                        </div>
                        <!-- /.btn btn-primary -->

                        <div class="mt-4">
                            <a href="#">Remember the password?</a>
                        </div>
                        <!-- /.mt-4 -->

                    </div>
                    <!-- /.login-form -->
                </div>
            </div>
        </div>
    </div>
    <!-- #reset-password-modal .modal -->
    <!-- END-OF Register Modal -->

</main>
    <!-- ::::::-[ END-OF PAGE MAIN CONTENT ]-:::::: -->
    <!-- ::::::-[ START PAGE FOOTER ]-:::::: -->
        @include('layouts.components.footer')
    <!-- ::::::-[ END-OF PAGE FOOTER ]-:::::: -->
    <!-- ::::::-[ Load Javascript Vendors ]-:::::: -->
    <script src="{{asset('/')}}/assets/vendors/jquery/jquery.3.3.1.js"></script>
    <script src="{{asset('/')}}/assets/vendors/popper.js/popperjs.min.js"></script>
    <script src="{{asset('/')}}/assets/vendors/bootstrap.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{asset('/')}}/assets/vendors/parallax/parallax-scroll.js"></script>
    <script src="{{asset('/')}}/assets/vendors/sticky/jquery.sticky-sidebar.js"></script>
    <script src="{{asset('/')}}/assets/vendors/sticky-kit/sticky-kit.js"></script>
    <script src="{{asset('/')}}/assets/vendors/ion.rangeslider/js/ion.rangeSlider.js"></script>
    <script src="{{asset('/')}}/assets/vendors/icheck/icheck.min.js"></script>
    <script src="{{asset('/')}}/assets/vendors/countdown/jquery.countdown.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <!-- ::::::-[ Travelgo - Travel and Tours listings HTML template Javascript ]-::::::   -->
    <script src="{{asset('/')}}/assets/js/main.js"></script>
    @yield('js')
</body>
</html>
