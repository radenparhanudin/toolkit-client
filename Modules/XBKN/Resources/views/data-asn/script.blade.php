<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('x-bkn.data-asn.data') }}"
            },
            columns: [
                {data: 'nip', className: 'align-middle'},
                {data: 'nama', className: 'align-middle'}
            ]
        })
    })
</script>