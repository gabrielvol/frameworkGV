$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.navMain').addClass('topper');
    } else {
        $('.navMain').removeClass('topper');
    }
});

$(document).ready(function () {
    //Hamburger Menu
    $(".hamb").click(function () {
        $(this).toggleClass('clicked');
        $(this).closest("#nav").find(".mainMenu").toggleClass('displayNoneBT');
    });
    $('.mainMenu a').click(function () {
        $(this).closest(".mainMenu").addClass('displayNoneBT');
    });
    
    // Hamburger Drawer
    $(".openNav").click(function () {
        $(this).toggleClass('clicked');
        $(this).closest("#nav").find(".modalNav").show( "100", function() {
            $(this).closest("#nav").find(".mainMenu").toggleClass('open');
            $(this).closest("#nav").find(".closeNav").show("fast");
            $(this).closest("#header").find(".lang").toggleClass('clicked');
            $(this).closest("#header").find(".logoH").toggleClass('clicked');
        });
    });

    $('.closeNav').click(function () {
        $(this).closest("#nav").find(".openNav").toggleClass('clicked');
        $(this).closest("#header").find(".lang").toggleClass('clicked');
        $(this).closest("#header").find(".logoH").toggleClass('clicked');
        $(this).closest("#nav").find(".modalNav").hide("fast");
        $(this).closest("#nav").find(".mainMenu").toggleClass('open');
        $(this).closest("#nav").find(".subMenu").removeClass('open');
        $(this).hide("fast");
        $(this).closest("#nav").find(".openNav").attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });

    $('.modalNav').click(function () {
        $(this).closest("#nav").find(".openNav").toggleClass('clicked');
        $(this).closest("#header").find(".lang").toggleClass('clicked');
        $(this).closest("#header").find(".logoH").toggleClass('clicked');
        $(this).hide("fast");
        $(this).closest("#nav").find(".mainMenu").toggleClass('open');
        $(this).closest("#nav").find(".subMenu").removeClass('open');
        $(this).closest("#nav").find(".closeNav").hide("fast");
        $(this).closest("#nav").find(".openNav").attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });

    $('.topLevelItem').click(function () {
        $(this).closest('.hasSub').find(".subMenu").toggleClass('open');
        $(this).toggleClass('open');
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