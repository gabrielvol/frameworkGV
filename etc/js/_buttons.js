$(document).ready(function () {
/* // Button Pop Open ------------------------------------------------------- */
    $('.button_certificado').click(function () {
        $(this).attr('aria-pressed', 'true');
        $(this).closest('body').find('.modal_certificado').removeClass('displayNone');
    });
    
    $('.button_certificado_iqnet_open').click(function () {
        $(this).closest('body').find('.pop_certificado_iqnet').removeClass('displayNone');
    });
    
    $('.button_certificado_iram_open').click(function () {
        $(this).closest('body').find('.pop_certificado_iram').removeClass('displayNone');
    });
    
    $('.pop_certificado img, .button_pop_close').click(function () {
        $(this).closest('body').find('.button_certificado').attr('aria-pressed', 'false');
        $(this).closest('body').find('.pop_certificado_iqnet').addClass('displayNone');
        $(this).closest('body').find('.pop_certificado_iram').addClass('displayNone');
        $(this).closest('body').find('.modal_certificado').addClass('displayNone');
    });
    
    $('.pop_certificado img').bind('contextmenu', function(e){
        return false;
    });


/* // Toggle Attribute ------------------------------------------------------ */
    var $nosAnchor = $('.nosAnchor');
    if ($nosAnchor.attr('aria-current')) {
        $nosAnchor.removeAttr('aria-current');
    } else {
        $nosAnchor.attr('aria-current', 'page');
    }


/* // Button Hover ---------------------------------------------------------- */
    $('.servicios_panel h2').hover(function () {   
        $(this).closest('li').find('.servicios_panel_txt').addClass('hovered');
    }, function() {
        $(this).closest('li').find('.servicios_panel_txt').removeClass('hovered');
    });


/* // Font Sizing ----------------------------------------------------------- */
    $('.reducir').click(function () {
        var ourText = $('section p');
        var currFontSize = ourText.css('fontSize');
        var finalNum = parseFloat(currFontSize, 10);
        var stringEnding = currFontSize.slice(-2);
        finalNum /= 1.2;
        ourText.css('fontSize', finalNum + stringEnding);
    });

    $('.aumentar').click(function () {
        var ourText = $('section p');
        var currFontSize = ourText.css('fontSize');
        var finalNum = parseFloat(currFontSize, 10);
        var stringEnding = currFontSize.slice(-2);
        finalNum *= 1.2;
        ourText.css('fontSize', finalNum + stringEnding);
    });


/* // Modify html lang attr // REF [28] ------------------------------------- */
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


/* // Logo change ----------------------------------------------------------- */
var dir_env = '/test';

$(document).ready(function () {
    $('.button_hamb_open').click(function () {
        $(this).closest('#header').find('.logo_header img').attr("src", dir_env + "/img/logo.png");
    });

    $('.button_hamb_close, .modal_nav, .nav_nav a').click(function () {
        $(this).closest('#header').find('.logo_header img').attr("src", dir_env + "/img/logo_int.png");
    });
});