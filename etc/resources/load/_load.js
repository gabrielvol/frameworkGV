$(document).ready(function () {
    $('.load_a').click(function() {
        $( ".loadHere" ).load( "/source/a.php p" );
    });
    $('.load_b').click(function() {
        $( ".loadHere" ).load( "/source/b.php p" );
    });
    $('.load_c').click(function() {
        $( ".loadHere" ).load( "/source/c.php p" );
    });
});