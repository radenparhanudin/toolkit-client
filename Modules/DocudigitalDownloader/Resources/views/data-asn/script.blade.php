<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('docudigital-downloader.data-asn.data') }}",
                data: function (d) {
                    d.kategori      = $('#filter_kategori').val();
                }
            },
            columns: [
                {data: 'nomor_identitas', className: 'align-middle'},
                {data: 'nama', className: 'text-nowrap align-middle'},
                {data: 'kategori', className: 'w-5 align-middle'},
                {data: 'action', className: 'text-center w-5 align-middle'},
            ]
        })

        $('#dataTableDefault').on('click', '.btn-delete-berkas', function (event) {
        event.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Tindakan ini akan menghapus data dan tidak dapat dikembalikan lagi!',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak!',
            backdrop: true,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: $(this).attr('href'),
                    type: 'delete',
                    beforeSend: function () {
                        HoldOn.open()
                    },
                    success:function (res) {
                        HoldOn.close()
                        if (res.status) {
                            Swal.fire({
                                icon: 'success',
                                html: res.message
                            })
                            $('#dataTableDefault').DataTable().ajax.reload(null, false);
                        }
                        else {
                            Swal.fire({
                                icon: 'success',
                                html: res.message
                            })
                        }
                    }
                })
            }
        })
    });
    })
</script>