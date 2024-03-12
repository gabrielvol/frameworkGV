/* * NombreDeProyecto * ========================================================
   Nav drawer javascript [/src/js/nav_drawer.js]
   ========================================================================== */

var dir_env = '/stage';

$(document).ready(function () {
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
//            $(this).closest('#header').find('.logo_header img').attr("src", dir_env + "/img/logo_navDrawer.svg");

            $(this).closest('#header').find('.nav_lang_ul').addClass('navDrawer_open');
            
            $(this).closest('#nav').find('.button_hamb_close').addClass('button_hamb_close_visible');
        });
    });

    $('.nav_item_noLink_js').click(function () {
        $(this).closest('#header').addClass('navItemClicked');
        $(this).closest('#header').removeClass('navDrawer_open'); 
        $(this).closest('#header').addClass('navDrawer_closed'); 
        $(this).closest('#header').find('.logo_header').removeClass('navDrawer_open');
//        $(this).closest('#header').find('.logo_header img').attr("src", dir_env + "/img/logo_header.svg");
        
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
//        $(this).closest('#header').find('.logo_header img').attr("src", dir_env + "/img/logo_header.svg");

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
//        $(this).closest('#header').find('.logo_header img').attr("src", dir_env + "/img/logo_header.svg");

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