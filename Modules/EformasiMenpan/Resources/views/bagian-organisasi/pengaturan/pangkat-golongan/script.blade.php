<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('efm.bo.pngtrn.pangkat-golongan.data') }}"
            },
            columns: [
                {data: 'efm_id', className: 'text-center w-5 align-middle'},
                {data: 'pangkat_golongan', className: 'align-middle'},
            ]
        })
    })
</script>