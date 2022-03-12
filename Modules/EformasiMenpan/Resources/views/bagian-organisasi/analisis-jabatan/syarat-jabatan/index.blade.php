@extends('eformasimenpan::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> Syarat Jabatan <small class="text-primary">formasi.menpan.go.id</small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('efm.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Bagian Organisasi</li>
                    <li class="breadcrumb-item">Analisis Jabatan</li>
                    <li class="breadcrumb-item active">Syarat Jabatan</li>
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
                        @include('eformasimenpan::bagian-organisasi.analisis-jabatan.syarat-jabatan.button-aksi')
                    </div>
                    <div class="card-body">
                        @include('eformasimenpan::bagian-organisasi.analisis-jabatan.syarat-jabatan.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('eformasimenpan::layouts.components.modal-form-post-datatable', [
    'form' => [
        'title'  => 'Kualifikasi Pendidikan',
        'action' => '',
        'body'   => view('eformasimenpan::bagian-organisasi.analisis-jabatan.syarat-jabatan.form-post')
    ]
])
@include('eformasimenpan::layouts.components.modal-form-filter-datatable', [
    'form' => [
        'body' => view('eformasimenpan::bagian-organisasi.analisis-jabatan.syarat-jabatan.form-filter')
    ]
])
@endsection
@push('script')
@include('eformasimenpan::bagian-organisasi.analisis-jabatan.syarat-jabatan.script')
@endpush
