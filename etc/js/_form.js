$(document).ready(function () {
/* // Form Actions ---------------------------------------------------------- */
    checkFields ($('.radio-list input:checked, .offices-list-map ul input:checked'));

    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="no"){
            $(".vendeinet").hide();
        }
        if($(this).attr("value")=="si"){
            $(".vendeinet").show();
        }               
    });

    $("#formMainID").submit(function (e) {
        var mensaje = $("#mensaje").val();

        if (mensaje.length > 200) {
            e.preventDefault();
            alert("El mensaje no puede tener más de 200 caracteres.");
        }
    });

    $('#mensaje').on('paste', function (e) {
        e.preventDefault();
        alert('No se permite pegar texto en este campo.');
    });

});