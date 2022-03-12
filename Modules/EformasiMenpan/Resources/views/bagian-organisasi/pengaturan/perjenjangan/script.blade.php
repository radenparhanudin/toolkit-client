<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('efm.bo.pngtrn.perjenjangan.data') }}"
            },
            columns: [
                {data: 'efm_id', className: 'text-center w-5 align-middle'},
                {data: 'perjenjangan', className: 'align-middle'},
            ]
        })
    })
</script>