$(document).ready(function(){
    /** Push Menu */
    if(localStorage.getItem("toggle") === "true") {
        $('.sidebar-mini').addClass('sidebar-collapse')
    }
    else if(localStorage.getItem("toggle") === "false") {
        $('.sidebar-mini').removeClass('sidebar-collapse')
    }
    
    $('#pushMenu').on('click', function(e) {
        if(!localStorage.getItem("toggle")) {
            localStorage.setItem("toggle", "true");
        } else {
            if(localStorage.getItem("toggle") === "true") {
                localStorage.setItem("toggle", "false");
            }
            else if(localStorage.getItem("toggle") === "false") {
                localStorage.setItem("toggle", "true")
            }
        }
    })
    
    /** Form Handler */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });

    // formPost
    $('#formPost').submit(function (event) {
        event.preventDefault();
        action = $('#formPost').attr('action');
        method = $('#formPost').attr('method');
        data   = $('#formPost').serialize();
    
        $('.form-control').removeClass('is-invalid')
        $('.invalid-feedback').html('')
        $.ajax({
            url: action,
            type: method,
            data: data,
            beforeSend: function () {
                HoldOn.open({
                    message: "Simpan data form!"
                })
            },
            success: function (res) {
                HoldOn.close()
                if(res.status){
                    $('#formPost').trigger('reset')
                    $('#formPost').find('input[type=hidden]').val("");
                    Swal.fire({
                        icon: 'success',
                        html: `<strong>${res.message}</strong>`
                    })
                    $('#dataTableDefault').DataTable().ajax.reload(null, false);
                }
                else{
                    Swal.fire({
                        icon: 'error',
                        html: `<strong>${res.message}</strong>`
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
    
    $('#formImport').submit(function (event) {
        event.preventDefault();
        var formImport = $('#formImport');
        action = formImport.attr('action');
        method = formImport.attr('method');
        data   = new FormData(formImport[0]);
    
        $('.form-control').removeClass('is-invalid')
        $('.invalid-feedback').html('')
        $.ajax({
            url: action,
            type: method,
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function () {
                HoldOn.open({
                    message: "Import file data!"
                })
            },
            success: function (res) {
                HoldOn.close()
                if(res.status){
                    $('#formImport').trigger('reset')
                    $('#formImport').find('input[type=hidden]').val("");
                    Swal.fire({
                        icon: 'success',
                        html: `<strong>${res.message}</strong>`
                    })
                    $('#dataTableDefault').DataTable().ajax.reload(null, false);
                }
                else{
                    Swal.fire({
                        icon: 'error',
                        html: `<strong>${res.message}</strong>`
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
    
    /** Action Button */
    $('.btn-download').on('click', function(e){
        e.preventDefault()
        $.ajax({
            url: $(this).attr('href'),
            type: "POST",
            beforeSend: function () {
                HoldOn.open({
                    message: "Sedang mendownload data dari server!"
                })
            },
            success: function (res) {
                HoldOn.close()
                if(res.status){
                    Swal.fire({
                        icon: 'success',
                        html: `<strong>${res.message}</strong>`
                    })
                    $('#dataTableDefault').DataTable().ajax.reload(null, false);
                }
                else{
                    Swal.fire({
                        icon: 'error',
                        html: `<strong>${res.message}</strong>`
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

    $('.btn-upload').on('click', function(e){
        e.preventDefault()
        $.ajax({
            url: $(this).attr('href'),
            type: "POST",
            beforeSend: function () {
                HoldOn.open({
                    message: "Sedang mengupload data ke server!"
                })
            },
            success: function (res) {
                HoldOn.close()
                if(res.status){
                    Swal.fire({
                        icon: 'success',
                        html: `<strong>${res.message}</strong>`
                    })
                    $('#dataTableDefault').DataTable().ajax.reload(null, false);
                }
                else{
                    Swal.fire({
                        icon: 'error',
                        html: `<strong>${res.message}</strong>`
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
    
    /** DataTables */
    $.extend($.fn.dataTable.defaults, {
        responsive: true,
        processing: true,
        serverSide: true,
        search: {
            return: true
        },
        language: {
            lengthMenu       : "_MENU_",
            search           : "_INPUT_",
            searchPlaceholder: "Masukkan kata kunci!",
            info             : "_START_ - _END_ dari <strong>_TOTAL_</strong> data",
            infoEmpty        : "0 - 0 dari <strong>0</strong> data",
            infoFiltered     : "(Hasil Filter dari <strong>_MAX_</strong> data yang ada!)",
            emptyTable       : "Tidak ada data yang tersedia pada tabel ini",
            zeroRecords      : "Tidak ada kata kunci yang cocok untuk pencarian!",
        }
    });
    
    $('div.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: '4rem'
    });
})