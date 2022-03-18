<div class="modal fade" id="modalFormImportDatatable">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formImportModalDatatable" action="{{ $form['action'] }}" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Import Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="file" name="file_import" id="file_import">
                        <div class="invalid-feedback" id="feedback_file_import"></div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="fas fa-times fa-fw mr-1"></i>Keluar</button>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-file-import mr-2"></i>Import Data</button>
                </div>
            </form>
        </div>
    </div>
</div>