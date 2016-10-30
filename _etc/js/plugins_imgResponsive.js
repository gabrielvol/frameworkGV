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
});