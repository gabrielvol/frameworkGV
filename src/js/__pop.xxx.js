$(document).ready(function () {
    $('.pop_open_XXX').click(function () {        
        $(this).closest('body').find('.pop_XXX').removeClass('displayNone');
        $(this).closest('body').find('.modal_XXX').removeClass('displayNone');
    });
    
    $('.modal_XXX, .button_pop_close, .button_pop_submit').click(function () {
        $(this).closest('body').find('.pop_XXX').addClass('displayNone');
        $(this).closest('body').find('.modal_XXX').addClass('displayNone');
    });
});