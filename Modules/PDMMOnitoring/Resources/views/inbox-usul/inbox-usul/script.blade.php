<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            responsive: false,
            ajax: {
                url: "{{ route('pdm-monitoring.inbox-usul.inbox-usul.data') }}",
                data: function (d) {
                    d.unit_verifikator = $('#filter_unit_verifikator').val();
                    d.status_usulan    = $('#filter_status_usulan').val();
                    d.riwayat          = $('#filter_riwayat').val();
                }
            },
            columns: [
                {data: 'nip', className: 'w-5 align-middle text-nowrap'},
                {data: 'nama', className: 'w-5 align-middle text-nowrap'},
                {data: 'detail_layanan', className: 'w-5 align-middle text-nowrap'},
                {data: 'jenis_layanan_nama', className: 'align-middle text-nowrap'},
                {data: 'status_usulan_nama', className: 'align-middle text-nowrap'},
                {data: 'tanggal_usulan', className: 'w-5 align-middle text-nowrap d-none'},
                {data: 'sumber', className: 'w-5 align-middle'},
                {data: 'unor_verifikator_nama', className: 'align-middle'},
            ],
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

        $.get("{{ route('pdm-monitoring.inbox-usul.inbox-usul.getRiwayat') }}", function(res){
            $('#filter_riwayat').empty()
            $('#filter_riwayat').append("<option></option>")
            $.each(res.data, function(key, val){
                $('#filter_riwayat').append('<option value="'+val.jenis_layanan_nama+'">'+val.jenis_layanan_nama+'</option>')
            })
        })

        
    })
</script>