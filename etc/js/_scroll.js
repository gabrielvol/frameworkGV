var url_entorno = '/test';

$(window).scroll(function () {    
    if ($(this).scrollTop() > 60) { // REF [R]
        $('#header').addClass('header_scrolled_js');
        $('#nav').addClass('nav_scrolled_js');
    } else {
        $('#header').removeClass('header_scrolled_js');
        $('#nav').removeClass('nav_scrolled_js');
    }
});

/* // Button SiteTop // REF [18] -------------------------------------------- */
$(window).scroll(function () {
    if ($(this).scrollTop() > 300) { 
        $('.button_siteTop').addClass('button_siteTop_visible');
    } else {
        $('.button_siteTop').removeClass('button_siteTop_visible');
    }
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {     
        $('.logo_header img').attr("src", url_entorno + "/img/logo_scrolled.png");
    } else {
        $('.logo_header img').attr("src", url_entorno + "/img/logo.png");
    }
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 96) {        
        $('nav.main').css({
            position: 'fixed',
            top: 30,
            marginTop: 46
        });
    } else {        
        $('nav.main').css({
            position: 'relative',
            top: 0,
            marginTop: 0
        });;
    }
});