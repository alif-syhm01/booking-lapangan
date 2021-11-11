require('../bootstrap');
require('../../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.min.js');
/* load jquery datatable */
require('../../../node_modules/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js');
require('../../../node_modules/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');

let $ = require('jquery');
let Swal = require('sweetalert2');

$(window).on('load', function () {
    let fieldTable = $("#data-field").DataTable();

    $("#data-field").on('click', '#edit', function () {
        /* showing modal */
        $("#edit-field").modal("show");
    });

    $("#data-field").on('click', '#delete', function () {
        /* call modal sweet-alert */
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data mu akan terhapus",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085D6',
            cancelButtonColor: '#D33',
            confirmButtonText: 'Tentu, Hapus saja!'
        }).then((result) => {
            if (result.isConfirmed) {
                alert('data mu telah terhapus')
            }
        })
    })

    $("#delete-all-fields").on('click', function () {
        /* call modal sweet-alert */
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data mu akan terhapus",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085D6',
            cancelButtonColor: '#D33',
            confirmButtonText: 'Tentu, Hapus saja!'
        }).then((result) => {
            if (result.isConfirmed) {
                alert('data mu telah terhapus')
            }
        })
    });
});