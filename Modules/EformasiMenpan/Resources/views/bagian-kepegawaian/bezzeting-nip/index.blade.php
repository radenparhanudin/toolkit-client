@extends('eformasimenpan::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> Bezzeting NIP <small class="text-primary">formasi.menpan.go.id</small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('efm.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Bagian Kepegawaian</li>
                    <li class="breadcrumb-item active">Bezzeting NIP</li>
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
                        @include('eformasimenpan::bagian-kepegawaian.bezzeting-nip.button-aksi')
                    </div>
                    <div class="card-body">
                        @include('eformasimenpan::bagian-kepegawaian.bezzeting-nip.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('eformasimenpan::layouts.components.modal-form-filter-datatable', [
    'form' => [
        'body' => view('eformasimenpan::bagian-kepegawaian.bezzeting-nip.form-filter')
    ]
])

<div class="modal fade" id="modalFormDownloadDatatable">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formDownloadModalDatatable" action="{{ route('efm.bk.bezzeting-nip.download') }}" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Download Data NIP Pegawai</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('eformasimenpan::bagian-kepegawaian.bezzeting-nip.form-download-bezzeting')
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="fas fa-times fa-fw mr-1"></i>Keluar</button>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-cloud-download-alt fa-fw mr-2"></i>Download Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('script')
@include('eformasimenpan::bagian-kepegawaian.bezzeting-nip.script')
@endpush
