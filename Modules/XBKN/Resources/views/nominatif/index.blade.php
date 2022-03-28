@extends('xbkn::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-layer-group fa-fw mr-2"></i>Nominatif</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('x-bkn.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Nominatif</li>
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
                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-sm mb-2 btn-dark" data-toggle="modal" data-target="#modalFormImportDatatable"><i class="fas fa-file-upload fa-fw mr-1"></i>Import Nominatif</button>
                                <a href="{{ route('x-bkn.nominatif.download') }}" class="btn btn-sm mb-2 btn-success"><i class="fas fa-file-download fa-fw mr-1"></i>Download Template</a>
                                <button class="btn btn-sm mb-2 btn-warning" data-toggle="modal" data-target="#modalFormUploadDatatable"><i class="fas fa-cloud-upload-alt fa-fw mr-1"></i>Uplaod Berkas</button>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-sm mb-2 btn-primary float-right" data-toggle="modal" data-target="#modalFormPostDatatable"><i class="fas fa-paper-plane fa-fw mr-1"></i>Kirim Usul Kolektif</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="mb-3 pb-2 border-bottom text-info">
                            {{ "{$data_usul['kategori']} # {$data_usul['no_usul']} # {$data_usul['tgl_usul']}"}}
                        </h5>
                        @include('xbkn::nominatif.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('xbkn::layouts.components.modal-form-import-datatable', [
    'form' => [
        'action' => route('x-bkn.nominatif.import'),
    ]
])
@include('xbkn::layouts.components.modal-form-upload-datatable', [
    'form' => [
        'title' => 'Upload Berkas',
        'action' => route('x-bkn.nominatif.upload'),
    ]
])

@include('xbkn::layouts.components.modal-form-post-datatable', [
    'form' => [
        'title' => 'Kirim Usul Kolektif',
        'action' => route('x-bkn.nominatif.kirim-kolektif'),
        'body' => view('xbkn::nominatif.form-post'),
    ]
])
@endsection
@push('script')
@include('xbkn::nominatif.script')
@endpush
