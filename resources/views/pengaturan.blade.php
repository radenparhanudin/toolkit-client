<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pengaturan</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('app') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('app') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
    <div class="container">
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pengaturan.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="d-block">Alamat E-Mail</label>
                                <input type="text" name="email" value="{{ ($pengaturan != null) ? $pengaturan['email'] : "" }}" class="form-control form-control-sm @error('email') is-invalid @enderror">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <small class="text-info">Alamat E-Mail yang anda untuk login pada <strong>ToolKit Admin</strong></small>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Nama</label>
                                <input type="text" name="nama" value="{{ ($pengaturan != null) ? $pengaturan['nama'] : "" }}" class="form-control form-control-sm @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="d-block">Jabatan</label>
                                <input type="text" name="jabatan" value="{{ ($pengaturan != null) ? $pengaturan['jabatan'] : "" }}" class="form-control form-control-sm @error('jabatan') is-invalid @enderror">
                                @error('jabatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="d-block">Instansi</label>
                                <input type="text" name="instansi" value="{{ ($pengaturan != null) ? $pengaturan['instansi'] : "" }}" class="form-control form-control-sm @error('instansi') is-invalid @enderror">
                                @error('instansi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                <a href="{{ route('welcome') }}" class="btn btn-sm btn-dark">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
                @if (session()->has('success'))
                <p class="text-success">{{ session()->get('success') }}</p>
                @endif
                @if (session()->has('error'))
                <p class="text-danger">{{ session()->get('error') }}</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
