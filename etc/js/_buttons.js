$(document).ready(function () {
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


/* // Item selection -------------------------------------------------------- */
$('.item').click(function () {
    $(this).closest('.list').find('.item').attr('aria-pressed', 'false');

    $(this).attr('aria-pressed', function (i, attr) {
        return attr === 'true' ? 'false' : 'true';
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