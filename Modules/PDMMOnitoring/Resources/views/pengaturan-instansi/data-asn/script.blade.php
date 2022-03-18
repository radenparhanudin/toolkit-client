<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('pdm-monitoring.pengaturan-instansi.data-asn.data') }}",
                data: function (d) {
                    d.kategori      = $('#filter_kategori').val();
                }
            },
            columns: [
                {data: 'nip', className: 'w-5 text-nowrap align-middle'},
                {data: 'nama', className: 'align-middle'},
                {data: 'kategori', className: 'w-5 text-nowrap align-middle'},
                {data: 'status', className: 'w-5 text-nowrap align-middle'},
                {data: 'keterangan', className: 'align-middle'},
                {data: 'action', className: 'text-center w-5 align-middle'},
            ],
            // order: [[ 1, 'asc']]
        })
        
        $('#dataTableDefault').on('click', '.btn-edit', function (event) {
            event.preventDefault();
            $.ajax({
                url: $(this).attr('href'),
                beforeSend: function () {
                    HoldOn.open()
                },
                success:function (res) {
                    HoldOn.close()
                    $('#formPostModalDatatable').attr({
                        'action': res.data.action,
                        'method' : 'PUT'
                    });

                    $.each(res.data, function(key, val){
                        $('#' + key).val(val)
                    })
                    $('#status').val(res.data.status).trigger('change')

                    $('#modalFormPostDatatable').modal('show')
                }
            })
        });
    })
</script>