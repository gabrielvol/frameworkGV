$(document).ready(function () {
    var noticiaA_src = 'https://www.youtube.com/embed/9Xu1sgdXWsM';
    var noticiaB_src = 'https://www.youtube.com/embed/KkjvWkXOdhs';
    var noticiaC_src = 'https://www.youtube.com/embed/79QnjUvIrJA';
    var noticiaD_src = 'https://www.youtube.com/embed/J-BFR7n4IjE';
            
    $('.pop_open_noticiaA').click(function () {
        $('.modal_video, .pop_noticiaA').addClass('displayBlock');
        $('.modal_video, .pop_noticiaA').removeClass('displayNone');
        $('.pop_noticiaA').find('iframe').attr('src', noticiaA_src);
    });
        
    $('.pop_open_noticiaB').click(function () {
        $('.modal_video, .pop_noticiaB').addClass('displayBlock');
        $('.modal_video, .pop_noticiaB').removeClass('displayNone');
        $('.pop_noticiaB').find('iframe').attr('src', noticiaB_src);
    });
    
    $('.pop_open_noticiaC').click(function () {
        $('.modal_video, .pop_noticiaC').addClass('displayBlock');
        $('.modal_video, .pop_noticiaC').removeClass('displayNone');
        $('.pop_noticiaC').find('iframe').attr('src', noticiaC_src);
    });
        
    $('.pop_open_noticiaD').click(function () {
        $('.modal_video, .pop_noticiaD').addClass('displayBlock');
        $('.modal_video, .pop_noticiaD').removeClass('displayNone');
        $('.pop_noticiaD').find('iframe').attr('src', noticiaD_src);
    });
    
    
    
    
    $('.modal_video, .pop_close').click(function () {        
        $('.modal_video, .pop_video').addClass('displayNone');
        $('.modal_video, .pop_video').removeClass('displayBlock');
        $('.pop_video').find('iframe').attr('src', '');
    });
});