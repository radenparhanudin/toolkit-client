@extends('eformasimenpan::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> Unit Kerja <small class="text-primary">formasi.menpan.go.id</small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('efm.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Bagian Organisasi</li>
                    <li class="breadcrumb-item">Pengaturan</li>
                    <li class="breadcrumb-item active">Unit Kerja</li>
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
                        @include('eformasimenpan::bagian-organisasi.pengaturan.unit-kerja.button-aksi')
                    </div>
                    <div class="card-body">
                        @include('eformasimenpan::bagian-organisasi.pengaturan.unit-kerja.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('eformasimenpan::layouts.components.modal-form-post-datatable', [
    'form' => [
        'title'  => 'Data Unit Kerja',
        'action' => route('efm.bo.pngtrn.unit-kerja.store'),
        'body'   => view('eformasimenpan::bagian-organisasi.pengaturan.unit-kerja.form-post')
    ]
])
@include('eformasimenpan::layouts.components.modal-form-filter-datatable', [
    'form' => [
        'body' => view('eformasimenpan::bagian-organisasi.pengaturan.unit-kerja.form-filter')
    ]
])

@include('eformasimenpan::layouts.components.modal-form-import-datatable', [
    'form' => [
        'action' => route('efm.bo.pngtrn.unit-kerja.import'),
    ]
])
@endsection
@push('script')
@include('eformasimenpan::bagian-organisasi.pengaturan.unit-kerja.script')
@endpush
