$(document).ready(function () {
    //Datepicker
    $("input.fecha").datepicker({
        numberOfMonths: 2,
        showButtonPanel: true
    });

    //Cerrar modal
    $('.modal, .close').click(function () {
        $('.modal, .popup').hide();
    });
});