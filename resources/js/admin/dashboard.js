require('../bootstrap');
require('../../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.min.js');

/* load jquery datatable */
require('../../../node_modules/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js');
require('../../../node_modules/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');

let $ = require('jquery');
let Swal = require('sweetalert2');

$(window).on('load', function () {
    "use strict";

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content'),
        }
    });

    let bookingTable = $("#booking").DataTable();
})