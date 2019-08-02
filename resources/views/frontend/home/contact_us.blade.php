@extends('layouts.travel')
@section('title')Trang chủ @endsection
@section('content')
    <div class="page-hero overlay md">
        <img class="bg-parallax bg-parallax-neg" src="{{asset('assets/images/single_blog_imgs/image-03.jpg')}}" data-z-index="1" data-parallax='{"y": -250,  "scale": 1.15, "smoothness": 15}' alt="image alt"/>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 offset-md-2 col-gl-8 col-md-8 col-sm-12">
                    <h2 class="text-center">Contact us</h2>
                    <div class="mt-5">
                        Surprisingly, there is a very vocal faction of the design community that wants to see filler text banished to the original sources from whence it came. Perhaps not surprisingly, in an era of endless quibbling, there is an equally vocal contingent of designers leaping to defend the use of the time-honored tradition of greeking.
                    </div>
                    <!-- /.mt-5 -->
                    <div class="mt-5">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <h3>Message</h3>
                                <form action="#" method="post" class="mt-3">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Name</label>
                                                <!-- /.col-form-label -->
                                                <input id="name" type="text" class="form-control" placeholder="Enter your name"/>
                                                <!-- /.form-control -->
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col-lg-6 col-md-6 -->
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="email-address" class="col-form-label">Email</label>
                                                <!-- /.col-form-label -->
                                                <input id="email-address" type="text" class="form-control" placeholder="Enter your email addess"/>
                                                <!-- /.form-control -->
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col-lg-6 col-md-6 -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="message-input" class="col-form-label">Message</label>
                                                <!-- /.col-form-label -->
                                                <textarea id="message-input" class="form-control" placeholder="write your message content"></textarea>
                                            </div>
                                            <!-- /.form-group -->
                                            <input class="mt-3 btn btn-primary" type="submit" value="Send Your Message"/>
                                            <!-- /.btn btn-primary -->
                                        </div>
                                        <!-- /.col-12 -->
                                    </div>
                                    <!-- /.row -->
                                </form>
                            </div>
                            <!-- /.col-lg-9 col-md-9 col-sm-12 -->
                            <div class="col-lg-3 col-md-3 col-sm-12 mt-3 mt-lg-0 mt-md-0">
                                <h3>Address</h3>
                                <address>
                                    <strong>Travelgo, Inc.</strong><br> 1355 Market St, Suite 900<br> New York, CA 94103<br> (397)-220-1852
                                </address>

                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.mt-3 -->
                </div>
                <!-- /.offset-lg-2 offset-md-2 col-gl-8 col-md-8 col-sm-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section -->
    <div id="map-canvas" style="height: 400px;"></div>
    <!-- /#address-map -->
@endsection
