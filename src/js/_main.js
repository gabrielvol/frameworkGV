$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.navMain').addClass('topper');
    } else {
        $('.navMain').removeClass('topper');
    }
});

$(document).ready(function () {
    // Hamburger Drawer
    $(".openNav").click(function () {
        $(this).addClass('clicked');
        $(this).closest("#nav").find(".mainMenu").addClass('open');
        $(this).closest("#header").find(".social").addClass('clicked');
        $(this).closest("#nav").find(".modalNav").show( "2000", "swing", function() {
            $(this).closest("#nav").find(".closeNav").addClass('clicked');
            $(this).closest("#header").find(".logoHeader").addClass('clicked');
        });
    });

    $('.closeNav').click(function () {
        $(this).removeClass('clicked');
        $(this).closest("#header").find(".social").removeClass('clicked');
        $(this).closest("#header").find(".logoHeader").removeClass('clicked');
        $(this).closest("#nav").find(".modalNav").hide("fast", "swing");
        $(this).closest("#nav").find(".mainMenu").removeClass('open');
        $(this).closest("#nav").find(".subMenu").removeClass('open');
        $(this).closest("#nav").find(".topLevelItem").removeClass('open');
        $(this).closest("#nav").find(".openNav").removeClass('clicked');
        $(this).closest("#nav").find(".openNav").attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });

    $('.modalNav').click(function () {
        $(this).closest("#nav").find(".openNav").toggleClass('clicked');
        $(this).closest("#header").find(".social").toggleClass('clicked');
        $(this).closest("#header").find(".logoHeader").toggleClass('clicked');
        $(this).hide("fast");
        $(this).closest("#nav").find(".mainMenu").toggleClass('open');
        $(this).closest("#nav").find(".subMenu").removeClass('open');
        $(this).closest("#nav").find(".topLevelItem").removeClass('open');
        $(this).closest("#nav").find(".closeNav").hide("fast");
        $(this).closest("#nav").find(".openNav").attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });

    $('.topLevelItem').click(function () {
        $(this).toggleClass('open');
        $(this).closest('.hasSub').find(".subMenu").toggleClass('open');
    });

//    $('.topLevelItem').hover(function () {
//        $(this).closest('.hasSub').find(".subMenu").toggleClass('open');
//    });
//    
//    $('.hasSub').hover(function () {
//        $(this).find(".topLevelItem").attr('aria-expanded', function (i, attr) {
//            return attr === 'true' ? 'false' : 'true';
//        });
//    });
});