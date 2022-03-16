<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('docudigital-uploader.list-file.data') }}",
                data: function (d) {
                    d.status      = $('#filter_status').val();
                }
            },
            columns: [
                {data: 'nomor_identitas', className: 'text-nowrap  w-20 align-middle'},
                {data: 'kode_file', className: ' w-20 align-middle'},
                {data: 'file', className: 'align-middle'},
                {data: 'status_upload', className: 'text-center w-20 align-middle'},
                {data: 'action', className: 'text-center w-5 align-middle'},
            ]
        })
    })

    $('.btn-upload-keserver-docudigital').on('click', function(e){
        e.preventDefault();
        $('.form-control').removeClass('is-invalid')
        $('.invalid-feedback').html('')
        $.ajax({
            url: "{{ route('docudigital-uploader.list-file.upload') }}",
            type: "POST",
            data: {tahun: $('#tahun').val()},
            beforeSend: function () {
                HoldOn.open()
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
            },
            error: function (xhr) {
                HoldOn.close()
                var res = xhr.responseJSON;
                if ($.isEmptyObject(res) == false) {
                    $.each(res.errors, function (key, value) {
                        $('#' + key).addClass('is-invalid')
                        $('#feedback_' + key).html(value[0])
                    });
                }
            }
        })
    })
</script>