@extends('docudigitaldownloader::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-user-graduate fa-fw mr-2"></i>Berkas ASN</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('docudigital-downloader.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Berkas ASN</li>
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
                        <button class="btn btn-sm mb-2 btn-primary" data-toggle="modal" data-target="#modalFormDownloadDatatable"><i class="fas fa-cloud-download-alt fa-fw fa-fw mr-1"></i>Download</button>
                        <button class="btn btn-sm mb-2 btn-info btn-filter" data-toggle="modal" data-target="#modalFilterDatatable"><i class="fas fa-filter fa-fw mr-1"></i>Filter</button>
                        
                    </div>
                    <div class="card-body table-responsive">
                        @include('docudigitaldownloader::berkas-asn.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('docudigitaldownloader::layouts.components.modal-form-download-datatable', [
    'form' => [
        'title'  => "Download Data",
        'action' => route('docudigital-downloader.berkas-asn.store'),
        'body'   => view('docudigitaldownloader::berkas-asn.form-post')
    ]
])
@include('docudigitaldownloader::layouts.components.modal-form-filter-datatable', [
    'form' => [
        'body' => view('docudigitaldownloader::berkas-asn.form-filter')
    ]
])

@endsection
@push('script')
@include('docudigitaldownloader::berkas-asn.script')
@endpush
