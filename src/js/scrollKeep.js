;(function($){  
    /**
     * Store scroll position for and set it after reload
     *
     * @return {boolean} [localStorage is available]
     */
    $.fn.scrollPosReload = function(){
        if (localStorage) {
            var posReader = localStorage["posStorage"];
            if (posReader) {
                $(window).scrollTop(posReader);
                localStorage.removeItem("posStorage");
            }
            $(this).click(function(e) {
                localStorage["posStorage"] = $(window).scrollTop();
            });

            return true;
        }

        return false;
    };}(jQuery));  