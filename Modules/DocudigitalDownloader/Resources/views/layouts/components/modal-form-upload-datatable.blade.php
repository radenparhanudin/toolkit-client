<div class="modal fade" id="modalFormUploadDatatable">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formUploadModalDatatable" action="{{ $form['action'] }}" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $form['title'] }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="file" name="file_upload" id="file_upload">
                        <div class="invalid-feedback" id="feedback_file_upload"></div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-cloud-upload-alt fa-fw mr-2"></i>Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>