<script>
    $(document).ready(function(){
        var dataTableDefault = $('#dataTableDefault').DataTable({
            ajax: {
                url: "{{ route('efm.bo.bezzeting.data') }}",
                data: function (d) {
                    d.data_status         = $('#filter_data_status').val();
                    d.efm_head_id_level_1 = $('#filter_efm_head_id_level_1').val();
                    d.efm_head_id_level_2 = $('#filter_efm_head_id_level_2').val();
                    d.efm_head_id_level_3 = $('#filter_efm_head_id_level_3').val();
                    d.efm_head_id_level_4 = $('#filter_efm_head_id_level_4').val();
                    d.efm_head_id_level_5 = $('#filter_efm_head_id_level_5').val();
                }
            },
            columns: [
                {data: 'kode_cepat', className: 'w-5 text-nowrap align-middle d-none'},
                {data: 'nama', className: 'align-middle'},
                {data: 'posisi', className: 'text-center w-5 align-middle'},
                {data: 'abk', className: 'text-center w-5 align-middle'},
                {data: 'nip', className: 'text-center w-5 align-middle'},
                {data: 'currentcpns', className: 'text-center w-5 align-middle d-none'},
                {data: 'currentpns', className: 'text-center w-5 align-middle d-none'},
                {data: 'currentpppk', className: 'text-center w-5 align-middle d-none'},
                {data: 'currentlainnya', className: 'text-center w-5 align-middle d-none'},
                {data: 'detail', className: 'align-middle'},
                {data: 'data_status', className: 'text-center w-5 align-middle'},
                {data: 'action', className: 'text-center w-5 align-middle'},
            ]
        })


        $('#formDownloadModalDatatable').submit(function (event) {
            event.preventDefault();
            action = $('#formDownloadModalDatatable').attr('action');
            method = $('#formDownloadModalDatatable').attr('method');
            data   = $('#formDownloadModalDatatable').serialize();
        
            $('.form-control').removeClass('is-invalid')
            $('.invalid-feedback').html('')
            $.ajax({
                url: action,
                type: method,
                data: data,
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
                        $('#modalFormDownloadDatatable').modal('hide')
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
        });
        
        $('#dataTableDefault').on('click', '.btn-edit', function (event) {
            event.preventDefault();
            $.ajax({
                url: $(this).attr('href'),
                beforeSend: function () {
                    HoldOn.open()
                },
                success:function (res) {
                    HoldOn.close()
                    $('#formPostModalDatatable').attr({
                        'action': res.data.action,
                        'method' : 'PUT'
                    });

                    $.each(res.data, function(key, val){
                        $('#' + key).val(val)
                    })

                    $('#modalFormPostDatatable').modal('show')
                }
            })
        });
        
        $('#modalFormDownloadDatatable').on('show.bs.modal', function(){
            $('#efm_head_id_level_2').empty()
            $('#efm_head_id_level_2').append('<option></option>')
            $('#efm_head_id_level_3').empty()
            $('#efm_head_id_level_3').append('<option></option>')
            $('#efm_head_id_level_4').empty()
            $('#efm_head_id_level_4').append('<option></option>')
            $('#efm_head_id_level_5').empty()
            $('#efm_head_id_level_5').append('<option></option>')
            $.post("{{ route('efm.bo.bezzeting.getLevel') }}", function(res){
                $('#efm_head_id_level_1').empty()
                $('#efm_head_id_level_1').append('<option></option>')
                $.each(res.data, function(key, val){
                    $('#efm_head_id_level_1').append('<option value="'+val.efm_head_id+'">'+val.nama+'</option>')
                })
            })
        });
        
        $('#efm_head_id_level_1').on('select2:select', function(){
            $('#efm_head_id_level_3').empty()
            $('#efm_head_id_level_3').append('<option></option>')
            $('#efm_head_id_level_4').empty()
            $('#efm_head_id_level_4').append('<option></option>')
            $('#efm_head_id_level_5').empty()
            $('#efm_head_id_level_5').append('<option></option>')
            $.post("{{ route('efm.bo.bezzeting.getLevel') }}", {efm_head_id: $(this).val()}, function(res){
                $('#efm_head_id_level_2').empty()
                $('#efm_head_id_level_2').append('<option></option>')
                $.each(res.data, function(key, val){
                    $('#efm_head_id_level_2').append('<option value="'+val.efm_head_id+'">'+val.nama+'</option>')
                })
            })
        })

        $('#efm_head_id_level_2').on('select2:select', function(){
            $('#efm_head_id_level_4').empty()
            $('#efm_head_id_level_4').append('<option></option>')
            $('#efm_head_id_level_5').empty()
            $('#efm_head_id_level_5').append('<option></option>')
            $.post("{{ route('efm.bo.bezzeting.getLevel') }}", {efm_head_id: $(this).val()}, function(res){
                $('#efm_head_id_level_3').empty()
                $('#efm_head_id_level_3').append('<option></option>')
                $.each(res.data, function(key, val){
                    $('#efm_head_id_level_3').append('<option value="'+val.efm_head_id+'">'+val.nama+'</option>')
                })
            })
        })

        $('#efm_head_id_level_3').on('select2:select', function(){
            $('#efm_head_id_level_5').empty()
            $('#efm_head_id_level_5').append('<option></option>')
            $.post("{{ route('efm.bo.bezzeting.getLevel') }}", {efm_head_id: $(this).val()}, function(res){
                $('#efm_head_id_level_4').empty()
                $('#efm_head_id_level_4').append('<option></option>')
                $.each(res.data, function(key, val){
                    $('#efm_head_id_level_4').append('<option value="'+val.efm_head_id+'">'+val.nama+'</option>')
                })
            })
        })

        $('#efm_head_id_level_4').on('select2:select', function(){
            $.post("{{ route('efm.bo.bezzeting.getLevel') }}", {efm_head_id: $(this).val()}, function(res){
                $('#efm_head_id_level_5').empty()
                $('#efm_head_id_level_5').append('<option></option>')
                $.each(res.data, function(key, val){
                    $('#efm_head_id_level_5').append('<option value="'+val.efm_head_id+'">'+val.nama+'</option>')
                })
            })
        })

        $.post("{{ route('efm.bo.bezzeting.getLevel') }}", function(res){
            $('#filter_efm_head_id_level_1').empty()
            $('#filter_efm_head_id_level_1').append('<option></option>')
            $.each(res.data, function(key, val){
                $('#filter_efm_head_id_level_1').append('<option value="'+val.efm_head_id+'">'+val.nama+'</option>')
            })
        })

        $('#filter_efm_head_id_level_1').on('select2:select', function(){
            $('#filter_efm_head_id_level_3').empty()
            $('#filter_efm_head_id_level_3').append('<option></option>')
            $('#filter_efm_head_id_level_4').empty()
            $('#filter_efm_head_id_level_4').append('<option></option>')
            $('#filter_efm_head_id_level_5').empty()
            $('#filter_efm_head_id_level_5').append('<option></option>')
            $.post("{{ route('efm.bo.bezzeting.getLevel') }}", {efm_head_id: $(this).val()}, function(res){
                $('#filter_efm_head_id_level_2').empty()
                $('#filter_efm_head_id_level_2').append('<option></option>')
                $.each(res.data, function(key, val){
                    $('#filter_efm_head_id_level_2').append('<option value="'+val.efm_head_id+'">'+val.nama+'</option>')
                })
            })
        })

        $('#filter_efm_head_id_level_2').on('select2:select', function(){
            $('#filter_efm_head_id_level_4').empty()
            $('#filter_efm_head_id_level_4').append('<option></option>')
            $('#filter_efm_head_id_level_5').empty()
            $('#filter_efm_head_id_level_5').append('<option></option>')
            $.post("{{ route('efm.bo.bezzeting.getLevel') }}", {efm_head_id: $(this).val()}, function(res){
                $('#filter_efm_head_id_level_3').empty()
                $('#filter_efm_head_id_level_3').append('<option></option>')
                $.each(res.data, function(key, val){
                    $('#filter_efm_head_id_level_3').append('<option value="'+val.efm_head_id+'">'+val.nama+'</option>')
                })
            })
        })

        $('#filter_efm_head_id_level_3').on('select2:select', function(){
            $('#filter_efm_head_id_level_5').empty()
            $('#filter_efm_head_id_level_5').append('<option></option>')
            $.post("{{ route('efm.bo.bezzeting.getLevel') }}", {efm_head_id: $(this).val()}, function(res){
                $('#filter_efm_head_id_level_4').empty()
                $('#filter_efm_head_id_level_4').append('<option></option>')
                $.each(res.data, function(key, val){
                    $('#filter_efm_head_id_level_4').append('<option value="'+val.efm_head_id+'">'+val.nama+'</option>')
                })
            })
        })

        $('#filter_efm_head_id_level_4').on('select2:select', function(){
            $.post("{{ route('efm.bo.bezzeting.getLevel') }}", {efm_head_id: $(this).val()}, function(res){
                $('#filter_efm_head_id_level_5').empty()
                $('#filter_efm_head_id_level_5').append('<option></option>')
                $.each(res.data, function(key, val){
                    $('#filter_efm_head_id_level_5').append('<option value="'+val.efm_head_id+'">'+val.nama+'</option>')
                })
            })
        })
    })
</script>