$(document).ready(function () {
    $('.nov a').click(function () {        
        $(this).closest('body').find('.pop_construccion').removeClass('displayNone');
        $(this).closest('body').find('.modal_warning').removeClass('displayNone');
    });
    
    $('.modal_warning, .button_pop_close, .button_pop_submit').click(function () {
        $(this).closest('body').find('.pop_construccion').addClass('displayNone');
        $('.modal_warning, .pop_warning').addClass('displayNone');
    });
});