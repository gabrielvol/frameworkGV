$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('#header').addClass('topper');
    } else {
        $('#header').removeClass('topper');
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
        $(this).closest("#header").find(".lang").toggleClass('clicked');
        $(this).closest("#nav").find(".modalNav").show( "slow", function() {
            $(this).closest("#nav").find(".mainMenu").toggleClass('open');
            $(this).closest("#nav").find(".closeNav").show("slow");
        });
    });      

    $('.closeNav').click(function () {
        $(this).closest("#nav").find(".openNav").toggleClass('clicked');
        $(this).closest("#header").find(".lang").toggleClass('clicked');
        $(this).closest("#nav").find(".modalNav").hide("fast");
        $(this).closest("#nav").find(".mainMenu").toggleClass('open');
        $(this).hide("fast");
    });  

    $('.modalNav').click(function () {
        $(this).closest("#nav").find(".openNav").toggleClass('clicked');
        $(this).closest("#header").find(".lang").toggleClass('clicked');
        $(this).hide("fast");        
        $(this).closest("#nav").find(".mainMenu").toggleClass('open');
        $(this).closest("#nav").find(".closeNav").hide("fast");
    });  
    
    // Acciones al hover en un item con submenú
    $('.hasSub').hover(function () {
        $(this).closest("#header").find(".bgMenu").toggleClass('displayNone');
        $(this).find(".topLevelItem").attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
});