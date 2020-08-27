$(document).ready(function () {
    var noticiaA_src = 'https://www.youtube.com/embed/9Xu1sgdXWsM';
    var noticiaB_src = 'https://www.youtube.com/embed/KkjvWkXOdhs';
    var noticiaC_src = 'https://www.youtube.com/embed/79QnjUvIrJA';
    var noticiaD_src = 'https://www.youtube.com/embed/J-BFR7n4IjE';
            
    $('.pop_open_noticiaA').click(function () {
        $('.modal_video, .pop_noticiaA').addClass('displayBlock');
        $('.modal_video, .pop_noticiaA').removeClass('displayNone');
        $('.pop_noticiaA iframe').attr('src', noticiaA_src);
    });
        
    $('.pop_open_noticiaB').click(function () {
        $('.modal_video, .pop_noticiaB').addClass('displayBlock');
        $('.modal_video, .pop_noticiaB').removeClass('displayNone');
        $('.pop_noticiaB iframe').attr('src', noticiaB_src);
    });
    
    $('.pop_open_noticiaC').click(function () {
        $('.modal_video, .pop_noticiaC').addClass('displayBlock');
        $('.modal_video, .pop_noticiaC').removeClass('displayNone');
        $('.pop_noticiaC iframe').attr('src', noticiaC_src);
    });
        
    $('.pop_open_noticiaD').click(function () {
        $('.modal_video, .pop_noticiaD').addClass('displayBlock');
        $('.modal_video, .pop_noticiaD').removeClass('displayNone');
        $('.pop_noticiaD iframe').attr('src', noticiaD_src);
    });
    
    
    
    
    $('.modal_video').click(function () {
        $(this).addClass('displayNone');
        $(this).closest('body').find('.pop_general').addClass('displayNone');
        $(this).closest('body').find('.pop_general iframe').attr('src', '');
    });
    
    $('.pop_button_close').click(function () {
        $(this).closest('.pop_general').addClass('displayNone');
        $(this).closest('.pop_general').find('iframe').attr('src', '');
        $(this).closest('body').find('.modal_video').addClass('displayNone');
    });
});