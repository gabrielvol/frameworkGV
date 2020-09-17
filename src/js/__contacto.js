$(document).ready(function () {
    $('.enviar').scrollPosReload(); // scrollKeep.js

    $('.pop_general button').click(function () {
        $('#formID').submit();
    });
    
    
/* // jQuery Datepicker ----------------------------------------------------- */
    $("input.fecha").datepicker({
        numberOfMonths: 2,
        showButtonPanel: true
    });
});