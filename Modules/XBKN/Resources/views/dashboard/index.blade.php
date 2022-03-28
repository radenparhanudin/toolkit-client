@extends('xbkn::layouts.master')
@section('content')
<div class="content-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="m-0">Dashboard</h4>
            </div>
            <div class="col-sm-6">
                <h4 class="m-0 text-secondary float-right"><small>Module X-BKN</small></h4>
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
                <div class="card card-success card-outline py-2">
                    <div class="card-body box-profile">
                        <div class="text-center pb-3">
                            <i class="fab fa-apple fa-fw text-success" style="font-size: 5rem;"></i>
                        </div>
                        
                        <h3 class="profile-username text-center py-3">{{ session()->get('instansi') }}</h3>
                        
                        <p class="text-center">
                            <a href="{{ route('x-bkn.autentikasi.logout') }}" class="btn btn-sm btn-success"><i class="fas fa-sign-out-alt fa-fw mr-1"></i>Logout</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-success card-outline">
                    <div class="card-body py-5 text-center">
                        <p class="lead" style="font-weight: normal">
                            Terima kasih sudah menggunakan Module ToolKit <br><strong>X-BKN</strong>
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