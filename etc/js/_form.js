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
});