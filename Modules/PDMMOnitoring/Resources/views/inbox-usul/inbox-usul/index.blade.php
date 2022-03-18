@extends('pdmmonitoring::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-mail-bulk fa-fw mr-2"></i>Inbox Usul</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('pdm-monitoring.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Inbox Usul</li>
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
                        <a href="{{ route('pdm-monitoring.inbox-usul.download.index') }}" class="btn btn-sm mb-2 btn-dark"><i class="fas fa-cloud-download-alt fa-fw mr-1"></i>Download Inbox Usul</a>
                        <button class="btn btn-sm mb-2 btn-info btn-filter" data-toggle="modal" data-target="#modalFilterDatatable"><i class="fas fa-filter fa-fw mr-1"></i>Filter</button>
                    </div>
                    <div class="card-body table-responsive">
                        @include('pdmmonitoring::inbox-usul.inbox-usul.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('pdmmonitoring::layouts.components.modal-form-filter-datatable', [
    'form' => [
        'body' => view('pdmmonitoring::inbox-usul.inbox-usul.form-filter')
    ]
])
@endsection
@push('script')
@include('pdmmonitoring::inbox-usul.inbox-usul.script')
@endpush
