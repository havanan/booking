<!-- sample modal content -->
<div id="edit-modal-{{$data['id']}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sửa Địa Điểm Du Lịch</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form method="post" action="{{route('admin.location.update',$data['id'])}}">
            <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Tên:</label>
                        <input type="text" class="form-control" required name="name" value="{{isset($data['name']) ? $data['name'] : ''}}">
                        @if(isset($data['id']))
                            <input type="hidden" class="form-control" name="id" value="{{$data['id'] }}">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">IP:</label>
                        <input type="text" class="form-control" name="location" value="{{isset($data['location']) ? $data['location'] : ''}}">
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-left col-md-12">Trạng thái:</label>
                        <div class="col-md-6">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="chk-show-{{$data['id']}}" name="status" class="custom-control-input" value="1" {{isset($data['status']) && $data['status'] == 1 ? 'checked' : ''}}>
                                <label class="custom-control-label" for="chk-show-{{$data['id']}}">Hiện thị</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="chk-hidden-{{$data['id']}}" name="status" class="custom-control-input" value="0" {{isset($data['status']) && $data['status'] == 0 ? 'checked' : ''}}>
                                <label class="custom-control-label" for="chk-hidden-{{$data['id']}}">Ẩn</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-danger waves-effect waves-light">Lưu</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->
