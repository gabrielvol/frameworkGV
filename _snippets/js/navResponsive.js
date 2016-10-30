$(document).ready(function () {
    //Hamburger Menu
    $(".hamb").click(function () {
        $(this).closest("#nav").find(".mainMenu").removeClass('displayNoneBT');
    });
    $('.mainMenu a').click(function () {
        $(this).closest(".mainMenu").addClass('displayNoneBT');
    });
});