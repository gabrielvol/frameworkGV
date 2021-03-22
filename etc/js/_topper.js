$(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
        $('#header').addClass('headerScrolled');
    } else {
        $('#header').removeClass('headerScrolled');
    }
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('#header').addClass('header_topper');
        $('.nav_nav').addClass('nav_topper');
    } else {
        $('#header').removeClass('header_topper');
        $('.nav_nav').removeClass('nav_topper');
    }
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.nav_nav').addClass('nav_topper'); 
        $('#main').addClass('topperMain');        
        $('.logo_header img').attr("src", "/clientes/agridulze/img/logo_ad.png");
    } else {
        $('#header').removeClass('header_topper');
        $('#main').removeClass('topperMain');
        $('.logo_header img').attr("src", "/clientes/agridulze/img/logo.png");
    }
});

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

$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.mainNav, button_hamb').addClass('topper');
    } else {
        $('.mainNav, button_hamb').removeClass('topper');
    }
});