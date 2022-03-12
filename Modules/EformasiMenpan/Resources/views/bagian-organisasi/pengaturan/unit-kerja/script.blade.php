<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('efm.bo.pngtrn.unit-kerja.data') }}",
                data: function (d) {
                    d.status      = $('#filter_status').val();
                    d.data_status = $('#filter_data_status').val();
                }
            },
            columns: [
                {data: 'nama', className: 'align-middle'},
                {data: 'telepon', className: 'text-center align-middle'},
                {data: 'alamat', className: 'align-middle'},
                {data: 'keterangan', className: 'align-middle'},
                {data: 'status', className: 'text-center w-5 align-middle'},
                {data: 'data_status', className: 'text-center w-5 align-middle'},
                {data: 'action', className: 'text-center w-5 align-middle'},
            ]
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

                    $('#modalFormPostDatatable').modal('show')
                }
            })
        });
    })
</script>