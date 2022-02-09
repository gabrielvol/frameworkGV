$(document).ready(function () {
    $('.button_form_submit').scrollPosReload(); // REF [25]
    
/*
    $('.pop_global button').click(function () {
        $('#formID').submit();
    });
*/    
    
/* // jQuery Datepicker ----------------------------------------------------- */
    $("input.fecha").datepicker({
        numberOfMonths: 2,
        showButtonPanel: true
    });
});