<div class="modal fade" id="modalFilterDatatable">
    <div class="modal-dialog {{ (isset($modal['size'])) ? $modal['size'] : ""}}">
        <div class="modal-content">
            <form id="formFilterDatatable" action="#">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fas fa-filter fa-fw mr-2"></i>Filter Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! $form['body'] !!}
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-sm btn-dark btn-reset-datatable"><i class="fas fa-broom fa-fw mr-2"></i>Reset Filter</button>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-filter fa-fw mr-2"></i>Filter Data</button>
                </div>
            </form>
        </div>
    </div>
</div>