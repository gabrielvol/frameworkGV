$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.navMain, #header').addClass('topper');
    } else {
        $('.navMain ,#header').removeClass('topper');
    }
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
        $('#header').addClass('topperShadow');
    } else {
        $('#header').removeClass('topperShadow');
    }
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.navMain, #header').addClass('topper');    
        $('#main').addClass('topper');        
        $('.logoH img').attr("src", "/clientes/agridulze/img/logo_ad.png");
    } else {
        $('.navMain ,#header').removeClass('topper');
        $('#main').removeClass('topper');
        $('.logoH img').attr("src", "/clientes/agridulze/img/logo.png");
    }
});