<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('efm.bo.aj.syarat-jabatan.data') }}",
                data: function (d) {
                    d.data_status = $('#filter_data_status').val();
                    d.judul = $('#filter_judul').val();
                }
            },
            columns: [
                {data: 'anjab_nama', className: 'align-middle'},
                {data: 'pendidikan_nama', className: 'align-middle'},
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
                success:function (result) {
                    HoldOn.close()
                    $('#formPostModalDatatable').attr({
                        'action': result.data.action,
                        'method' : 'PUT'
                    });

                    $.get("{{ route('efm.bo.pngtrn.pendidikan.get-pendidikan') }}", function(res){
                        $('#kualifikasi_pendidikan').empty()
                        $.each(res.data, function(key, val){
                            $('#kualifikasi_pendidikan').append('<option value="'+val.efm_id+'">'+val.nama+'</option>')
                        })
                        $('#kualifikasi_pendidikan').val(result.data.pendidikan).trigger('change')
                    })

                    $('#modalFormPostDatatable').modal('show')
                }
            })
        });
    })
</script>