@extends('docudigitaluploader::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-layer-group fa-fw mr-2"></i>List File :: <small class="text-info">{{ $group['dokumen'] . " / ". $group['group'] }}</small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('docudigital-uploader.home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">List File</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <button class="btn btn-sm mb-2 btn-dark" data-toggle="modal" data-target="#modalFormUploadDatatable"><i class="fas fa-cloud-upload-alt fa-fw mr-1"></i>Upload File</button>
                        <button class="btn btn-sm mb-2 btn-info btn-filter" data-toggle="modal" data-target="#modalFilterDatatable"><i class="fas fa-filter fa-fw mr-1"></i>Filter</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select  name="tahun" id="tahun" data-placeholder="Tahun" class="form-control select2-infinity">
                                        <option></option>
                                        @for ($i = 2021; $i <= 2025; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <div class="invalid-feedback" id="feedback_tahun"></div>
                                </div>  
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-upload-keserver-docudigital"><i class="fas fa-cloud-upload-alt fa-fw mr-1"></i>Upload Ke Server</button>
                            </div>
                        </div>
                        @include('docudigitaluploader::list-file.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('docudigitaluploader::layouts.components.modal-form-upload-datatable', [
'form' => [
'title' => 'Upload File',
'action' => route('docudigital-uploader.list-file.store'),
]
])
@include('docudigitaluploader::layouts.components.modal-form-filter-datatable', [
'form' => [
'body' => view('docudigitaluploader::list-file.form-filter')
]
])
@endsection
@push('script')
@include('docudigitaluploader::list-file.script')
@endpush
