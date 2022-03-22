<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Docudigital Downloader</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('app') }}/plugins/fontawesome-free/css/all.min.css">
    {{-- Plugins --}}
    <link rel="stylesheet" href="{{ asset('app') }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('app') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('app') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('app') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('app') }}/plugins/HoldOnJS/HoldOn.css">
    <link rel="stylesheet" href="{{ asset('app') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('app') }}/dist/css/customize.css">
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('docudigital-downloader.dashboard.index') }}" class="nav-link text-dark"><i class="fas fa-tachometer-alt fa-fw mr-1"></i>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('docudigital-downloader.data-asn.index') }}" class="nav-link text-dark"><i class="fas fa-user-graduate fa-fw mr-1"></i>Data ASN</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('docudigital-downloader.berkas-asn.index') }}" class="nav-link text-dark"><i class="fas fa-layer-group fa-fw mr-1"></i>Berkas ASN</a>
                        </li>
                    </ul>
                </div>
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('my-toolkit') }}" class="nav-link text-dark"><i class="fas fa-long-arrow-alt-left fa-fw mr-2"></i>My ToolKit</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://blog-toolkit.lombokdev.web.id/category/docudigital-downloader/" target="_blank" class="nav-link text-dark"><i class="fas fa-blind fa-fw"></i>Cari Petunjuk</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Version {{ toolkit_info('version') }}
            </div>
            Copyright &copy; {{ (date("Y") == 2022) ? date("Y") : "2022 - " . date("Y") }} <a href="{{ toolkit_info('whatsapp') }}" class="text-primary">{{ toolkit_info('developer') }}</a>. All rights reserved.
        </footer>
    </div>
    <script src="{{ asset('app') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('app') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- Plugins --}}
    <script src="{{ asset('app') }}/plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('app') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('app') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('app') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('app') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('app') }}/plugins/HoldOnJS/HoldOn.js"></script>
    <script src="{{ asset('app') }}/dist/js/adminlte.min.js"></script>
    <script src="{{ asset('app') }}/dist/js/frontend.js"></script>
    @stack('script')
</body>
</html>
