@extends('renamefile::layouts.master')

@section('content')
<div class="content-header">
    <div class="container">
        <div class="d-flex justify-content-center py-3">
            <a href="{{ route('my-toolkit') }}" class="btn btn-primary btn-sm mr-2"><i class="fas fa-long-arrow-alt-left fa-fw mr-2"></i>My ToolKit</a>
            <a href="https://blog-toolkit.lombokdev.web.id/category/rename-file/" target="_blank" class="btn btn-warning btn-sm font-weight-bold"><i class="fas fa-blind fa-fw"></i>Cari Petunjuk</a>
        </div>
        <div class="row mb-2 d-flex justify-content-center">
            <div class="col-sm-8 text-center py-3">
                <h1 class="m-0 font-weight-bold"><small><i class="fas fa-file-code fa-fw mr-2"></i></small>Rename File</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-5">
                <div class="card">
                    <form action="{{ route('rename-file.upload-file-zip') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            
                            <h3 class="card-title font-weight-bold">
                                Browse file zip!
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group mt-3 py-3">
                                <input type="file" name="file" id="file" class="@error('file') is-invalid @enderror">
                                @error('file')
                                <div class="invalid-feedback" id="feedback_file">{{ $message }}</div>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-file-code fa-fw mr-2"></i>Rename</button>
                            <a href="{{ route('rename-file.download-template') }}" class="btn btn-sm btn-dark float-right"><i class="fas fa-file-download fa-fw fa-fw mr-2"></i>Download Template</a>
                        </div>
                    </form>
                </div>
                <div class="text-center mt-5">
                    @if (session()->has('error'))
                    <p class="text-danger">{!! session()->get('error') !!}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
