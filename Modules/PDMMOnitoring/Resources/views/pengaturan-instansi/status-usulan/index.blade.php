@extends('pdmmonitoring::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-exclamation fa-fw mr-2"></i>Status Usulan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('pdm-monitoring.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Pengaturan Instansi</li>
                    <li class="breadcrumb-item active">Status Usulan</li>
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
                        <a href="{{ route('pdm-monitoring.pengaturan-instansi.status-usulan.store') }}" class="btn btn-sm mb-2 btn-dark btn-download"><i class="fas fa-cloud-download-alt fa-fw mr-1"></i>Download Status Usulan</a>
                    </div>
                    <div class="card-body">
                        @include('pdmmonitoring::pengaturan-instansi.status-usulan.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
@include('pdmmonitoring::pengaturan-instansi.status-usulan.script')
@endpush
