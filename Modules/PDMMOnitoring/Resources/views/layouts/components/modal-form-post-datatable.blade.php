<div class="modal fade" id="modalFormPostDatatable">
    <div class="modal-dialog {{ (isset($modal['size'])) ? $modal['size'] : ""}}">
        <div class="modal-content">
            <form id="formPostModalDatatable" action="{{ $form['action'] }}" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $form['title'] }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! $form['body'] !!}
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="fas fa-times fa-fw mr-1"></i>Keluar</button>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-hdd fa-fw mr-2"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>