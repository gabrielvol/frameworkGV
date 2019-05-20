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