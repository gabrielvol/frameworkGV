$(document).ready(function () {
    //Hamburger Menu
    $(".hamb").click(function () {
        $(this).closest("#nav").find(".mainMenu").removeClass('displayNoneBT');
    });
    $('.mainMenu a').click(function () {
        $(this).closest(".mainMenu").addClass('displayNoneBT');
    });

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

    /* vimeo videos */
    $(".videoF").click(function () {
        $(".modalBG, .videoFF").fadeToggle("slow", "linear").removeClass('displayNone');
        $('.videoFF iframe').attr('src', '//player.vimeo.com/video/91925645');
    });
    $('.modalBG, .popup').click(function () {
        $('.modalBG, .popup').hide().addClass('displayNone');
        $('.popup iframe').attr('src', '');
    });
    
    //modify html lang attr
    $(".it a").click(function () {
        $('html').attr('lang', 'it_IT');
    });
    $(".es a").click(function () {
        $('html').attr('lang', 'es_AR');
    });
    $(".en a").click(function () {
        $('html').attr('lang', 'en_GB');
    });

    /* font sizing */
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

    /* Ancho Automático de ul */
    $("ul.pag").css("width", $("ul.pag").children("li").size() * 39);
    
    $('.mediaMenu li:first').addClass('selected');
        
    // Responsive images
    $('.boxSection img').each(function(){
        $(this).load(function(){
            var width = $(this).width();
            if(width > 300){
                $(this).addClass('imgFullSizeMobile');
            }
            if(width > 710){
                $(this).addClass('imgFullSizeTablet');
            }
            if(width > 910){
                $(this).addClass('imgFullSizeTabletLandscape');
            }
            if(width > 960){
                $(this).addClass('imgFullSizeDesktpop');
            }
        });
    });
    
    //Modal para zoom de imágenes
    $(".zoomButton").click(function(){
        $(".popImgZoom img").attr('src', "/"+$(this).attr('data-img'));
        $(".modalBG, .popImgZoom").fadeToggle("slow", "linear").removeClass('displayNone');
    });
    
    //Smooth scroll
    smoothScroll.init({
        speed: 2000,
        easing: 'easeOutQuint'
    });
});

// Top Scroll
$(window).scroll(function () {
    if ($(this).scrollTop() > 96) {        
        $('nav.main').css({
            position: 'fixed',
            top: 30
        });
        $('.miAnses').css({
            marginTop: 46
        });
        $('nav.main ul').removeClass('roundedM');
        $('.logo img').attr("src", "/img/logo.svg");
    } else {        
        $('nav.main').css({
            position: 'relative',
            top: 0
        });
        $('.miAnses').css({
            marginTop: 0
        });
        $('nav.main ul').addClass('roundedM');
    }
});
    
// Top Scroll
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.mainNav, .hamb').addClass('topper');
    } else {
        $('.mainNav, .hamb').removeClass('topper');
    }
});

// Change SRC
$(document).ready(function () {
    var width = $(window).width();
    var srcw = $('.videoContainer source.webm').attr('src');
    var srco = $('.videoContainer source.ogvv').attr('src');
    var srcm = $('.videoContainer source.mppp').attr('src');
    if (width < 399) {
        $('.videoContainer source.webm').attr('src', srcw.replace('size', '400'));
        $('.videoContainer source.ogvv').attr('src', srco.replace('size', '400'));
        $('.videoContainer source.mppp').attr('src', srcm.replace('size', '400'));
    }
    if (width > 400) {
        $('.videoContainer source.webm').attr('src', srcw.replace('size', '768'));
        $('.videoContainer source.ogvv').attr('src', srco.replace('size', '768'));
        $('.videoContainer source.mppp').attr('src', srcm.replace('size', '768'));
    }
    if (width > 768) {
        $('.videoContainer source.webm').attr('src', srcw.replace('size', '1400'));
        $('.videoContainer source.ogvv').attr('src', srco.replace('size', '1400'));
        $('.videoContainer source.mppp').attr('src', srcm.replace('size', '1400'));
    }
    if (width > 1919) {
        $('.videoContainer source.webm').attr('src', srcw.replace('size', '1920'));
        $('.videoContainer source.ogvv').attr('src', srco.replace('size', '1920'));
        $('.videoContainer source.mppp').attr('src', srcm.replace('size', '1920'));
    }
});