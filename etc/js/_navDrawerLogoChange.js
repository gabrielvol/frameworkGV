$(document).ready(function () {
    $('.navOpen').click(function () {
        $(this).closest('#header').find('.logoH img').attr("src", "/nuevo/img/logo.png");
    });

    $('.navClose, .modal_nav, .mainMenu a').click(function () {
        $(this).closest('#header').find('.logoH img').attr("src", "/nuevo/img/logo_int.png");
    });
});