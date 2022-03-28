@extends('xbkn::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-layer-group fa-fw mr-2"></i>Data Usul</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('x-bkn.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Usul</li>
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
                        <button class="btn btn-sm mb-2 btn-dark" data-toggle="modal" data-target="#modalFormPostDatatable"><i class="fas fa-plus-circle fa-fw mr-1"></i>Tambah Usul</button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center font-weight-bold border-bottom pb-1 mb-2">Usul Kenaikan Pangkat & Pensiun</h3>
                        @include('xbkn::data-usul.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('xbkn::layouts.components.modal-form-post-datatable', [
    'form' => [
        'title'  => "Data Usul",
        'action' => route('x-bkn.data-usul.store'),
        'body'   => view('xbkn::data-usul.form-post'),
    ]
])
@endsection
@push('script')
@include('xbkn::data-usul.script')
@endpush
