@extends('layouts.admin')
@section('title') Tạo Mới Bài Viết @endsection
@section('breadcrumb') Tạo mới bài viết @endsection
@section('css')

@endsection
@section('js')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        $(document).ready(function(){
            var editor_config = {
                path_absolute : '/',
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

                    var cmsURL = editor_config.path_absolute + '{{asset('/')}}laravel-filemanager?field_name=' + field_name;
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
    </script>
@endsection
@section('content')
    <form method="post" action="{{route('admin.post.store')}}" enctype="multipart/form-data" class="form-material m-t-10">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @include('layouts.components.notification')
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="avatar">
                                            <label class="custom-file-label" for="inputGroupFile01">Chọn file ảnh</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-line" placeholder="Tiêu đề bài viết..." name="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <textarea rows="5" class="form-control form-control-line" name="summary" placeholder="Tóm tắt bài viết..." required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <textarea rows="10" class="form-control form-control-line my-editor" name="content" placeholder="Nội dung bài viết..." required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        @include('layouts.components.notification')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Số lượt xem</label>
                                    <input type="number" class="form-control" name="view" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Loại bài viết</label>
                                    <select class="custom-select col-12" name="category_id" required>
                                        @if(count($categories) > 0)
                                            @foreach($categories as $key=> $item)
                                                <option value="{{$key}}">{{$item}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
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
                        <div class="form-group row">
                            <label class="control-label text-left col-md-12">Trạng thái:</label>
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
