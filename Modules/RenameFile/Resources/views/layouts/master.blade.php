<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rename File</title>
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
        <div class="content-wrapper">
            @yield('content')
        </div>
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
