<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('efm.bo.aj.analisis-jabatan.data') }}",
                data: function (d) {
                    d.data_status = $('#filter_data_status').val();
                }
            },
            columns: [
                {data: 'judul', className: 'align-middle'},
                {data: 'data_status', className: 'text-center w-15 align-middle'},
                {data: 'action', className: 'text-center w-10 align-middle'},
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