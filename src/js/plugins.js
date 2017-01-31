$(document).ready(function () {
    //Hamburger Menu
    $(".hamb").click(function () {
        $(this).toggleClass('clicked');
        $(this).closest("#nav").find(".mainMenu").toggleClass('displayNoneBT');
    });
    $('.mainMenu a').click(function () {
        $(this).closest(".mainMenu").addClass('displayNoneBT');
    });
});