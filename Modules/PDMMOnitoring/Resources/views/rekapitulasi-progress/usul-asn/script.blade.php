<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            responsive: false,
            ajax: {
                url: "{{ route('pdm-monitoring.rekapitulasi-progress.usul-asn.data') }}",
                data: function (d) {
                    d.status_usulan    = $('#filter_status_usulan').val();
                }
            },
            columns: [
                {data: 'nip', className: 'align-middle text-nowrap'},
                {data: 'nama', className: 'align-middle text-nowrap'},
                {data: 'r_golongan', className: 'w-5 text-center align-middle text-nowrap'},
                {data: 'r_pendidikan', className: 'w-5 text-center align-middle text-nowrap'},
                {data: 'r_jabatan', className: 'w-5 text-center align-middle text-nowrap'},
                {data: 'r_cpns_pns', className: 'w-5 text-center align-middle text-nowrap'},
                {data: 'r_skp', className: 'w-5 text-center align-middle text-nowrap'},
                {data: 'r_pdm', className: 'w-5 text-center align-middle text-nowrap'},
            ],
        })

        $('.btn-rekap').on('click', function(e){
            e.preventDefault()
            $.ajax({
                url: $(this).attr('href'),
                type: "POST",
                beforeSend: function () {
                    HoldOn.open({
                        message: "Sedang melakukan rekapitulasi!"
                    })
                },
                success: function (res) {
                    HoldOn.close()
                    if(res.status){
                        Swal.fire({
                            icon: 'success',
                            html: res.message
                        })
                        $('#dataTableDefault').DataTable().ajax.reload(null, false);
                    }
                    else{
                        Swal.fire({
                            icon: 'error',
                            html: res.message
                        })
                    }
                }
            })
        })
    })
</script>