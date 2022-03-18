@extends('pdmmonitoring::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-user-graduate fa-fw mr-2"></i>Data ASN</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('pdm-monitoring.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Pengaturan Instansi</li>
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
                        <button class="btn btn-sm mb-2 btn-dark" data-toggle="modal" data-target="#modalFormImportDatatable"><i class="fas fa-file-upload fa-fw mr-1"></i>Import Data</button>
                        <a href="{{ route('pdm-monitoring.pengaturan-instansi.data-asn.download-template') }}" class="btn btn-sm mb-2 btn-success"><i class="fas fa-file-download fa-fw mr-1"></i>Download Template</a>
                        <button class="btn btn-sm mb-2 btn-info btn-filter" data-toggle="modal" data-target="#modalFilterDatatable"><i class="fas fa-filter fa-fw mr-1"></i>Filter</button>
                    </div>
                    <div class="card-body">
                        @include('pdmmonitoring::pengaturan-instansi.data-asn.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('pdmmonitoring::layouts.components.modal-form-import-datatable', [
    'form' => [
        'action' => route('pdm-monitoring.pengaturan-instansi.data-asn.store'),
    ]
])
@include('pdmmonitoring::layouts.components.modal-form-post-datatable', [
    'form' => [
        'title' => "Update Data ASN",
        'action' => "#",
        'body' => view('pdmmonitoring::pengaturan-instansi.data-asn.form-post')
    ]
])
@include('pdmmonitoring::layouts.components.modal-form-filter-datatable', [
    'form' => [
        'body' => view('pdmmonitoring::pengaturan-instansi.data-asn.form-filter')
    ]
])

@endsection
@push('script')
@include('pdmmonitoring::pengaturan-instansi.data-asn.script')
@endpush
