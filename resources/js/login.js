let $ = require('jquery');

$(window).on('load', function () {
    "use strict";

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".icon-click").on('click', function () {
        $(this).toggleClass('icon-eye-close');

        if ($(this).hasClass('icon-eye-close')) {
            $("input[name='password']").prop({type: "text"});
        } else {
            $("input[name='password']").prop({type: "password"});
        }
    });

    $("#login-process").on('click', function () {
        const emailVal = $("input[name='email']").val();
        const passVal = $("input[name='password']").val();

        if (emailVal == "admin@gmail.com") {
            const url = 'admin';

            window.location.href = url;
        } else {
            const url = 'user';

            window.location.href = url;
        }
    })
})