require('../bootstrap');
/* dont use double bootstrap in here!!! */
require('../../../node_modules/admin-lte/dist/js/adminlte.min.js');
require('../../../node_modules/admin-lte/plugins/jquery/jquery.min.js');
/* load jquery datatable */
require('../../../node_modules/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js');
require('../../../node_modules/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');

let $ = require('jquery');
let Swal = require('sweetalert2');

$(window).on('load', function () {
    /* logout click function */
    $("#logout").on('click', function () {
        Swal.fire({
            text: 'Berhasil logout, tunggu sebentar',
            icon: "success",
            showConfirmButton: false,
            timer: 2000
        }).then(function () {
            const url = "login-page";
            // return redirect page after alert is closed
            window.location = url;
        })
    })
})