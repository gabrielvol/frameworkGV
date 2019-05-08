$(document).ready(function () {
    $('.navOpen').click(function () {
        $(this).addClass('clicked');
        $(this).attr('aria-pressed', 'true');
        
//        $(this).closest('#header').find('.social').addClass('clicked');
        $(this).closest('#nav').find('.mainMenu').addClass('open');
//        $(this).closest('#nav').find('.modalNav').show( '2000', 'swing', function() {
//            $(this).closest('#header').find('.logoH').addClass('clicked');
//            $(this).closest('#header').find('.lang').addClass('clicked');
//            $(this).closest('#nav').find('.navClose').addClass('clicked');
//        });
        $(this).closest('#nav').find('.navClose').addClass('clicked');
    });

    $('.liNoLink').click(function () {
        $(this).closest('#nav').find('.navClose').removeClass('clicked');
//        $(this).closest('#header').find('.logoH').removeClass('clicked');
//        $(this).closest('#header').find('.socHeader').removeClass('clicked');
//        $(this).closest('#header').find('.lang').removeClass('clicked');
//        $(this).closest('#nav').find('.modalNav').hide('fast', 'swing');
        $(this).closest('#nav').find('.mainMenu').removeClass('open');
//        $(this).closest('#nav').find('.subMenu').removeClass('open');
//        $(this).closest('#nav').find('.subMenu').attr('aria-expanded', 'false');
        $(this).closest('#nav').find('.topLevelItem').removeClass('open');
        $(this).closest('#nav').find('.topLevelItem').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('#nav').find('.navOpen').removeClass('clicked');
        $(this).closest('#nav').find('.navOpen').attr('aria-pressed', 'false');
    });

    $('.navClose').click(function () {
        $(this).removeClass('clicked');
//        $(this).closest('#header').find('.logoH').removeClass('clicked');
//        $(this).closest('#header').find('.social').removeClass('clicked');
//        $(this).closest('#header').find('.lang').removeClass('clicked');
//        $(this).closest('#nav').find('.modalNav').hide('fast', 'swing');
        $(this).closest('#nav').find('.mainMenu').removeClass('open');
//        $(this).closest('#nav').find('.subMenu').removeClass('open');
//        $(this).closest('#nav').find('.subMenu').attr('aria-expanded', 'false');
        $(this).closest('#nav').find('.topLevelItem').removeClass('open');
        $(this).closest('#nav').find('.topLevelItem').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('#nav').find('.navOpen').removeClass('clicked');
        $(this).closest('#nav').find('.navOpen').attr('aria-pressed', 'false');
    });

    $('.topLevelItem').click(function () {
        $(this).toggleClass('open');
//        $(this).closest('.hasSub').find('.subMenu').toggleClass('open');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('.hasSub').find('.subMenu').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
//        $(this).closest('.hasSub').find('.subMenu').toggleClass('open');
    });
       
    $('.hasSub p').click(function () {
//        $(this).closest('.hasSub').toggleClass('openSubTTLO');
////        $(this).closest('.mainMenu').toggleClass('openSubTTLO');
//        $(this).closest('.hasSub').find('.subMenu').toggleClass('openSubTTLO');
    });
       
    $('.mainNav > li').click(function () {
        $(this).toggleClass('.navItemClicked');
    });
});