@extends('eformasimenpan::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="m-0">Dashboard</h4>
            </div>
            <div class="col-sm-6">
                <h4 class="m-0 text-secondary float-right"><small>ToolKit Eformasi Menpan</small></h4>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @if(session()->has('success'))
                <div class="callout callout-success">
                    <h5 class="text-success font-weight-bold">Success!</h5>
                    <p class="text-success">{!! session()->get('success')  !!}</p>
                </div>
                @endif
            </div>
            <div class="col-md-4">
                <div class="card card-primary card-outline py-2">
                    <div class="card-body box-profile">
                        <div class="text-center pb-3">
                            <img class="profile-user-img img-fluid img-circle"
                            src="https://i.pinimg.com/474x/cb/c5/2a/cbc52adef1b52ee84c1f17d0b3189689.jpg"
                            alt="User profile picture"
                            style="border: 3px solid #218838">
                        </div>
                        
                        <h3 class="profile-username text-center">{{ session()->get('instansi') }}</h3>
                        
                        <p class="text-muted text-center">Bagian : {{ session()->get('bagian') }}</p>
                        <p class="text-center">
                            <a href="{{ route('efm.autentikasi.doLogout') }}" class="btn btn-primary"><i class="fas fa-sign-out-alt fa-fw mr-1"></i>Logout</a>
                            @if (env('APP_ENV') == 'local')
                            <a href="{{ route('efm.dashboard.resetDB') }}" class="btn btn-primary"><i class="fas fa-sync-alt fa-fw mr-1"></i>Reset Database</a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-primary card-outline">
                    <div class="card-body py-5 text-center">
                        <p class="lead">
                            Terima kasih sudah menggunakan Aplikasi <strong>ToolKit eFormasi</strong><br> Bundle <strong>{{ config('app.name') }}</strong>.
                        </p>
                        <p class="pt-4">
                            Jika anda mengalami kendala silahkan menghubungi :<br><br><a href="{{ toolkit_info('whatsapp') }}" class="btn btn-primary" target="_blank">Wa Me : 6282342788059</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection