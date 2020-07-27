$(document).ready(function () {
    $('.button_hamb_open').click(function () {
        $(this).closest('#header').find('.logo_header img').attr("src", "/nuevo/img/logo.png");
    });

    $('.button_hamb_close, .modal_nav, .nav_nav a').click(function () {
        $(this).closest('#header').find('.logo_header img').attr("src", "/nuevo/img/logo_int.png");
    });
});