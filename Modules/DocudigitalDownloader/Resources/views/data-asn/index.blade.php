@extends('docudigitaldownloader::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-user-graduate fa-fw mr-2"></i>Data ASN</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('docudigital-downloader.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data ASN</li>
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
                        <button class="btn btn-sm mb-2 btn-dark" data-toggle="modal" data-target="#modalFormImportDatatable"><i class="fas fa-upload fa-fw mr-1"></i>Import Data</button>
                        <a href="{{ route('docudigital-downloader.data-asn.download-template') }}" class="btn btn-sm mb-2 btn-success"><i class="fas fa-download fa-fw mr-1"></i>Download Template</a>
                        <button class="btn btn-sm mb-2 btn-info btn-filter" data-toggle="modal" data-target="#modalFilterDatatable"><i class="fas fa-filter fa-fw mr-1"></i>Filter</button>
                        
                    </div>
                    <div class="card-body">
                        @include('docudigitaldownloader::data-asn.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('docudigitaldownloader::layouts.components.modal-form-import-datatable', [
    'form' => [
        'action' => route('docudigital-downloader.data-asn.import'),
    ]
])
@include('docudigitaldownloader::layouts.components.modal-form-filter-datatable', [
    'form' => [
        'body' => view('docudigitaldownloader::data-asn.form-filter')
    ]
])

@endsection
@push('script')
@include('docudigitaldownloader::data-asn.script')
@endpush
