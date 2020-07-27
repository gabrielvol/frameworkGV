$(document).ready(function () {
    //Hamburger Menu .old
    $(".button_hamb").click(function () {
        $(this).toggleClass('clicked');
        $(this).closest("#nav").find(".nav_nav").toggleClass('displayNoneBT');
    });
    $('.nav_nav a').click(function () {
        $(this).closest(".nav_nav").addClass('displayNoneBT');
    });
});