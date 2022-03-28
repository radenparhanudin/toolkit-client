<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('x-bkn.nominatif.data') }}"
            },
            columns: [
                {data: 'asn.nip', className: 'align-middle'},
                {data: 'asn.nama', className: 'align-middle'},
                {data: 'status_usul', className: 'w-5 text-center align-middle'},
                {data: 'tanggal_kirim', className: 'w-5 text-center text-nowrap align-middle'},
                {data: 'action', className: 'w-5 text-center align-middle'}
            ],
            order: [[ 3, 'desc' ]]
        })

        $('#dataTableDefault').on('click', '.btn-kirim', function (event) {
            event.preventDefault();
            $.ajax({
                url: $(this).attr('href'),
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
                            icon: 'error',
                            html: res.message
                        })
                    }
                }
            })
        });
    })
</script>