$(document).ready(function () {
    var parent  = document.getElementById('container');
    var child   = document.getElementById('div');
    var scrollbarWidth          = child.offsetWidth - child.clientWidth;

    child.style.paddingRight    = scrollbarWidth + "px";
    child.style.width           = "calc(100% + " + scrollbarWidth + "px + " + scrollbarWidth + "px)";
});