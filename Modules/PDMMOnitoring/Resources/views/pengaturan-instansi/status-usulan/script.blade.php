<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('pdm-monitoring.pengaturan-instansi.status-usulan.data') }}"
            },
            columns: [
                {data: 'kode', className: 'w-5 text-center align-middle'},
                {data: 'status_usulan', className: 'align-middle'},
            ],
        })
    })
</script>