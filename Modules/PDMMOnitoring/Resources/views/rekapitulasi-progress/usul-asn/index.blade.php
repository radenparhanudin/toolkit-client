@extends('pdmmonitoring::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-exclamation-circle fa-fw mr-2"></i>Usulan ASN</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('pdm-monitoring.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Rekapitulasi Progress</li>
                    <li class="breadcrumb-item active">Usulan ASN</li>
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
                        <a href="{{ route('pdm-monitoring.rekapitulasi-progress.usul-asn.store') }}" class="btn btn-sm mb-2 btn-dark btn-rekap"><i class="fas fa-clipboard-check fa-fw mr-1"></i>Rekap</a>
                        <a href="{{ route('pdm-monitoring.rekapitulasi-progress.usul-asn.generate') }}" class="btn btn-sm mb-2 btn-danger btn-generate"><i class="fas fa-sync fa-fw mr-1"></i>Generate</a>
                    </div>
                    <div class="card-body">
                        @include('pdmmonitoring::rekapitulasi-progress.usul-asn.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
@include('pdmmonitoring::rekapitulasi-progress.usul-asn.script')
@endpush
