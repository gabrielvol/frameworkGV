$(document).ready(function () {
    $('.navOpen').click(function () {
        $(this).closest('#header').find('.logoH img').attr("src", "/nuevo/img/logo.png");
    });

    $('.navClose, .modalNav').click(function () {
        $(this).closest('#header').find('.logoH img').attr("src", "/nuevo/img/logo_int.png");
    });
});