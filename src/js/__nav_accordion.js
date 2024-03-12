/* * NombreDeProyecto * ========================================================
   Nav accordion javascript [/src/js/nav_accordion.js]
   ========================================================================== */

$(document).ready(function () {
    $('.button_hamb_open').click(function () {
        $(this).addClass('clicked');
        $(this).attr('aria-pressed', 'true');
        
        $(this).closest('#nav').find('.nav_main_ul').addClass('open');
        $(this).closest('#nav').find('.button_hamb_close').addClass('clicked');
    });

    $('.nav_item_noLink_js').click(function () {
        $(this).closest('#nav').find('.button_hamb_close').removeClass('clicked');
        $(this).closest('#nav').find('.nav_main_ul').removeClass('open');
        $(this).closest('#nav').find('.nav_TLI').removeClass('open');
        $(this).closest('#nav').find('.nav_TLI').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('#nav').find('.button_hamb_open').removeClass('clicked');
        $(this).closest('#nav').find('.button_hamb_open').attr('aria-pressed', 'false');
    });

    $('.button_hamb_close').click(function () {
        $(this).removeClass('clicked');
        $(this).closest('#nav').find('.nav_main_ul').removeClass('open');
        $(this).closest('#nav').find('.nav_TLI').removeClass('open');
        $(this).closest('#nav').find('.nav_TLI').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('#nav').find('.button_hamb_open').removeClass('clicked');
        $(this).closest('#nav').find('.button_hamb_open').attr('aria-pressed', 'false');
    });

    $('.nav_TLI').click(function () {
        $(this).toggleClass('open');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('.nav_item_hasSubNav').find('.nav_subNav').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
});