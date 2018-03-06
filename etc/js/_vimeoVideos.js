$(document).ready(function () {
    /* vimeo videos */
    $(".videoF").click(function () {
        $(".modalBG, .videoFF").fadeToggle("slow", "linear").removeClass('displayNone');
        $('.videoFF iframe').attr('src', '//player.vimeo.com/video/91925645');
    });
    
    $('.modalBG, .popup').click(function () {
        $('.modalBG, .popup').hide().addClass('displayNone');
        $('.popup iframe').attr('src', '');
    });
});