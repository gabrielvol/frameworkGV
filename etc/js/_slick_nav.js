$(document).ready(function () {
    var highest_index = 10000; 
    
    $(".nav_nav, .nav_nav .nav_main_ul").css("z-index", highest_index + 1);
    
    $(".slick_nav .slickPrev").css("z-index", highest_index + 1);
    $(".slick_nav .slickNext").css("z-index", highest_index + 1);
       
    
    $('.slick_with_nav').slick({
        accessibility: true,
        infinite: true,
        
        dots: false,
        arrows: true,        
        fade: true, // Si se ve mas de un slide a la vez fade debe ser false.
        
        pauseOnHover: false,
        pauseOnFocus: false,
        swipeToSlide: false, // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.
        
        slidesToShow: 1, // Si se ve mas de un slide a la vez fade debe ser false.
        slidesToScroll: 1, // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.

        autoplay: false,
        speed: 500,
        asNavFor: '.slick_nav'
    });
   
    $('.slick_nav').slick({
        accessibility: true,
        infinite: false,
        
        dots: false,
        arrows: false,
        
        focusOnSelect: true,
        
        slidesToShow: 16, // Si se ve mas de un slide a la vez fade debe ser false.
        slidesToScroll: 0, // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.
        asNavFor: '.slick_with_nav'

        ,responsive: [
            {breakpoint: 1200,
                settings: {
                     slidesToShow: 14 // Si se ve mas de un slide a la vez fade debe ser false.
                    ,slidesToScroll: 1 // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.
                }                
            },
            {breakpoint: 1024,
                settings: {
                     slidesToShow: 10 // Si se ve mas de un slide a la vez fade debe ser false.
                    ,slidesToScroll: 1 // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.
                }                
            },
            {breakpoint: 768,
                settings: {
                     slidesToShow: 8 // Si se ve mas de un slide a la vez fade debe ser false.
                    ,slidesToScroll: 1 // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.
                }                
            },
            {breakpoint: 600,
                settings: {
                     slidesToShow: 6 // Si se ve mas de un slide a la vez fade debe ser false.
                    ,slidesToScroll: 1 // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.
                }
            },
            {breakpoint: 500,
                settings: {
                     slidesToShow: 5 // Si se ve mas de un slide a la vez fade debe ser false.
                    ,slidesToScroll: 1 // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.
                }
            }
        ]
    });
});