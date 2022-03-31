$(document).ready(function () { 
    $('.button_pop_open_xxx').click(function () {
        $(this).attr('aria-pressed', 'true');
        $(this).closest('body').find('.pop_xxx').removeClass('displayNone');
        $(this).closest('body').find('.modal_xxx').removeClass('displayNone');
    });
        
    $('.modal_xxx, .button_pop_close, .button_pop_submit').click(function () {
        $(this).closest('body').find('.button_pop_open_xxx').attr('aria-pressed', 'false');
        $(this).closest('body').find('.pop_xxx').addClass('displayNone');
        $(this).closest('body').find('.modal_xxx').addClass('displayNone');
    });
    

/* // Certificado Giraldes / img no descargable ----------------------------- */
    $('.button_xxx').click(function () {
        $(this).attr('aria-pressed', 'true');
        $(this).closest('body').find('.pop_xxx').removeClass('displayNone');
        $(this).closest('body').find('.modal_xxx').removeClass('displayNone');
    });
    
    $('.button_xxx_A_open').click(function () {
        $(this).closest('body').find('.pop_xxx_A').removeClass('displayNone');
    });
    
    $('.button_xxx_B_open').click(function () {
        $(this).closest('body').find('.pop_xxx_B').removeClass('displayNone');
    });
    
    $('.pop_xxx img, .modal_xxx, .button_pop_close').click(function () {
        $(this).closest('body').find('.button_xxx').attr('aria-pressed', 'false');
        $(this).closest('body').find('.pop_xxx').addClass('displayNone');
        $(this).closest('body').find('.pop_xxx_A').addClass('displayNone');
        $(this).closest('body').find('.pop_xxx_B').addClass('displayNone');
        $(this).closest('body').find('.modal_xxx').addClass('displayNone');
    });
    
    $('.pop_xxx img').bind('contextmenu', function(e){
        return false;
    });
});