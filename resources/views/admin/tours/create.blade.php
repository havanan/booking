@extends('layouts.admin')
@section('title') Tạo Mới Tour @endsection
@section('breadcrumb') Tạo mới tour @endsection
@section('css')
    <link href="{{asset('admin/assets/node_modules/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('js')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/node_modules/multiselect/js/jquery.multi-select.js')}}"></script>

    <script>
        $(document).ready(function(){
            var editor_config = {
                path_absolute : '{{asset('/')}}',
                selector: "textarea.my-editor",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table contextmenu directionality",
                    "emoticons template paste textcolor colorpicker textpattern"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                relative_urls: false,
                theme: "modern",
                height: 300,
                file_browser_callback : function(field_name, url, type, win) {
                    var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                    var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                    var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                    if (type == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }

                    tinyMCE.activeEditor.windowManager.open({
                        file : cmsURL,
                        title : 'Filemanager',
                        width : x * 0.8,
                        height : y * 0.8,
                        resizable : "yes",
                        close_previous : "no"
                    });
                }
            };

            tinymce.init(editor_config);
        });
        var route_prefix = "{{ url(config('lfm.url_prefix')) }}";
        $('#lfm').filemanager('image', {prefix: route_prefix});
        $('#pre-selected-options').multiSelect();
    </script>
@endsection
@section('content')
    <form method="post" action="{{route('admin.tour.store')}}" class="form-material m-t-10">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @include('layouts.components.notification')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <img id="holder">
                                    <br>
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-info" style="color: white">
                                            <i class="fa fa-picture-o"></i> Chọn ảnh bìa
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control file-upload" type="text" name="avatar">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-line" placeholder="Tên Tour..." name="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <textarea rows="10" class="form-control form-control-line my-editor" name="content" placeholder="Nội dung bài viết..."></textarea>
                            </div>
                        </div>
                        <div class="row  mt-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Địa điểm du lịch</label>
                                    <select class="custom-select col-12" name="location_id" required>
                                        @if(count($locations) > 0)
                                            @foreach($locations as $key=> $item)
                                                <option value="{{$key}}">{{$item}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label text-left">Trạng thái:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="chk-show" name="status" class="custom-control-input" value="1" checked>
                                                <label class="custom-control-label" for="chk-show">Hiện thị</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="chk-hidden" name="status" class="custom-control-input" value="0">
                                                <label class="custom-control-label" for="chk-hidden">Ẩn</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label text-left">Phương tiện:</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio">
                                                <input type="checkbox" id="chk-car" name="vehicle[]" class="custom-control-input" value="car" checked>
                                                <label class="custom-control-label" for="chk-car">Ô tô</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio">
                                                <input type="checkbox" id="chk-plane" name="vehicle[]" class="custom-control-input" value="plane">
                                                <label class="custom-control-label" for="chk-plane">Máy bay</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio">
                                                <input type="checkbox" id="chk-train" name="vehicle[]" class="custom-control-input" value="train">
                                                <label class="custom-control-label" for="chk-train">Tàu hỏa</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label text-left">Dịch vụ đi kèm:</label>
                                    <div class="row">
                                        @if(count($services) > 0)
                                            @foreach($services as $item)
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio">
                                                        <input type="checkbox" id="chk-{{$item->slug}}" name="service[]" class="custom-control-input" value="{{$item->slug}}" checked>
                                                        <label class="custom-control-label" for="chk-{{$item->slug}}"><i class="fa {{$item->icon}}"></i> {{$item->name}}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Giá:</label>
                                    <input type="number" class="form-control" name="price" value="0">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Giá khuyến mại:</label>
                                    <input type="number" class="form-control" name="price_discount" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Giá trẻ em (từ 5-9 tuổi):</label>
                                    <input type="number" class="form-control" name="price_children" value="0">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Giá baby:</label>
                                    <input type="number" class="form-control" name="price_baby" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Ngày khởi hành:</label>
                                    <input type="text" class="form-control form-control-line"  name="start_date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Địa điểm khởi hành:</label>
                                    <input type="text" class="form-control form-control-line"  name="start_address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Thời gian tour:</label>
                                    <input type="text" class="form-control form-control-line"  name="time">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Loại tour</label>
                                    <select id='pre-selected-options' multiple='multiple' class="form-control" required name="category_id[]">
                                        @if(count($categories) > 0)
                                            @foreach($categories as $key=> $item)
                                                <option value="{{$key}}">{{$item}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-danger waves-effect waves-light">Lưu</button>
                            <button type="reset" class="btn btn-primary waves-effect">Nhập lại</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
