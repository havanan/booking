<!-- sample modal content -->
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tạo Mới Dịch Vụ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form method="post" action="{{route('admin.service.store')}}">
            <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Icon:</label>
                        <input type="text" class="form-control" required name="icon">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Tên dịch vụ:</label>
                        <input type="text" class="form-control" required name="name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Giá :</label>
                        <input type="number" class="form-control" required name="price" value="0">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Giá khuyến mại:</label>
                        <input type="number" class="form-control" required name="discount" value="0">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Trạng thái:</label>
                        <div class="row" style="padding: 10px">
                            <div class="custom-control custom-radio col-md-6">
                                <input type="radio" id="show" name="status" class="custom-control-input" value="1" checked>
                                <label class="custom-control-label" for="show">Hiện thị</label>
                            </div>
                            <div class="custom-control custom-radio col-md-6">
                                <input type="radio" id="hidden" name="status" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="hidden">Ẩn</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Ghi chú:</label>
                        <textarea class="form-control" name="name">

                        </textarea>
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
