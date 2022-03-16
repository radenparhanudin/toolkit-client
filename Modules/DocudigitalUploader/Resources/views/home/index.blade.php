@extends('docudigitaluploader::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="m-0">Dashboard</h4>
            </div>
            <div class="col-sm-6">
                <h4 class="m-0 text-secondary float-right"><small>Module Docudigital Uploader</small></h4>
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
                            <i class="fas fa-cloud-upload-alt" style="font-size: 5rem; color: #0069d9"></i>
                        </div>
                        
                        <h3 class="profile-username text-center">{{ session()->get('instansi') }}</h3>
                        
                        <p class="text-muted text-center">{{ session()->get('nip') }} / {{ session()->get('nama') }}</p>
                        <p class="text-center">
                            <a href="{{ route('docudigital-uploader.autentikasi.logout') }}" class="btn btn-sm btn-dark"><i class="fas fa-sign-out-alt fa-fw mr-1"></i>Logout</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-primary card-outline">
                    <div class="card-body py-5 text-center">
                        <p class="lead" style="font-weight: normal">
                            Terima kasih sudah menggunakan Module ToolKit <br><strong>Docudigital Uploader</strong>
                        </p>
                        <p class="pt-4">
                            Jika anda mengalami kendala silahkan menghubungi :<br><a href="{{ toolkit_info('whatsapp') }}" class="btn btn-sm btn-success" target="_blank">Wa Me : 6282342788059</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection