<div class="row d-flex justify-content-center">
    <div class="col-sm-6 col-lg-4 text-center">
        <a href="{{ route('efm.bo.pngtrn.unit-kerja.download') }}" class="btn btn-sm mb-2 btn-primary btn-download"><i class="fas fa-cloud-download-alt fa-fw mr-1"></i>Download</a>
        <a href="{{ route('efm.bo.pngtrn.unit-kerja.upload') }}" class="btn btn-sm mb-2 btn-danger btn-upload"><i class="fas fa-cloud-upload-alt fa-fw mr-1"></i>Upload</a>
    </div>
    <div class="col-sm-6 col-lg-4 text-center">
        <button class="btn btn-sm mb-2 btn-dark" data-toggle="modal" data-target="#modalFormPostDatatable"><i class="fas fa-plus-circle fa-fw mr-1"></i>Tambah</button>
        <button class="btn btn-sm mb-2 btn-info btn-filter" data-toggle="modal" data-target="#modalFilterDatatable"><i class="fas fa-filter fa-fw mr-1"></i>Filter</button>
    </div>
    <div class="col-sm-6 col-lg-4 text-center">
        <a href="{{ route('efm.bo.pngtrn.unit-kerja.export') }}" class="btn btn-sm mb-2 btn-success"><i class="fas fa-file-download fa-fw mr-1"></i>Export</a>
        <button data-toggle="modal" data-target="#modalFormImportDatatable" class="btn btn-sm mb-2 btn-warning"><i class="fas fa-file-upload fa-fw mr-1"></i>Import</button>
    </div>
    
    
</div>