<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            // responsive: false,
            // searching: false,
            ajax: {
                url: "{{ route('docudigital-downloader.berkas-asn.data') }}",
                data: function (d) {
                    d.kategori        = $('#filter_kategori').val();
                    d.keterangan      = $('#filter_keterangan').val();
                    d.nomor_identitas = $('#filter_nomor_identitas').val();
                }
            },
            columns: [
                {data: 'nomor_identitas', className: 'w-5 text-nowrap align-middle'},
                {data: 'nama', className: 'w-5 text-nowrap align-middle'},
                {data: 'kategori', className: 'w-5 align-middle'},
                {data: 'keterangan', className: 'align-middle'},
                {data: 'file', className: 'w-5 text-nowrap align-middle'},
            ]
        })
    })
</script>