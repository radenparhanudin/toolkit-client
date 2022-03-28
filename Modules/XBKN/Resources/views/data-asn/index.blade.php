@extends('xbkn::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-user-graduate fa-fw mr-2"></i>Data ASN</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('x-bkn.dashboard.index') }}">Dashboard</a></li>
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
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <button class="btn btn-sm mb-2 btn-dark" data-toggle="modal" data-target="#modalFormImportDatatable"><i class="fas fa-upload fa-fw mr-1"></i>Import Data</button>
                        <a href="{{ route('x-bkn.data-asn.download') }}" class="btn btn-sm mb-2 btn-success"><i class="fas fa-download fa-fw mr-1"></i>Download Template</a>
                    </div>
                    <div class="card-body">
                        @include('xbkn::data-asn.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('xbkn::layouts.components.modal-form-import-datatable', [
    'form' => [
        'action' => route('x-bkn.data-asn.import'),
    ]
])
@endsection
@push('script')
@include('xbkn::data-asn.script')
@endpush
