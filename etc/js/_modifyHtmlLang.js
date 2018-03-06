$(document).ready(function () {
// Modify html lang attr
    $(".ar a").click(function () {
        $('html').attr('lang', 'es_AR');
    });
    $(".br a").click(function () {
        $('html').attr('lang', 'pt_BR');
    });
    $(".gb a").click(function () {
        $('html').attr('lang', 'en_GB');
    });
});