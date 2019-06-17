$(document).ready(function () {
    $('.navOpen').click(function () {
        $(this).addClass('clicked');
        $(this).attr('aria-pressed', 'true');
        
        $(this).closest('#header').find('.social').addClass('clicked');
        $(this).closest('#nav').find('.mainMenu').addClass('open');
        
        $(this).closest('#nav').find('.modalNav').show( '2000', 'swing', function() {
            $(this).closest('#header').find('.logoH, .lang').addClass('clicked');
            $(this).closest('#nav').find('.navClose').addClass('clicked');
        });
    });

    $('.liNoLink').click(function () {
        $(this).closest('#header').find('.logoH, .socHeader, .lang').removeClass('clicked');  
        
        $(this).closest('#nav').find('.navClose, .navOpen').removeClass('clicked');
        $(this).closest('#nav').find('.navOpen').attr('aria-pressed', 'false');
        
        $(this).closest('#nav').find('.modalNav').hide('fast', 'swing');
        $(this).closest('#nav').find('.mainMenu').removeClass('open');
        
        $(this).closest('#nav').find('.subMenu').removeClass('openDR');
        $(this).closest('#nav').find('.subMenu').attr('aria-expanded', 'false'); 
        
        $(this).closest('#nav').find('.topLevelItem').removeClass('openDR'); 
        $(this).closest('#nav').find('.topLevelItem').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });

    $('.navClose').click(function () {
        $(this).removeClass('clicked');
        
        $(this).closest('#header').find('.logoH, .social, .lang').removeClass('clicked');
        
        $(this).closest('#nav').find('.navOpen').removeClass('clicked');
        $(this).closest('#nav').find('.navOpen').attr('aria-pressed', 'false');
        
        $(this).closest('#nav').find('.modalNav').hide('fast', 'swing');
        $(this).closest('#nav').find('.mainMenu').removeClass('open');
        
        $(this).closest('#nav').find('.subMenu').removeClass('openDR');
        $(this).closest('#nav').find('.subMenu').attr('aria-expanded', 'false');
        
        $(this).closest('#nav').find('.topLevelItem').removeClass('openDR');
        $(this).closest('#nav').find('.topLevelItem').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });

    $('.modalNav').click(function () {
        $(this).hide('fast');
        
        $(this).closest('#header').find('.logoH, .social, .lang').removeClass('clicked');
        $(this).closest('#nav').find('.navClose').removeClass('clicked');
        $(this).closest('#nav').find('.mainMenu').removeClass('open');
        
        $(this).closest('#nav').find('.subMenu').removeClass('openDR');
        $(this).closest('#nav').find('.subMenu').attr('aria-expanded', 'false');
        
        $(this).closest('#nav').find('.navOpen').removeClass('clicked');
        $(this).closest('#nav').find('.navOpen').attr('aria-pressed', 'false');
        
        $(this).closest('#nav').find('.topLevelItem').removeClass('openDR');
        $(this).closest('#nav').find('.topLevelItem').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
    
       
    $('.mainNav > li').click(function () {
        $(this).toggleClass('.navItemClicked');
    });
    
    
    // Nav Sub NO Level
    $('.topLevelItem').click(function () {
        $(this).toggleClass('open');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        
        $(this).closest('.hasSub').find('.subMenu').toggleClass('open');
        $(this).closest('.hasSub').find('.subMenu').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
    
    
    // Nav Sub Level 1
    $('.TLILevel1').click(function () {
        $(this).toggleClass('openDR');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        
        $(this).closest('.hasSubLevel1').find('.subMenuLevel1').toggleClass('openDR');
        $(this).closest('.hasSubLevel1').find('.subMenuLevel1').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        
        $(this).closest('.mainMenu').find('.TLILevel2, .subMenuLevel2').removeClass('openDR');
        $(this).closest('.mainMenu').find('.TLILevel2').attr('aria-pressed', 'false');
        $(this).closest('.mainMenu').find('.subMenuLevel2').attr('aria-expanded', 'false');
        
        $(this).closest('.mainMenu').find('.TLILevel3, .subMenuLevel3').removeClass('openDR');
        $(this).closest('.mainMenu').find('.TLILevel3').attr('aria-pressed', 'false');
        $(this).closest('.mainMenu').find('.subMenuLevel3').attr('aria-expanded', 'false');
    });
    
    
    // Nav Sub Level 2
    $('.TLILevel2').click(function () {
        $(this).toggleClass('openDR');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        
        $(this).closest('.hasSubLevel2').find('.subMenuLevel2').toggleClass('openDR');
        $(this).closest('.hasSubLevel2').find('.subMenuLevel2').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        
        $(this).closest('.mainMenu').find('.TLILevel3, .subMenuLevel3').removeClass('openDR');
        $(this).closest('.mainMenu').find('.TLILevel3').attr('aria-pressed', 'false');
        $(this).closest('.mainMenu').find('.subMenuLevel3').attr('aria-expanded', 'false');
    });
    
    
    // Nav Sub Level 3
    $('.TLILevel3').click(function () {
        $(this).toggleClass('openDR');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        
        $(this).closest('.hasSubLevel3').find('.subMenuLevel3').toggleClass('openDR');
        $(this).closest('.hasSubLevel3').find('.subMenuLevel3').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
});