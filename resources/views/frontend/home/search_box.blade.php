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
                        <form method="get" action="{{route('tour.find_by_location')}}" id="searchLocation">
                            <!-- /.search-icon -->
                            <input type="text" class="search-input" placeholder='Địa điểm du lịch' name="location_name"/>
                        </form>
                        <!-- /.search-input -->
                        <div class="search-result-drop-down">
                            <div class="result-list">
                                @if(count($locations) > 0)
                                    @foreach($locations as $item)
                                        <div class="search-result-item">
                                            <div>
                                                <i class="flaticon-map-marker mr-2 small-icon"></i>
                                            </div>
                                            <div class="title">
                                                {{$item->name}}
                                            </div>
                                            <!-- /.title -->
                                        </div>
                                    @endforeach
                                @endif
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
        <img class="bg-parallax bg-parallax-neg" src="{{asset('/')}}assets/images/page_hero/homepage.jpg" data-z-index="1" data-parallax='{"y": -250,  "scale": 1.15, "smoothness": 15}' alt="image alt"/>
    </div>
    <!-- /.parallax-holder -->
</div>
