<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('x-bkn.data-usul.data') }}"
            },
            columns: [
                {data: 'created_at', className: 'w-5 text-center align-middle text-nowrap d-none'},
                {data: 'kategori', className: 'align-middle'},
                {data: 'no_usul', className: 'align-middle'},
                {data: 'tgl_usul', className: 'align-middle'},
                {data: 'jenis_kp', className: 'align-middle'},
                {data: 'periode_kp', className: 'align-middle'},
                {data: 'tahun_kp', className: 'align-middle'},
                {data: 'jenis_pensiun', className: 'align-middle'},
                {data: 'tmt_pensiun', className: 'align-middle'},
                {data: 'action', className: 'w-5 text-center align-middle'}
            ],
            order: [[ 0, 'desc' ]]
        })

        $('#kategori').on('select2:select', function(){
            $('.the-wrapper').removeClass('d-none')
            var select = $(this).val()
            if(select == "Kenaikan Pangkat"){
                $('#pensiun').addClass('d-none')
                $('#kp').removeClass('d-none')
            }else{
                $('#kp').addClass('d-none')
                $('#pensiun').removeClass('d-none')
            }
        })

        $('#modalFormPostDatatable').on('hidden.bs.modal', function(){
            $('.the-wrapper').addClass('d-none')
            $('#kp').addClass('d-none')
            $('#pensiun').addClass('d-none')
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
                        $('#' + key).val(val).trigger('change')
                    })

                    $('.the-wrapper').removeClass('d-none')
                    if(res.data.kategori == "Kenaikan Pangkat"){
                        $('#pensiun').addClass('d-none')
                        $('#kp').removeClass('d-none')
                    }else{
                        $('#kp').addClass('d-none')
                        $('#pensiun').removeClass('d-none')
                    }
                    $('#modalFormPostDatatable').modal('show')
                }
            })
        });
    })
</script>