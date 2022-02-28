$(document).ready(function(){
    /** Form Handler */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });

    $('.select2').select2()

    $('.select2-infinity').select2({
        minimumResultsForSearch: Infinity
    })

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
                    $('#formPost').find('select').val(null).trigger('change')
                    $('#formPost').attr({
                        'action': res.data.action,
                        'method' : 'POST'
                    });
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
    });

    $('#formPostModal').submit(function (event) {
        event.preventDefault();
        action = $('#formPostModal').attr('action');
        method = $('#formPostModal').attr('method');
        data   = $('#formPostModal').serialize();
    
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
                    $('#formPostModal').attr({
                        'action': res.data.action,
                        'method' : 'POST'
                    });
                    Swal.fire({
                        icon: 'success',
                        html: res.message
                    })
                    $('#modalFormPost').modal('hide')
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

    $('#formImport').submit(function (event) {
        event.preventDefault();
        var formImport = $('#formImport');
            action     = formImport.attr('action');
            method     = formImport.attr('method');
            data       = new FormData(formImport[0]);
    
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
                    message: "Import data sedang berjalan!"
                })
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
    });

    /** Modal */
    $('#modalFormPost').on('hidden.bs.modal', function(e){
        $('#formPostModal').trigger('reset')
        $('#formPostModal').find('select').val(null).trigger('change')
        $('#formPostModal').find('.form-control').removeClass('is-invalid')
        $('#formPostModal').find('.invalid-feedback').html('')
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

    $('#formFilterDatatable').on('submit', function(e) {
        $('#dataTableDefault').DataTable().draw();
        e.preventDefault();
    });

    $('.btn-clear-datatable').on('click', function(e){
        e.preventDefault();
        $('#formFilterDatatable').trigger('reset')
        $('#formFilterDatatable').find('select').val(null).trigger('change')
        $('#modalFilterDatatables').modal('hide')
        $('#dataTableDefault').dataTable().fnFilter('');
        $('#dataTableDefault').DataTable().draw();
    })
    
    $('div.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: '4rem'
    });

    $('#dataTableDefault').on('click', '.btn-delete', function (event) {
        event.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Tindakan ini akan menghapus data dan tidak dapat dikembalikan lagi!',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak!',
            backdrop: true,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: $(this).attr('href'),
                    type: 'delete',
                    beforeSend: function () {
                        HoldOn.open()
                    },
                    success:function (res) {
                        HoldOn.close()
                        if (res.status) {
                            Swal.fire({
                                icon: 'success',
                                html: res.message
                            })
                            $('#dataTableDefault').DataTable().ajax.reload(null, false);
                        }
                        else {
                            Swal.fire({
                                icon: 'success',
                                html: res.message
                            })
                        }
                    }
                })
            }
        })
    });

    /** Button Handler */
    $('.btn-sync').on('click', function(e){
        e.preventDefault()
        $.ajax({
            url: $(this).attr('href'),
            type: "POST",
            beforeSend: function () {
                HoldOn.open({
                    message: "Sedang melakukan sinkronisasi!"
                })
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
            }
        })
    })

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
            }
        })
    })
})