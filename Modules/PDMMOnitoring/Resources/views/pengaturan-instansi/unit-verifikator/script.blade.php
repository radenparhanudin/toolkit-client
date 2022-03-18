<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('pdm-monitoring.pengaturan-instansi.unit-verifikator.data') }}"
            },
            columns: [
                {data: 'unit_verifikator', className: 'align-middle'},
            ],
        })
    })
</script>