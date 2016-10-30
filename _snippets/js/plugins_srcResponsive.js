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