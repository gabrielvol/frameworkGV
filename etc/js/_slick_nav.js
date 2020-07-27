$(document).ready(function () {
    var highest_index = 10000; 
    
    $(".nav_nav, .nav_nav .nav_main_ul").css("z-index", highest_index + 1);
    
    $(".slickNav .slickPrev").css("z-index", highest_index + 1);
    $(".slickNav .slickNext").css("z-index", highest_index + 1);
    
    
    
    $('.slickWithNav').slick({
        accessibility: true,
        infinite: false,
        
        dots: false,
        arrows: true,        
        fade: true,
        
        pauseOnHover: false,
        pauseOnFocus: false,
        swipeToSlide: false,
        
        slidesToShow: 1,
        slidesToScroll: 1,

        autoplay: false,
        speed: 500,
        asNavFor: '.slickNav'
    });
   
    $('.slickNav').slick({
        accessibility: true,
        infinite: false,
        
        dots: false,
        arrows: false,
        
        focusOnSelect: true,
        
        slidesToShow: 16,
        slidesToScroll: 0,
        asNavFor: '.slickWithNav'

        ,responsive: [
            {breakpoint: 1200,
                settings: {
                     slidesToShow: 14
                    ,slidesToScroll: 1
                }                
            },
            {breakpoint: 1024,
                settings: {
                     slidesToShow: 10
                    ,slidesToScroll: 1
                }                
            },
            {breakpoint: 768,
                settings: {
                     slidesToShow: 8
                    ,slidesToScroll: 1
                }                
            },
            {breakpoint: 600,
                settings: {
                     slidesToShow: 6
                    ,slidesToScroll: 1
                }
            },
            {breakpoint: 500,
                settings: {
                     slidesToShow: 5
                    ,slidesToScroll: 1
                }
            }
        ]
    });
});