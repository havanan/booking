@if(count($data) > 0)
    @foreach($data as $item)
        <div class="list-card">
            <div class="img">
                @if($item->avatar != null)
                    <a href="{{route('tour.view',$item->slug)}}">
                        <img class="thumb-sm" src="{{asset('/').'/'.$item->avatar}}" >
                    </a>
                @endif
            </div>
            <!-- /.img -->
            <div class="info">
                <div class="title">
                    <a href="{{route('tour.view',$item->slug)}}">
                        {{$item->name}}
                    </a>
                </div>
                <!-- /.title -->
                <div class="descrtiption">
                    @if($item->price > 0 && $item->price_discount <= 0)
                        <span class="text-danger">{{number_format($item->price)}} VNĐ</span>
                    @elseif($item->price_discount > 0)
                        <span class="text-danger">{{number_format($item->price_discount)}} VNĐ</span>
                    @else
                        <span class="text-danger">Liên hệ</span>

                    @endif
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
                </div>
                <!-- /.descrtiption -->
            </div>
            <!-- /.info -->
        </div>
    @endforeach
@endif