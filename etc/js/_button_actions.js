$(document).ready(function () {
    /* button actions */
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
        
    // toggle attribute
    var $nosAnchor = $('.nosAnchor');
    if ($nosAnchor.attr('aria-current')) {
        $nosAnchor.removeAttr('aria-current');
    } else {
        $nosAnchor.attr('aria-current', 'page');
    }
});