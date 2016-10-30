$(document).ready(function () {
    /* button actions */
    $(".login").click(function () {
        $(".modalBG, .login").fadeToggle("slow", "linear").removeClass('displayNone');
    });
    $('.modalBG, .close').click(function () {
        $('.modalBG, .popup').hide().addClass('displayNone');
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
    
    /* mouse actions */
    $("#lavida .a").mouseover(function () {
        $("#lavida .perrito").animate({bottom: '0'}, 1000, 'swing');
    });
    $("#lavida .a").mouseleave(function () {
        $("#lavida .perrito").animate({bottom: '-54px'}, 1000, 'swing');
    });
});