/* * NombreDeProyecto * ========================================================
   Scrolling effects [/src/js/scrolling.js]
   ========================================================================== */

// REF [18] Button SiteTop
// REF [31*] Nav Button Hamb Open .site_scrolled_js
// REF [42] Nav height .site_scrolled_js

$(window).scroll(function () {
    if ($(this).scrollTop() > 80) {
        $('#header').addClass('site_scrolled_js'); // REF [42]
        $('.button_hamb_open').addClass('site_scrolled_js'); // REF [31*]
        $('.button_siteTop').addClass('site_scrolled_js'); // REF [18]
    } else {
        $('#header').removeClass('site_scrolled_js'); // REF [42]
        $('.button_hamb_open').removeClass('site_scrolled_js'); // REF [31*]
        $('.button_siteTop').removeClass('site_scrolled_js'); // REF [18]
    }
});

/* =============================================================================
   Smooth scroll jQuery
   ========================================================================== */
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
    ) {

        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        
        // Does a scroll target exist?
        if (target.length) {
            
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000, function() {
                
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                
                if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                };
            });
        }
    }
});