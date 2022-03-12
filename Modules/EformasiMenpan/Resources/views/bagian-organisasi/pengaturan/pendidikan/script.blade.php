<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('efm.bo.pngtrn.pendidikan.data') }}"
            },
            columns: [
                {data: 'updated_at', className: 'text-center w-5 align-middle d-none'},
                {data: 'efm_id', className: 'text-center w-5 align-middle'},
                {data: 'nama', className: 'align-middle'},
            ],
            order: [[ 0, "desc" ]]
        })
    })
</script>