$(document).ready(function () {
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