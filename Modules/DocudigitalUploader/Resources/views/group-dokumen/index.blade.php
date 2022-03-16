@extends('docudigitaluploader::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-layer-group fa-fw mr-2"></i>Group Dokumen</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('docudigital-uploader.home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Group Dokumen</li>
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
                        <button class="btn btn-sm mb-2 btn-dark" data-toggle="modal" data-target="#modalFormPostDatatable"><i class="fas fa-plus-circle fa-fw mr-1"></i>Tambah</button>
                        <button class="btn btn-sm mb-2 btn-info btn-filter" data-toggle="modal" data-target="#modalFilterDatatable"><i class="fas fa-filter fa-fw mr-1"></i>Filter</button>
                    </div>
                    <div class="card-body">
                        @include('docudigitaluploader::group-dokumen.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('docudigitaluploader::layouts.components.modal-form-post-datatable', [
    'form' => [
        'title'  => 'Group Dokumen',
        'action' => route('docudigital-uploader.group-dokumen.store'),
        'body'   => view('docudigitaluploader::group-dokumen.form-post')
    ]
])
@include('docudigitaluploader::layouts.components.modal-form-filter-datatable', [
    'form' => [
        'body' => view('docudigitaluploader::group-dokumen.form-filter')
    ]
])

@endsection
@push('script')
@include('docudigitaluploader::group-dokumen.script')
@endpush
