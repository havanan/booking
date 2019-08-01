<div class="col-lg-3 col-md-4 col-sm-12">
    <aside>
        <form method="get" action="{{route('tour.find')}}">
        @csrf
            <div class="widget sm mt-0 mb-0">
                <div class="header pb-0">
                    <div class="title">
                        Tìm Kiếm Theo
                    </div>
                    <!-- /.title -->
                </div>
                <!-- /.header -->
                <div class="body">
                    <div class="mb-4">
                        <!-- /.mb-2 -->
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tên" aria-label="Recipient's username" aria-describedby="button-addon2" name="name" value="{{isset($params['name']) ? $params['name'] : ''}}">
                            <div class="input-group-append">
                                <button class="btn btn-danger no-round" type="submit" id="button-addon2">Tìm</button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-2 mt-2">
                            Khoảng giá
                        </div>
                        <!-- /.mb-2 -->
                        <input type="text"
                               class="price-slider"
                               title="Khoảng giá"
                               name="price"
                               data-min="500000"
                               data-max="500000000"
                               data-from="{{isset($params['price_gr'][0]) ? $params['price_gr'][0] : 500000 }}"
                               data-to="{{isset($params['price_gr'][1]) ? $params['price_gr'][1] : 500000000}}"

                        />
                        <input type="hidden" name="tour_category_id" value="{{$info['id']}}">
                    </div>
                    <div class="mb-3">
                        <div class="mb-2 mt-2">
                            Dịch vụ đi kèm
                        </div>
                        <!-- /.mb-2 -->
                    @if(count($services) > 0)
                        @foreach($services as $item)
                            <!-- // Pet Friendly // -->
                                <div class="checkbox">
                                    <label class="d-flex align-items-center small">
                                        <input class="i-check" type="checkbox" @if(isset($services_seleced[$item->id])) checked @endif title="{{$item->name}}" name="service[]" value="{{$item->id}}"/>
                                        <i class="{{$item->icon}}}"></i> {{$item->name}}
                                    </label>
                                </div>
                                <!-- // Restaurant // -->
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- /.body -->
            </div>
        </form>
        <!-- /.widget -->
    </aside>
</div>