<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('pdm-monitoring.inbox-usul.download.data') }}"
            },
            columns: [
                {data: 'offset', className: 'align-middle d-none'},
                {data: 'nama', className: 'align-middle'},
                {data: 'status_usulan_nama', className: 'align-middle'},
                {data: 'status', className: 'align-middle'},
            ],
        })

        $('.btn-generate-download').on('click', function(e){
            e.preventDefault()
            $.ajax({
                url: $(this).attr('href'),
                type: "POST",
                data: {
                    kode: $('#kode').val()
                },
                beforeSend: function () {
                    HoldOn.open({
                        message: "Sedang melakukan generate!"
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