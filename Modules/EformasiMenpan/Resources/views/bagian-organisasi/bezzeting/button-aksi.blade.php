<div class="row d-flex justify-content-center">
    <div class="col-sm-6 col-lg-4 text-center">
        <a data-toggle="modal" data-target="#modalFormDownloadStrukturDatatable" class="btn btn-sm mb-2 btn-primary"><i class="fas fa-cloud-download-alt fa-fw mr-1"></i>Download</a>
        {{-- <a href="#" class="btn btn-sm mb-2 btn-danger btn-upload"><i class="fas fa-cloud-upload-alt fa-fw mr-1"></i>Upload ABK</a> --}}
    </div>
    <div class="col-sm-6 col-lg-4 text-center">
        <button class="btn btn-sm mb-2 btn-info btn-filter" data-toggle="modal" data-target="#modalFilterDatatable"><i class="fas fa-filter fa-fw mr-1"></i>Filter</button>
    </div>
    <div class="col-sm-6 col-lg-4 text-center">
        <a href="{{ route('efm.bo.bezzeting.export') }}" class="btn btn-sm mb-2 btn-success"><i class="fas fa-file-download fa-fw mr-1"></i>Export</a>
        <button data-toggle="modal" data-target="#modalFormImportDatatable" class="btn btn-sm mb-2 btn-warning"><i class="fas fa-file-upload fa-fw mr-1"></i>Import</button>
    </div>
    
    
</div>