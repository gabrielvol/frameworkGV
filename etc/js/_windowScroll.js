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