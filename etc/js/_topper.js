$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('#header').addClass('topperHeader');
        $('#header').addClass('topperShadow');
        $('.navMain').addClass('topperNav');
    } else {
        $('#header').removeClass('topperHeader');
        $('#header').removeClass('topperShadow');
        $('.navMain').removeClass('topperNav');
    }
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('#header').addClass('topperShadow');
        $('.navMain').addClass('topperNav'); 
        $('#main').addClass('topperMain');        
        $('.logoH img').attr("src", "/clientes/agridulze/img/logo_ad.png");
    } else {
        $('#header').removeClass('topperHeader');
        $('#header').removeClass('topperShadow');
        $('#main').removeClass('topperMain');
        $('.logoH img').attr("src", "/clientes/agridulze/img/logo.png");
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
        $('.mainNav, .hamb').addClass('topper');
    } else {
        $('.mainNav, .hamb').removeClass('topper');
    }
});