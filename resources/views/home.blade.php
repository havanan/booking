@extends('layouts.travel')
@section('title')Trang chủ@endsection
@section('content')
    <div class="page-hero overlay overlay-blue no-overflow">
        <div class="overlay-text d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="h1">Nhập địa điểm bạn muốn đến </div>
                        <p>Du lịch 5 châu, không đâu rẻ bằng</p>
                        <div class="main-home-search">
                            <div class="search-icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <!-- /.search-icon -->
                            <input type="text" class="search-input" placeholder='Quốc gia, thành phố, địa điểm du lịch'/>
                            <!-- /.search-input -->
                            <div class="search-result-drop-down">
                                <div class="result-list">
                                    <div class="search-result-item">
                                        <div>
                                            <i class="flaticon-map-marker mr-2 small-icon"></i>
                                        </div>
                                        <div class="title">
                                            London (and vicinity), England, United Kingdom
                                        </div>
                                        <!-- /.title -->
                                    </div>
                                    <!-- /.search-result-item -->
                                    <div class="search-result-item">
                                        <div>
                                            <i class="flaticon-map-marker mr-2 small-icon"></i>
                                        </div>
                                        <div class="title">
                                            Londonderry (county), Northern Ireland, United Kingdom
                                        </div>
                                        <!-- /.title -->
                                    </div>
                                    <!-- /.search-result-item -->
                                    <div class="search-result-item">
                                        <div>
                                            <i class="flaticon-map-marker mr-2 small-icon"></i>
                                        </div>
                                        <div class="title">
                                            London, Kentucky, United States of America
                                        </div>
                                        <!-- /.title -->
                                    </div>
                                    <!-- /.search-result-item -->
                                    <div class="search-result-item">
                                        <div>
                                            <i class="flaticon-sleeping-bed-silhouette mr-2 small-icon"></i>
                                        </div>
                                        <div class="title">
                                            Londonderry, New Hampshire, United States of America
                                        </div>
                                        <!-- /.title -->
                                    </div>
                                    <!-- /.search-result-item -->
                                    <div class="search-result-item">
                                        <div>
                                            <i class="flaticon-traveler-with-a-suitcase mr-2 small-icon"></i>
                                        </div>
                                        <div class="title">
                                            London (and vicinity), England, United Kingdom
                                        </div>
                                        <!-- /.title -->
                                    </div>
                                    <!-- /.search-result-item -->
                                    <div class="search-result-item">
                                        <div>
                                            <i class="flaticon-traveler-with-a-suitcase mr-2 small-icon"></i>
                                        </div>
                                        <div class="title">
                                            London (and vicinity), England, United Kingdom
                                        </div>
                                        <!-- /.title -->
                                    </div>
                                    <!-- /.search-result-item -->
                                    <div class="search-result-item">
                                        <div>
                                            <i class="flaticon-airplane-flight mr-2 small-icon"></i>
                                        </div>
                                        <div class="title">
                                            London (and vicinity), England, United Kingdom
                                        </div>
                                        <!-- /.title -->
                                    </div>
                                    <!-- /.search-result-item -->
                                </div>
                                <!-- /.result-list -->
                            </div>
                            <!-- /.search-result-drop-down -->
                        </div>
                        <!-- /.main-home-search -->
                    </div>
                    <!-- /.col-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.overlay-text -->
        <div class="parallax-holder">
            <img class="bg-parallax bg-parallax-neg" src="assets/images/page_hero/homepage.jpg" data-z-index="1" data-parallax='{"y": -250,  "scale": 1.15, "smoothness": 15}' alt="image alt"/>
        </div>
        <!-- /.parallax-holder -->
    </div>
    <!-- /.page-hero -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-end justify-content-between">
                    <div class="flex-1">
                        <h3>Du lịch giá rẻ</h3>
                        <div>Nhũng điểm du lịch giá tốt nhất trong tháng 7</div>
                    </div>
                    <div class="text-right">
                        <a href="#">Xem thêm</a>
                    </div>
                    <!-- /.float-right -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel list-carousel">
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/top_desitination/img-1.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Paris, France
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                    Price start from $682 <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/top_desitination/img-7.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Bali, Indonesia
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                    Price start from $326 <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/top_desitination/img-3.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Savannah
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                    Price start from $674 <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/top_desitination/img-4.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Venice, Italy
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                    Price start from $681 <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/top_desitination/img-6.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Tokyo, Japan
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                    Price start from $323 <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/top_desitination/img-5.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Sydney, Australia
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                    Price start from $689 <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                    </div>
                    <!-- /.list-card owl-carousel list-carousel -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row mt-4">
                <div class="col-12 d-flex align-items-end justify-content-between">
                    <div class="flex-1">
                        <h3>Tour Trong Nước</h3>
                    </div>
                    <div class="text-right">
                        <a href="#">Xem thêm</a>
                    </div>
                    <!-- /.float-right -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel list-carousel">
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/discover_new_cities/img-1.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Singapore
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                    Price start from $484 <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                        <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                        <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                        <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                        <!-- /.rate fa-star-o -->
                            <span class="rate"><i class="fa fa-star-o"></i></span>
                                        <!-- /.rate fa-star-o -->
            </span>
                                    <!-- /.review-starts-list small -->
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/discover_new_cities/img-2.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Vienna
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                    Price start from $356 <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/discover_new_cities/img-3.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Rome
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                    Price start from $517 <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/discover_new_cities/img-4.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Dubrovnik
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                    Price start from $444 <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/discover_new_cities/img-5.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Dubai
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                    Price start from $382 <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/discover_new_cities/img-6.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Budapest
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                    Price start from $679 <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                    </div>
                    <!-- /.list-card owl-carousel list-carousel -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row mt-4">
                <div class="col-12 d-flex align-items-end justify-content-between">
                    <div class="flex-1">
                        <h3>Tour Quốc Tế</h3>
                    </div>
                    <div class="text-right">
                        <a href="#">Xem thêm</a>
                    </div>
                    <!-- /.float-right -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel list-carousel-md">
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/most_popular_experiences/img-1.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Surfing
                                </div>
                                <!-- /.title -->
                                <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                            <span class="rate"><i class="fa fa-star-o"></i></span>
                                    <!-- /.rate fa-star-o -->
            </span>
                                <!-- /.review-starts-list small -->
                                <div class="descrtiption mt-1">
                                    Certain internet providers exploit the fact that fill text cannot be recognized by automatic search
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/most_popular_experiences/img-2.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Hiking
                                </div>
                                <!-- /.title -->
                                <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                            <span class="rate"><i class="fa fa-star-o"></i></span>
                                    <!-- /.rate fa-star-o -->
            </span>
                                <!-- /.review-starts-list small -->
                                <div class="descrtiption mt-1">
                                    It’s grown to become something of an artform, and there are countless filler text generators sprinkl
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/most_popular_experiences/img-4.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Camping
                                </div>
                                <!-- /.title -->
                                <span class="review-star-rate small">
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
                                <!-- /.review-starts-list small -->
                                <div class="descrtiption mt-1">
                                    Surprisingly, there is a very vocal faction of the design community that wants to see filler text ba
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/most_popular_experiences/img-3.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Desert Safari
                                </div>
                                <!-- /.title -->
                                <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                            <span class="rate"><i class="fa fa-star-o"></i></span>
                                    <!-- /.rate fa-star-o -->
            </span>
                                <!-- /.review-starts-list small -->
                                <div class="descrtiption mt-1">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/most_popular_experiences/img-5.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    kayaking
                                </div>
                                <!-- /.title -->
                                <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                    <!-- /.rate fa-star-o -->
                            <span class="rate"><i class="fa fa-star-o"></i></span>
                                    <!-- /.rate fa-star-o -->
            </span>
                                <!-- /.review-starts-list small -->
                                <div class="descrtiption mt-1">
                                    Surprisingly, there is a very vocal faction of the design community that wants to see filler text ba
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/most_popular_experiences/img-6.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Diving
                                </div>
                                <!-- /.title -->
                                <span class="review-star-rate small">
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
                                <!-- /.review-starts-list small -->
                                <div class="descrtiption mt-1">
                                    Dummy text is also used to demonstrate the appearance of different typefaces and layouts, and in gen
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                    </div>
                    <!-- /.list-card owl-carousel list-carousel -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row mt-4">
                <div class="col-12 d-flex align-items-end justify-content-between">
                    <div class="flex-1">
                        <h3>Điểm du lịch phổ biến</h3>
                        <div>Tổng hợp những điểm du lịch được nhiều khách hàng lựa chọn nhất trong hè 2019</div>
                    </div>
                    <div class="text-right">
                        <a href="#">Xem thêm</a>
                    </div>
                    <!-- /.float-right -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel list-carousel-lg">
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/experience_los_angeles/img-1.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    venice beach
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                        <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                            <span class="rate"><i class="fa fa-star-o"></i></span>
                                            <!-- /.rate fa-star-o -->
            </span>
                                    <!-- /.review-starts-list small -->The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th ce
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/experience_los_angeles/img-2.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    Hollywood
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                        <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->It’s grown to become something of an artform, and there are countless filler text generators sprinkl
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/experience_los_angeles/img-3.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    disney concert hall
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                        <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                            <span class="rate"><i class="fa fa-star-o"></i></span>
                                            <!-- /.rate fa-star-o -->
            </span>
                                    <!-- /.review-starts-list small -->The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th ce
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                        <div class="list-card">
                            <div class="img">
                                <img src="assets/images/experience_los_angeles/img-4.jpg" alt="image alt"/>
                            </div>
                            <!-- /.img -->
                            <div class="info">
                                <div class="title">
                                    getty museum
                                </div>
                                <!-- /.title -->
                                <div class="descrtiption">
                                        <span class="review-star-rate small">
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
                                    <!-- /.review-starts-list small -->The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP prog
                                </div>
                                <!-- /.descrtiption -->
                            </div>
                            <!-- /.info -->
                        </div>
                        <!-- /.list-card -->
                    </div>
                    <!-- /.list-card owl-carousel list-carousel -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row mt-4">
                <div class="col-12 d-flex align-items-end justify-content-between">
                    <div>
                        <h3>Bài viết hàng đầu</h3>
                    </div>
                </div>
                <!-- /.col-12 -->
            </div>
            <div class="row mt-4">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <img src="assets/images/single_blog_imgs/image-01.jpg" alt="img" class="img-fluid">
                    <!-- /.img-fluid -->
                </div>
                <!-- /.col-lg-8 col-md-8 col-sm-12 -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="p-0 p-lg-4 p-md-4 mt-3 mt-lg-0 mt-md-0">
                        <h3>Exploring Hidden Gems of Italy</h3>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet, consec tetur adipiscing elit, nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <!-- /.mt-4 -->
                    </div>
                    <!-- /.p-4 -->
                </div>
                <!-- /.col-lg-4 col-md-4 col-sm-12 -->
            </div>
            <!-- /.row mt-4 -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section -->
    <div class="section img" data-image-src="assets/images/single_blog_imgs/image-04.jpg">
        <div class="container">
            <div class="row">
                <div class="offset-3 col-6">
                    <div class="text-center">
                        <h3>Bản tin</h3>
                        <p>Đăng ký theo dõi Bản tin hàng tuần của chúng tôi.</p>
                        <form action="#" method="post" class="mt-4">
                            <div class=" form-group">
                                <input type="text" id="news-letter-email" name="news-letter-email" placeholder="youremail@email.com" class="form-control">
                                <!-- /.form-control -->
                            </div>
                            <!-- /.form-group -->
                            <input type="submit" value="Đăng ký ngay!" class="btn btn-large btn-outline-primary mt-3"/>
                        </form>
                    </div>
                    <!-- /.text-center -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.section -->
@endsection
