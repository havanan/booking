<!-- sample modal content -->
<div id="responsive-modal-{{isset($id) ? $id : ''}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Xóa khách hàng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Bạn chắc chắn muốn xóa khách hàng : <span class="card-title">{{$title ? $title : ''}}</span> ? </label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Đóng</button>
                <a href="{{route('admin.customer.destroy',$id)}}" class="btn btn-danger waves-effect waves-light">Xóa</a>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
