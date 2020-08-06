$(document).ready(function () {
    $('.button_hamb_open').click(function () {
        $(this).addClass('clicked');
        $(this).attr('aria-pressed', 'true');
        
        $(this).closest('#header').find('.social, .button_whatsapp').addClass('clicked');
        $(this).closest('#nav').find('.nav_main_ul').addClass('open');
        
        $(this).closest('#nav').find('.modal_nav').show( '2000', 'swing', function() {
            $(this).closest('#header').find('.logo_header, .language_ul').addClass('clicked');
            $(this).closest('#nav').find('.button_hamb_close').addClass('clicked');
        });
    });

    $('.nav_item_noLink_js').click(function () {
        $(this).closest('#header').find('.logo_header, .social, .language_ul').removeClass('clicked');  
        
        $(this).closest('#nav').find('.button_hamb_close, .button_hamb_open').removeClass('clicked');
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
        $(this).removeClass('clicked');
        
        $(this).closest('#header').find('.logo_header, .social, .language_ul, .button_whatsapp').removeClass('clicked');
        
        $(this).closest('#nav').find('.button_hamb_open').removeClass('clicked');
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
        
        $(this).closest('#header').find('.logo_header, .social, .language_ul').removeClass('clicked');
        $(this).closest('#nav').find('.button_hamb_close').removeClass('clicked');
        $(this).closest('#nav').find('.nav_main_ul').removeClass('open');
        
        $(this).closest('#nav').find('.nav_subNav').removeClass('openDR');
        $(this).closest('#nav').find('.nav_subNav').attr('aria-expanded', 'false');
        
        $(this).closest('#nav').find('.button_hamb_open').removeClass('clicked');
        $(this).closest('#nav').find('.button_hamb_open').attr('aria-pressed', 'false');
        
        $(this).closest('#nav').find('.nav_TLI').removeClass('openDR');
        $(this).closest('#nav').find('.nav_TLI').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
        
    
    // Nav Sub NO Level
    $('.nav_TLI').click(function () {
        $(this).toggleClass('open');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        
        $(this).closest('.nav_item_hasSubNav').find('.nav_subNav').toggleClass('open');
        $(this).closest('.nav_item_hasSubNav').find('.nav_subNav').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
    
    
    // Nav Sub Level 1
    $('.nav_TLI_level1').click(function () {
        $(this).toggleClass('openDR');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        
        $(this).closest('.nav_item_hasSubNav_level1').find('.nav_subNav_level1').toggleClass('openDR');
        $(this).closest('.nav_item_hasSubNav_level1').find('.nav_subNav_level1').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        
        $(this).closest('.nav_main_ul').find('.nav_TLI_level2, .nav_subNav_level2').removeClass('openDR');
        $(this).closest('.nav_main_ul').find('.nav_TLI_level2').attr('aria-pressed', 'false');
        $(this).closest('.nav_main_ul').find('.nav_subNav_level2').attr('aria-expanded', 'false');
        
        $(this).closest('.nav_main_ul').find('.nav_TLI_level3, .nav_subNav_level3').removeClass('openDR');
        $(this).closest('.nav_main_ul').find('.nav_TLI_level3').attr('aria-pressed', 'false');
        $(this).closest('.nav_main_ul').find('.nav_subNav_level3').attr('aria-expanded', 'false');
    });
    
    
    // Nav Sub Level 2
    $('.nav_TLI_level2').click(function () {
        $(this).toggleClass('openDR');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        
        $(this).closest('.nav_item_hasSubNav_level2').find('.nav_subNav_level2').toggleClass('openDR');
        $(this).closest('.nav_item_hasSubNav_level2').find('.nav_subNav_level2').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        
        $(this).closest('.nav_main_ul').find('.nav_TLI_level3, .nav_subNav_level3').removeClass('openDR');
        $(this).closest('.nav_main_ul').find('.nav_TLI_level3').attr('aria-pressed', 'false');
        $(this).closest('.nav_main_ul').find('.nav_subNav_level3').attr('aria-expanded', 'false');
    });
    
    
    // Nav Sub Level 3
    $('.nav_TLI_level3').click(function () {
        $(this).toggleClass('openDR');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        
        $(this).closest('.nav_item_hasSubNav_level3').find('.nav_subNav_level3').toggleClass('openDR');
        $(this).closest('.nav_item_hasSubNav_level3').find('.nav_subNav_level3').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
});