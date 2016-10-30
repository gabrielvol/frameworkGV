$(document).ready(function () {
    /* font sizing */
    $('.reducir').click(function () {
        var ourText = $('section p');
        var currFontSize = ourText.css('fontSize');
        var finalNum = parseFloat(currFontSize, 10);
        var stringEnding = currFontSize.slice(-2);
        finalNum /= 1.2;
        ourText.css('fontSize', finalNum + stringEnding);
    });

    $('.aumentar').click(function () {
        var ourText = $('section p');
        var currFontSize = ourText.css('fontSize');
        var finalNum = parseFloat(currFontSize, 10);
        var stringEnding = currFontSize.slice(-2);
        finalNum *= 1.2;
        ourText.css('fontSize', finalNum + stringEnding);
    });
});