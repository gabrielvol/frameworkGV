$(document).ready(function () {
    $('.navOpen').click(function () {
        $(this).addClass('clicked');
        $(this).closest('#header').find('.social').addClass('clicked');
        $(this).closest('#nav').find('.mainMenu').addClass('open');
        $(this).closest('#nav').find('.modalNav').show( '2000', 'swing', function() {
            $(this).closest('#header').find('.logoH').addClass('clicked');
            $(this).closest('#header').find('.lang').addClass('clicked');
            $(this).closest('#nav').find('.navClose').addClass('clicked');
        });
        $(this).attr('aria-pressed', 'true');
    });

    $('.liNoLink').click(function () {
        $(this).closest('#nav').find('.navClose').removeClass('clicked');
        $(this).closest('#header').find('.logoH').removeClass('clicked');
        $(this).closest('#header').find('.socHeader').removeClass('clicked');
        $(this).closest('#header').find('.lang').removeClass('clicked');
        $(this).closest('#nav').find('.modalNav').hide('fast', 'swing');
        $(this).closest('#nav').find('.mainMenu').removeClass('open');
        $(this).closest('#nav').find('.subMenuLevel1').removeClass('open');
        $(this).closest('#nav').find('.subMenuLevel1').attr('aria-expanded', 'false');
        $(this).closest('#nav').find('.topLevelItem').removeClass('open');
        $(this).closest('#nav').find('.topLevelItem').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('#nav').find('.navOpen').removeClass('clicked');
        $(this).closest('#nav').find('.navOpen').attr('aria-pressed', 'false');
    });

    $('.navClose').click(function () {
        $(this).removeClass('clicked');
        $(this).closest('#header').find('.logoH').removeClass('clicked');
        $(this).closest('#header').find('.social').removeClass('clicked');
        $(this).closest('#header').find('.lang').removeClass('clicked');
        $(this).closest('#nav').find('.modalNav').hide('fast', 'swing');
        $(this).closest('#nav').find('.mainMenu').removeClass('open');
        $(this).closest('#nav').find('.subMenuLevel1').removeClass('open');
        $(this).closest('#nav').find('.subMenuLevel1').attr('aria-expanded', 'false');
        $(this).closest('#nav').find('.topLevelItem').removeClass('open');
        $(this).closest('#nav').find('.topLevelItem').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('#nav').find('.navOpen').removeClass('clicked');
        $(this).closest('#nav').find('.navOpen').attr('aria-pressed', 'false');
    });

    $('.modalNav').click(function () {
        $(this).closest('#header').find('.logoH').removeClass('clicked');
        $(this).closest('#header').find('.social').removeClass('clicked');
        $(this).closest('#header').find('.lang').removeClass('clicked');
        $(this).hide('fast');
        $(this).closest('#nav').find('.navClose').removeClass('clicked');
        $(this).closest('#nav').find('.mainMenu').removeClass('open');
        $(this).closest('#nav').find('.subMenuLevel1').removeClass('open');
        $(this).closest('#nav').find('.subMenuLevel1').attr('aria-expanded', 'false');
        $(this).closest('#nav').find('.topLevelItem').removeClass('open');
        $(this).closest('#nav').find('.topLevelItem').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('#nav').find('.navOpen').removeClass('clicked');
        $(this).closest('#nav').find('.navOpen').attr('aria-pressed', 'false');
    });
    
    
    // Nav Sub NO Level
    $('.topLevelItem').click(function () {
        $(this).toggleClass('open');
        $(this).closest('.hasSub').find('.subMenu').toggleClass('open');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('.hasSub').find('.subMenu').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
       
    $('.hasSub p').click(function () {
        $(this).closest('.hasSub').toggleClass('openSubTTLO');
        $(this).closest('.hasSub').find('.subMenu').toggleClass('openSubTTLO');
    });
    
    
    // Nav Sub Level 1
    $('.TLILevel1').click(function () {
        $(this).toggleClass('open');
        $(this).closest('.hasSubLevel1').find('.subMenuLevel1').toggleClass('open');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('.hasSubLevel1').find('.subMenuLevel1').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
       
    $('.hasSubLevel1 p').click(function () {
        $(this).closest('.hasSubLevel1').toggleClass('openSubTTLO');
        $(this).closest('.hasSubLevel1').find('.subMenuLevel1').toggleClass('openSubTTLO');
    });
    
    
    // Nav Sub Level 2
    $('.TLILevel2').click(function () {
        $(this).toggleClass('open');
        $(this).closest('.hasSubLevel2').find('.subMenuLevel2').toggleClass('open');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('.hasSubLevel2').find('.subMenuLevel2').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
       
    $('.hasSubLevel2 p').click(function () {
        $(this).closest('.hasSubLevel2').toggleClass('openSubTTLO');
        $(this).closest('.hasSubLevel2').find('.subMenuLevel2').toggleClass('openSubTTLO');
    });
    
    
    // Nav Sub Level 3
    $('.TLILevel3').click(function () {
        $(this).toggleClass('open');
        $(this).closest('.hasSubLevel3').find('.subMenuLevel3').toggleClass('open');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('.hasSubLevel3').find('.subMenuLevel3').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
       
    $('.hasSubLevel3 p').click(function () {
        $(this).closest('.hasSubLevel3').toggleClass('openSubTTLO');
        $(this).closest('.hasSubLevel3').find('.subMenuLevel3').toggleClass('openSubTTLO');
    });
    
       
    $('.mainNav > li').click(function () {
        $(this).toggleClass('.navItemClicked');
    });
});