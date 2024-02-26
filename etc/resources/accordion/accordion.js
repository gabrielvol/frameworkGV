$(document).ready(function () {
    $('.list_accordion > li').click(function () {
        $(this).toggleClass('li_clicked_js');
        $(this).closest('li').find('.accordion_answer').slideToggle('slow');
    });
});