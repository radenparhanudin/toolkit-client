@extends('xbkn::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-layer-group fa-fw mr-2"></i>Berkas Usul</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('x-bkn.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Berkas Usul</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @include('xbkn::berkas-usul.table')
            </div>
        </div>
    </div>
</div>
@endsection
