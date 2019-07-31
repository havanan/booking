<!-- sample modal content -->
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tạo người dùng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form method="post" action="{{route('admin.customer.store')}}">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="control-label">Tên:</label>
                            <input type="text" class="form-control" required name="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="control-label">Tên đăng nhập:</label>
                            <input type="text" class="form-control" required name="username">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="control-label">Mật khẩu:</label>
                            <input type="password" class="form-control" required name="password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="control-label">Nhập lại mật khẩu:</label>
                            <input type="password" class="form-control" required name="password_confirmation">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="control-label">Email:</label>
                            <input type="email" class="form-control" required name="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="control-label">Số điện thoại:</label>
                            <input type="text" class="form-control" required name="phone">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="control-label">Địa chỉ:</label>
                            <input type="text" class="form-control" required name="address">
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