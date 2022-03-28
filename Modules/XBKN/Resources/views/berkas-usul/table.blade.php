<table id="" class="table table-bordered table-hover table-striped w-100">
    <thead>
        <tr>
            <th>File</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($berkas_usul as $bu)
        <tr>
            <td>{{ $bu->file }}</td>
            <td class="w-5">
                <a href="{{ asset($bu->file_path) }}" class="btn btn-xs text-nowrap btn-dark" target="_blank"><i class="far fa-meh-rolling-eyes fa-fw mr-1"></i>Lihat</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>