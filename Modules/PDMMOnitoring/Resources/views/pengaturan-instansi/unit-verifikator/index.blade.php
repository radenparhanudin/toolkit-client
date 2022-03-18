@extends('pdmmonitoring::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-user-check fa-fw mr-2"></i>Unit Verifikator</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('pdm-monitoring.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Pengaturan Instansi</li>
                    <li class="breadcrumb-item active">Unit Verifikator</li>
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
                        <a href="{{ route('pdm-monitoring.pengaturan-instansi.unit-verifikator.store') }}" class="btn btn-sm mb-2 btn-dark btn-download"><i class="fas fa-cloud-download-alt fa-fw mr-1"></i>Download Unit Verifikator</a>
                    </div>
                    <div class="card-body">
                        @include('pdmmonitoring::pengaturan-instansi.unit-verifikator.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
@include('pdmmonitoring::pengaturan-instansi.unit-verifikator.script')
@endpush
