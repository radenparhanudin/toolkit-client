@extends('renamefile::layouts.master')

@section('content')
<div class="content-header">
    <div class="container">
        <a href="{{ route('my-toolkit') }}" class="btn btn-primary btn-sm"><i class="fas fa-long-arrow-alt-left fa-fw mr-2"></i>My ToolKit</a>

        <div class="row mb-2 d-flex justify-content-center">
            <div class="col-sm-8 text-center py-3">
                <h1 class="m-0"><small><i class="fas fa-file-code fa-fw mr-2"></i></small>Rename File</h1>

            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4">
                <div class="card">
                    <form action="{{ route('rename-file.upload-file-zip') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">
                                Browse file zip!
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group mt-3">
                                <input type="file" name="file" id="file" class="@error('file') is-invalid @enderror">
                                @error('file')
                                    <div class="invalid-feedback" id="feedback_file">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-file-code fa-fw mr-2"></i>Rename</button>
                            <a href="{{ route('rename-file.download-template') }}" class="btn btn-dark float-right"><i class="fas fa-file-download fa-fw fa-fw mr-2"></i>Download Template</a>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold">
                            Baca Petunjuk!
                        </h3>
                    </div>
                    <div class="card-body">
                        <p>
                            Untuk menghindari gagal rename file sebaiknya anda membaca <em>step by step</em> petunjuk dibawah ini :
                        </p>
                        <ol style="margin-left: -25px">
                            <li>
                                Buat satu folder khusus untuk menyimpan file yang akan di rename.<br>
                                Misalkan nama foldernya : <strong>rename-file</strong><br>
                                <span class="text-danger">Penting : Nama folder disarankan menggunakan huruf kecil tanpa spasi</span>
                            </li>
                            <li>Pindahkan file yang akan direname kedalam folder <strong>rename-file</strong>.</li>
                            <li>
                                Klik tombol <span class="btn btn-dark btn-xs"><i class="fas fa-file-download fa-fw mr-1"></i>Download Template</span><br>
                                Letakkan file template hasil download pada folder yang sama dengan tempat menaruh file yang akan direname (folder <strong>rename-file</strong>).
                            </li>
                            <li>Isi file template excel yang sudah di download</li>
                            <li>
                                Zip folder <strong>rename-file</strong> <br>
                                <span class="text-danger">Penting : Nama file .zip harus sama dengan nama folder sehingga file zip yang diupload adalah <strong>rename-file.zip</strong></span>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
