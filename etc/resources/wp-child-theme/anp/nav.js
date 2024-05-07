(function($) {
    "use strict";

    $('.button_hamb_open').click(function () {
        $(this).addClass('button_hamb_open_pressed');
        $(this).attr('aria-pressed', 'true');        
        
        $(this).closest('#header').addClass('navDrawer_open');
        $(this).closest('#header').removeClass('navDrawer_closed'); 
        $(this).closest('#header').find('.social').addClass('navDrawer_open');
        $(this).closest('#header').find('.button_whatsapp').addClass('navDrawer_open');
        
        $(this).closest('body').find('#footer').addClass('navDrawer_open');
        
        $(this).closest('#nav').find('.nav_main_ul').addClass('open');   
        
        $(this).closest('#nav').find('.modal_nav').show( '2000', 'swing', function() {
            $(this).closest('#header').find('.logo_header').addClass('navDrawer_open');

            $(this).closest('#header').find('.nav_lang_ul').addClass('navDrawer_open');
            
            $(this).closest('#nav').find('.button_hamb_close').addClass('button_hamb_close_visible');
        });
    });

    $('.nav_item_noLink_js').click(function () {
        $(this).closest('#header').addClass('navItemClicked');
        $(this).closest('#header').removeClass('navDrawer_open'); 
        $(this).closest('#header').addClass('navDrawer_closed'); 
        $(this).closest('#header').find('.logo_header').removeClass('navDrawer_open');
        
        $(this).closest('#header').find('.social').removeClass('navDrawer_open');  
        $(this).closest('#header').find('.nav_lang_ul').removeClass('navDrawer_open');
        $(this).closest('#header').find('.button_whatsapp').removeClass('navDrawer_open');
        
        $(this).closest('body').find('#footer').removeClass('navDrawer_open');
        
        $(this).closest('#nav').find('.button_hamb_close').removeClass('button_hamb_close_visible');
        $(this).closest('#nav').find('.button_hamb_open').removeClass('button_hamb_open_pressed');
        $(this).closest('#nav').find('.button_hamb_open').attr('aria-pressed', 'false');
        
        $(this).closest('#nav').find('.modal_nav').hide('fast', 'swing');
        $(this).closest('#nav').find('.nav_main_ul').removeClass('open');
        
        $(this).closest('#nav').find('.nav_subNav').removeClass('openDR');
        $(this).closest('#nav').find('.nav_subNav').attr('aria-expanded', 'false'); 
        
        $(this).closest('#nav').find('.nav_TLI').removeClass('openDR'); 
        $(this).closest('#nav').find('.nav_TLI').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });

    $('.button_hamb_close').click(function () {
        $(this).removeClass('button_hamb_close_visible');
        
        $(this).closest('#header').removeClass('navDrawer_open');
        $(this).closest('#header').addClass('navDrawer_closed'); 
        $(this).closest('#header').find('.logo_header').removeClass('navDrawer_open');

        $(this).closest('#header').find('.social').removeClass('navDrawer_open');
        $(this).closest('#header').find('.nav_lang_ul').removeClass('navDrawer_open');
        $(this).closest('#header').find('.button_whatsapp').removeClass('navDrawer_open');

        $(this).closest('body').find('#footer').removeClass('navDrawer_open');
        
        $(this).closest('#nav').find('.button_hamb_open').removeClass('button_hamb_open_pressed');
        $(this).closest('#nav').find('.button_hamb_open').attr('aria-pressed', 'false');
        
        $(this).closest('#nav').find('.modal_nav').hide('fast', 'swing');
        $(this).closest('#nav').find('.nav_main_ul').removeClass('open');
        
        $(this).closest('#nav').find('.nav_subNav').removeClass('openDR');
        $(this).closest('#nav').find('.nav_subNav').attr('aria-expanded', 'false');
        
        $(this).closest('#nav').find('.nav_TLI').removeClass('openDR');
        $(this).closest('#nav').find('.nav_TLI').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });

    $('.modal_nav').click(function () {
        $(this).hide('fast');
        
        $(this).closest('#header').removeClass('navDrawer_open');
        $(this).closest('#header').addClass('navDrawer_closed'); 
        $(this).closest('#header').find('.logo_header').removeClass('navDrawer_open');

        $(this).closest('#header').find('.social').removeClass('navDrawer_open');
        $(this).closest('#header').find('.nav_lang_ul').removeClass('navDrawer_open');
        $(this).closest('#header').find('.button_whatsapp').removeClass('navDrawer_open');

        $(this).closest('body').find('#footer').removeClass('navDrawer_open');
        
        $(this).closest('#nav').find('.button_hamb_close').removeClass('button_hamb_close_visible');
        $(this).closest('#nav').find('.nav_main_ul').removeClass('open');
        
        $(this).closest('#nav').find('.nav_subNav').removeClass('openDR');
        $(this).closest('#nav').find('.nav_subNav').attr('aria-expanded', 'false');
        
        $(this).closest('#nav').find('.button_hamb_open').removeClass('button_hamb_open_pressed');
        $(this).closest('#nav').find('.button_hamb_open').attr('aria-pressed', 'false');
        
        $(this).closest('#nav').find('.nav_TLI').removeClass('openDR');
        $(this).closest('#nav').find('.nav_TLI').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
    
    $(document).ready(function () {
        var postImgHeight = document.querySelector('.digital-marketing-blog-standard-post__thumbnail').offsetHeight;
        
        document.documentElement.style.setProperty('--postImgHeight', postImgHeight + 'px');   
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 80) {
            $('#header').addClass('site_scrolled_js'); // REF [42]
            $('.button_hamb_open').addClass('site_scrolled_js'); // REF [31*]
            $('.button_siteTop').addClass('site_scrolled_js'); // REF [31*]
        } else {
            $('#header').removeClass('site_scrolled_js'); // REF [42]
            $('.button_hamb_open').removeClass('site_scrolled_js'); // REF [31*]
            $('.button_siteTop').removeClass('site_scrolled_js'); // REF [31*]
        }

        if ($(this).scrollTop() > 180) {
            $('#header').addClass('site_scrolled_a_js'); // REF [42]
        } else {
            $('#header').removeClass('site_scrolled_a_js'); // REF [42]
        }
    });
})(jQuery);