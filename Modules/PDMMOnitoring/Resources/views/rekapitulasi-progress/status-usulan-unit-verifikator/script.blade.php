<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            searching: false,
            ajax: {
                url: "{{ route('pdm-monitoring.rekapitulasi-progress.status-usulan-unit-verifikator.data') }}",
                data: function (d) {
                    d.unit_verifikator = $('#filter_unit_verifikator').val();
                    d.status_usulan    = $('#filter_status_usulan').val();
                }
            },
            columns: [
                {data: 'unit_verifikator', className: 'align-middle'},
                {data: 'jumlah_usulan', className: 'w-5 text-center align-middle'},
                {data: 'status_usulan', className: 'align-middle'},
                {data: 'jumlah_usulan_status', className: 'w-10 text-nowrap text-center align-middle'},
                {data: 'persentase', className: 'w-5 text-center align-middle'},
            ],
        })

        $('.btn-rekap').on('click', function(e){
            e.preventDefault()
            $.ajax({
                url: $(this).attr('href'),
                type: "POST",
                data: {
                    status_usulan: $('#status_usulan').val()
                },
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

        $.get("{{ route('pdm-monitoring.pengaturan-instansi.unit-verifikator.get') }}", function(res){
            $('#filter_unit_verifikator').empty()
            $('#filter_unit_verifikator').append("<option></option>")
            $.each(res.data, function(key, val){
                $('#filter_unit_verifikator').append('<option value="'+val.id+'">'+val.unit_verifikator+'</option>')
            })
        })

        $.get("{{ route('pdm-monitoring.pengaturan-instansi.status-usulan.get') }}", function(res){
            $('#filter_status_usulan').empty()
            $('#filter_status_usulan').append("<option></option>")
            $.each(res.data, function(key, val){
                $('#filter_status_usulan').append('<option value="'+val.kode+'">'+val.status_usulan+'</option>')
            })
        })
    })
</script>