<div class="btn-group">
    @isset($list)
    <a href="{{ $list['href'] }}" class="btn btn-xs text-nowrap btn-primary"><i class="fas fa-clipboard-list fa-fw mr-1"></i>List File</a>
    @endisset
    @isset($edit)
    <a href="{{ $edit['href'] }}" class="btn btn-xs text-nowrap btn-info btn-edit"><i class="fas fa-quidditch fa-fw mr-1"></i>Edit</a>
    @endisset
    @isset($delete)
    <a href="{{ $delete['href'] }}" class="btn btn-xs text-nowrap btn-danger btn-delete"><i class="fas fa-trash-alt fa-fw mr-1"></i>Hapus</a>
    @endisset
    @isset($deleteBerkas)
    <a href="{{ $deleteBerkas['href'] }}" class="btn btn-xs text-nowrap btn-warning btn-delete-berkas"><i class="fas fa-book-dead fa-fw mr-1"></i>Hapus Berkas</a>
    @endisset
    @isset($lihat)
    <a href="{{ $lihat['href'] }}" class="btn btn-xs text-nowrap btn-primary" target="_blank"><i class="far fa-meh-rolling-eyes fa-fw mr-1"></i>Lihat</a>
    @endisset
</div>