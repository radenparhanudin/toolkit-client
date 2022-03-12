<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>eFormasi Menpan</title>
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
                <a href="" class="navbar-brand">
                </a>
                <a href="{{ route('efm.dashboard.index') }}" class="navbar-brand">
                    <span class="brand-text font-weight-bold">eFormasi Menpan</span>
                </a>
                
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('efm.dashboard.index') }}" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Bagian Organisasi</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="{{ route('efm.bo.bezzeting.index') }}" class="dropdown-item">Bezzeting</a></li>
                                <li><a href="{{ route('efm.bo.aj.analisis-jabatan.index') }}" class="dropdown-item">Analisis Jabatan</a></li>
                                
                                <li class="dropdown-divider"></li>
                                
                                <!-- Level two dropdown-->
                                <li class="dropdown-submenu dropdown-hover">
                                    <a  id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
                                        class="dropdown-item dropdown-toggle">
                                        Pengaturan
                                    </a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li><a href="{{ route('efm.bo.pngtrn.unit-kerja.index') }}" class="dropdown-item">Unit Kerja</a></li>
                                        <li><a href="{{ route('efm.bo.pngtrn.pangkat-golongan.index') }}" class="dropdown-item">Pangkat Golongan</a></li>
                                        <li><a href="{{ route('efm.bo.pngtrn.perjenjangan.index') }}" class="dropdown-item">Perjenjangan</a></li>
                                        <li><a href="{{ route('efm.bo.pngtrn.pendidikan.index') }}" class="dropdown-item">Pendidikan</a></li>
                                    </ul>
                                </li>
                                <!-- End Level two -->
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Bagian Kepegawaian</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="{{ route('efm.bk.bezzeting-nip.index') }}" class="dropdown-item">Bezzeting NIP</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item mr-2">
                        <a href="{{ route('my-toolkit') }}" class="btn btn-primary btn-sm"><i class="fas fa-long-arrow-alt-left fa-fw mr-2"></i>My ToolKit</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://blog-toolkit.lombokdev.web.id/category/eformasi-menpan/" target="_blank" class="btn btn-primary btn-sm"><i class="fas fa-blind fa-fw"></i>Cari Petunjuk</a>
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
