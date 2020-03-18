function flicker(count, callback, current) {
    current = current || 0;

    $(".boxA")[current % 2 == 0 ? 'hide' : 'show']();

    setTimeout(function(){
        if (count * 2 <= current) {
            callback();
            return;
        }
        flicker(count, callback, current + 1)
    }, 500);
}

setTimeout(function () {
    flicker(3, function () {
        $(".boxB").fadeIn("slow");
    })
}, 1000)