$(document).ready(function () {
    /* Ancho Automático de ul */
    $("ul.pag").css("width", $("ul.pag").children("li").size() * 39);
    
    $('.mediaMenu li:first').addClass('selected');
});