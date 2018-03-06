$(document).ready(function () {
    //modify html lang attr
    $(".it a").click(function () {
        $('html').attr('lang', 'it_IT');
    });
    $(".es a").click(function () {
        $('html').attr('lang', 'es_AR');
    });
    $(".en a").click(function () {
        $('html').attr('lang', 'en_GB');
    });
});