<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>My ToolKit</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('app') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('app') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('app') }}/dist/css/customize.css">
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="" class="navbar-brand">
                </a>
                <a href="{{ route('my-toolkit') }}" class="navbar-brand">
                    <span class="brand-text font-weight-bold"><i class="fas fa-tools fa-fw mr-2"></i>MyToolKit</span>
                </a>
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="btn btn-primary btn-sm"><i class="fas fa-long-arrow-alt-left fa-fw mr-2"></i>Back To Home</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-8">
                    <h2 class="font-weight-bold text-center mt-5" ><small><i class="far fa-handshake fa-fw mr-3"></i></small>Free ToolKit</h2>
                    <p class="lead text-center">Anda bebas menggunakan <strong>ToolKit</strong> dibawah ini untuk membantu pekerjaan anda.</p>
                    <div class="row d-flex justify-content-center">
                        {{-- Free ToolKit --}}
                        <div class="col-xs-12 col-sm-4 col-lg-3">
                            <a href="{{ route('rename-file.index') }}" class="btn btn-app-new">
                                <i class="fas fa-file-code"></i>
                                <strong>Rename File</strong>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 mt-5">
                    <h2 class="font-weight-bold text-center mt-5" ><small><i class="fas fa-handshake fa-fw mr-3"></i></small>ToolKit Donasi</h2>
                    <p class="text-center lead">
                        Beri donasi terbaik anda untuk membantu kami mengembangkan <strong>ToolKit</strong> dibawah ini. <br><a href="https://toolkit.lombokdev.web.id/tentang-donasi" target="_blank">Tentang Donasi</a>
                    </p>
                    <div class="row d-flex justify-content-center">
                        {{-- ToolKit Donasi --}}
                        
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Version {{ toolkit_info('version') }}
            </div>
            Copyright &copy; {{ (date("Y") == 2022) ? date("Y") : "2022 - " . date("Y") }} <a href="{{ toolkit_info('whatsapp') }}">{{ toolkit_info('developer') }}</a>. All rights reserved.
        </footer>
    </div>
    <script src="{{ asset('app') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('app') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
