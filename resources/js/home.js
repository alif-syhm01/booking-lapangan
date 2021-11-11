require('../../node_modules/owl.carousel/dist/owl.carousel.min.js')

let $ = require('jquery');

$(window).on('load', function () {
    const owl = $(".owl-carousel");

    owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });

    const heightOfField = $("#list-field").height() + 100;
    const heightOfOrder = $("#how-to-order").height() - 450;
    const heightOfFeedback = heightOfField + heightOfOrder + $("#feedback").height() + 800;

    /* auto scroll to top */
    $(".back-to-top").on('click', function () {
        $("body, html").animate({ scrollTop: 0 }, 100, "linear");
    })

    /* auto scroll click on list field content */
    $("#nav-list-field").on('click', function () {
        $("body, html").animate({ scrollTop: heightOfField}, 100, "linear");
    });

    /* auto scroll click on list how to order */
    $("#nav-list-how-order").on('click', function () {
        $("body, html").animate({scrollTop: heightOfOrder}, 100, "linear");
    });

    /* auto scroll click on list feedback */
    $("#nav-list-feedback").on('click', function () {
        $("body, html").animate({scrollTop: heightOfFeedback}, 100, "linear");
    })
});