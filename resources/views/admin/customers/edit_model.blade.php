<!-- sample modal content -->
<div id="edit-modal-{{$data['id']}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sửa Khách Hàng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form method="post" action="{{route('admin.customer.update',$data['id'])}}">
            <div class="modal-body">
                    @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="recipient-name" class="control-label">Tên:</label>
                        <input type="text" class="form-control" required name="name" value="{{$data['name']}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="recipient-name" class="control-label">Tên đăng nhập:</label>
                        <input type="text" class="form-control" required name="username" value="{{$data['username']}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="recipient-name" class="control-label">Email:</label>
                        <input type="email" class="form-control" required name="email" value="{{$data['email']}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="recipient-name" class="control-label">Số điện thoại:</label>
                        <input type="text" class="form-control" required name="phone" value="{{$data['phone']}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="recipient-name" class="control-label">Địa chỉ:</label>
                        <input type="text" class="form-control" required name="address" value="{{$data['address']}}">
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
