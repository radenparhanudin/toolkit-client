@extends('pdmmonitoring::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-exclamation-circle fa-fw mr-2"></i>Unit Verifikasi - Status Usulan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('pdm-monitoring.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Rekapitulasi Progress</li>
                    <li class="breadcrumb-item active">Unit Verifikasi - Status Usulan</li>
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
                                <select name="status_usulan" id="status_usulan" class="form-control form-control-sm select2-infinity" data-placeholder="Pilih Status Usulan">
                                    <option></option>
                                    @foreach ($status_usulan as $su)
                                    <option value="{{ $su->kode }}">{{ $su->status_usulan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <a href="{{ route('pdm-monitoring.rekapitulasi-progress.status-usulan-unit-verifikator.store') }}" class="btn btn-sm mb-2 btn-dark btn-rekap"><i class="fas fa-clipboard-check fa-fw mr-1"></i>Rekap</a>
                                <button class="btn btn-sm mb-2 btn-info btn-filter" data-toggle="modal" data-target="#modalFilterDatatable"><i class="fas fa-filter fa-fw mr-1"></i>Filter</button>
                                <a href="{{ route('pdm-monitoring.rekapitulasi-progress.status-usulan-unit-verifikator.download') }}" class="btn btn-sm mb-2 btn-success"><i class="fas fa-cloud-download-alt mr-1"></i>Download</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('pdmmonitoring::rekapitulasi-progress.status-usulan-unit-verifikator.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('pdmmonitoring::layouts.components.modal-form-filter-datatable', [
    'form' => [
        'body' => view('pdmmonitoring::rekapitulasi-progress.status-usulan-unit-verifikator.form-filter')
    ]
])
@endsection
@push('script')
@include('pdmmonitoring::rekapitulasi-progress.status-usulan-unit-verifikator.script')
@endpush
