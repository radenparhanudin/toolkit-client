@extends('pdmmonitoring::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2 d-flex justify-content-center">
            <div class="col-sm-8 text-center py-3">
                <h1 class="text-primary mb-2" style="font-size: 3rem"><i class="fas fa-robot fa-fw mr-2"></i></h1>
                <h1 class="m-0">
                    Autentikasi Cookie <span class="text-primary">siasn-instansi.bkn.go.id</span>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row d-flex justify-content-center pb-5">
            <div class="col-sm-8">
                @if (session()->has('pdm_monitoring_legged_in') && !session()->has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fas fa-check mr-2"></i>Anda sudah login
                </div>
                @endif
                @if(session()->has('error'))
                <div class="callout callout-danger">
                    <h5 class="text-danger font-weight-bold">Error!</h5>
                    <p class="text-danger">{!! session()->get('error')  !!}</p>
                </div>
                @endif
                <form action="{{ route('pdm-monitoring.autentikasi.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="single_identity" id="single_identity" rows="5" class="form-control @error('single_identity') is-invalid @enderror" placeholder="Single Identity" value="{{ session()->get('pdm_monitoring_single_identity') }}">
                        @error('single_identity')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="cookie" id="cookie" rows="5" class="form-control @error('cookie') is-invalid @enderror" placeholder="Paste Cookie SIASN">{{ session()->get('pdm_monitoring_cookie') }}</textarea>
                        @error('cookie')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-sign-in-alt fa-fw mr-1"></i>Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection