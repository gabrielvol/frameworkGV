$(document).ready(function () {
/* // Button Actions -------------------------------------------------------- */
    $(".login").click(function () {
        $(".modal_bg_global, .login").fadeToggle("slow", "linear").removeClass('displayNone');
    });
    $('.modal_bg_global, .close').click(function () {
        $('.modal_bg_global, .popup').hide().addClass('displayNone');
    });
    $('.contacto').click(function () {
        $(".logo").css({"display": 'block'});
        $(".logo").toggleClass("selected");
    });
    $("p").on("mouseover", function () {
        $(".selector").css("color", "#fff");
    });
    $(".a").click(function () {
        $(this).find("span").toggleClass("open");
        $(this).closest("li").find(".class").slideToggle("slow", "linear");
    });


/* // Toggle Attribute ------------------------------------------------------ */
    var $nosAnchor = $('.nosAnchor');
    if ($nosAnchor.attr('aria-current')) {
        $nosAnchor.removeAttr('aria-current');
    } else {
        $nosAnchor.attr('aria-current', 'page');
    }


/* // Butto Hover ----------------------------------------------------------- */
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
var url_entorno = '/test';

$(document).ready(function () {
    $('.button_hamb_open').click(function () {
        $(this).closest('#header').find('.logo_header img').attr("src", url_entorno + "/img/logo.png");
    });

    $('.button_hamb_close, .modal_nav, .nav_nav a').click(function () {
        $(this).closest('#header').find('.logo_header img').attr("src", url_entorno + "/img/logo_int.png");
    });
});


/* // Button SiteTop // REF [18] -------------------------------------------- */
$(window).scroll(function () {
    if ($(this).scrollTop() > 300) { 
        $('.button_siteTop').addClass('button_siteTop_visible');
    } else {
        $('.button_siteTop').removeClass('button_siteTop_visible');
    }
});