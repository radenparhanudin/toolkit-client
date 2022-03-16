<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('docudigital-uploader.group-dokumen.data') }}",
                data: function (d) {
                    d.dokumen      = $('#filter_dokumen').val();
                }
            },
            columns: [
                {data: 'created_at', className: 'align-middle d-none'},
                {data: 'dokumen', className: 'w-5 text-nowrap align-middle'},
                {data: 'group', className: 'align-middle'},
                {data: 'action', className: 'text-center w-5 align-middle'},
            ],
            order: [[ 0, 'desc' ]]
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
                    $('#dokumen').val(res.data.dokumen).trigger('change')

                    $('#modalFormPostDatatable').modal('show')
                }
            })
        });

        $('#modalFormPostDatatable').on('hidden.bs.modal', function(){
            $('#formPostModalDatatable').attr({
                'action': "{{ route('docudigital-uploader.group-dokumen.store') }}",
                'method' : 'POST'
            });
        })
    })
</script>