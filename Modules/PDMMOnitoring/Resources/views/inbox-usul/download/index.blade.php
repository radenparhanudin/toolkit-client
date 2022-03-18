@extends('pdmmonitoring::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="far fa-arrow-alt-circle-down fa-fw mr-2"></i>Download Inbox Usul</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('pdm-monitoring.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Inbox Usul</li>
                    <li class="breadcrumb-item active">Download</li>
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
                        <div class="row">
                            <div class="col-sm-8">
                                <select name="kode" id="kode" class="form-control form-control-sm select2" data-placeholder="Pilih Status Usulan">
                                    <option></option>
                                    @foreach ($status_usulan as $su)
                                    <option value="{{ $su->kode }}">{{ $su->status_usulan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <a href="{{ route('pdm-monitoring.inbox-usul.download.generate') }}" class="btn btn-sm mb-2 btn-danger btn-generate-download"><i class="fas fa-sync-alt fa-fw mr-1"></i>Generate</a>
                                <a href="{{ route('pdm-monitoring.inbox-usul.download.download') }}" class="btn btn-sm mb-2 btn-dark btn-download"><i class="fas fa-cloud-download-alt fa-fw mr-1"></i>Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('pdmmonitoring::inbox-usul.download.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
@include('pdmmonitoring::inbox-usul.download.script')
@endpush
