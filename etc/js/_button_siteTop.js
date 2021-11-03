// REF [18] Button SiteTop

$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.button_siteTop').addClass('button_siteTop_visible');
    } else {
        $('.button_siteTop').removeClass('button_siteTop_visible');
    }
});