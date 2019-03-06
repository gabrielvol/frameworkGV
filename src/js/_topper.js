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