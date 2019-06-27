$(document).ready(function () {
    $('.pop_main button').click(function () {
        $('#formID').submit();
    });
    
    //Datepicker
    $("input.fecha").datepicker({
        numberOfMonths: 2,
        showButtonPanel: true
    });
});