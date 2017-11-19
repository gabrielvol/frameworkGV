$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('#header').addClass('topper');
    } else {
        $('#header').removeClass('topper');
    }
});

$(document).ready(function () {
    // Acciones del menú hamburguesa
    $(".hamb").click(function () {
        $(this).closest("#nav").toggleClass('clicked');
        $(this).closest("#nav").find(".mainMenu").toggleClass('displayNoneBT');
    });    
    // Oculto menú al dar clic en algún item
    $('.mainMenu a').click(function () {
        $(this).closest(".mainMenu").addClass('displayNoneBT');
    });    
    // Acciones al hover en un item con submenú
    $('.hasSub').hover(function () {
        $(this).closest("#header").find(".bgMenu").toggleClass('displayNone');
        $(this).find(".topLevelItem").attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
});