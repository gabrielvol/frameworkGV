$(document).ready(function () { 
    $('.button_pop_open_xxx').click(function () {
        $(this).attr('aria-pressed', 'true');
        $(this).closest('body').find('.pop_xxx').removeClass('displayNone');
        $(this).closest('body').find('.modal_xxx').removeClass('displayNone');
    });
        
    $('.modal_xxx, .button_close_pop, .button_submit_pop').click(function () {
        $(this).closest('body').find('.button_pop_open_xxx').attr('aria-pressed', 'false');
        $(this).closest('body').find('.pop_xxx').addClass('displayNone');
        $(this).closest('body').find('.modal_xxx').addClass('displayNone');
    });
    
    document.querySelector('.button_close_pop').addEventListener('click', function() {
        this.setAttribute('aria-pressed', 'true');
        this.closest('body').querySelector('.pop_xxx').style.display = 'none';
    });

/* // Certificado Giraldes / img no descargable ----------------------------- */
    $('.button_xxx').click(function () {
        $(this).attr('aria-pressed', 'true');
        $(this).closest('body').find('.pop_xxx').removeClass('displayNone');
        $(this).closest('body').find('.modal_xxx').removeClass('displayNone');
    });
    
    $('.button_xxx_A_open').click(function () {
        $(this).closest('body').find('.pop_xxx_A').removeClass('displayNone');
    });
    
    $('.button_xxx_B_open').click(function () {
        $(this).closest('body').find('.pop_xxx_B').removeClass('displayNone');
    });
    
    $('.pop_xxx img, .modal_xxx, .button_close_pop').click(function () {
        $(this).closest('body').find('.button_xxx').attr('aria-pressed', 'false');
        $(this).closest('body').find('.pop_xxx').addClass('displayNone');
        $(this).closest('body').find('.pop_xxx_A').addClass('displayNone');
        $(this).closest('body').find('.pop_xxx_B').addClass('displayNone');
        $(this).closest('body').find('.modal_xxx').addClass('displayNone');
    });
    
    $('.pop_xxx img').bind('contextmenu', function(e){
        return false;
    });
});

    

/* // Pop Videos ------------------------------------------------------------ */
$(document).ready(function () {    
    var media__videoA_id    = 'IwxjqQHUxXI';
    var media__videoB_id    = 'WI8epLDMqJY';
    
    $('.button_pop_open_videoA').click(function () {
        $(this).closest('body').find('iframe').attr("src", "https://www.youtube-nocookie.com/embed/" + media__videoA_id + "?&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;mute=1&amp;playlist=" + media__videoA_id);
    });
    
    $('.button_pop_open_videoB').click(function () {
        $(this).closest('body').find('iframe').attr("src", "https://www.youtube-nocookie.com/embed/" + media__videoB_id + "?&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;mute=1&amp;playlist=" + media__videoB_id);
    });

    $('.button_pop_open_video').click(function () {
        $(this).attr('aria-pressed', 'true');
        $(this).closest('body').find('.pop_video').removeClass('displayNone');
        $(this).closest('body').find('.modal_video').removeClass('displayNone');
    });
        
    $('.modal_video, .button_close_pop').click(function () {
        $(this).closest('body').find('.button_pop_open_video').attr('aria-pressed', 'false');        
        $(this).closest('body').find('.pop_video').addClass('displayNone');
        $(this).closest('body').find('iframe').attr("src", "");
        $(this).closest('body').find('.modal_video').addClass('displayNone');
    });
});