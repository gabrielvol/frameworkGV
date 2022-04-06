$(document).ready(function () {
/* // Slider Header --------------------------------------------------------- */
    $('.slider_main').slick({
         accessibility: true
        ,infinite: true
        
        ,vertical: false
        ,verticalSwiping: true
        
        ,dots: true
        ,arrows: false
        ,fade: true // Si se ve mas de un slide a la vez fade debe ser false.
        
        ,pauseOnHover: false
        ,pauseOnFocus: false
        ,swipeToSlide: true // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.
        ,focusOnSelect: true

        ,initialSlide: 0
        ,slidesToShow: 3 // Si se ve mas de un slide a la vez fade debe ser false.
        ,slidesToScroll: 3 // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.
        ,lazyLoad: 'ondemand'

        ,autoplay: true
        ,autoplaySpeed: 5000 // Delay before transition
        ,speed: 500 // Transition speed

        ,centerMode: true
        ,centerPadding: '60px'
        
        ,variableWidth: true
        ,adaptiveHeight: true
        
        ,asNavFor: '.slick_nav'

        ,responsive: [
// El valor del breakpoint no se incluye a sí mismo. Por ej.: la configuracion
// que se ve dentro de `[breakpoint: 500]` se aplica de 0 a 499.
// 
// La configuracion de un breakpoint se aplica a los breakpoint menores.
// 1025 para que corresponda con el media query beforeTabletLandscape
// 768 para que corresponda con el media query beforeTablet
// 601 para que corresponda con el media query beforeMobile600
// 500 para que corresponda con el media query mobileOnly
            {breakpoint: 1025,
                settings: {
                     slidesToShow: 3 // Si se ve mas de un slide a la vez fade debe ser false.
                    ,slidesToScroll: 3 // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.
                    ,infinite: true
                }                
            }
            ,{breakpoint: 768,
                settings: {
                     slidesToShow: 3 // Si se ve mas de un slide a la vez fade debe ser false.
                    ,slidesToScroll: 1 // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.
                }
            }
            ,{breakpoint: 601,
                settings: {
                     slidesToShow: 2 // Si se ve mas de un slide a la vez fade debe ser false.
                    ,dots: true
                }
            }
            ,{breakpoint: 500, 
                settings: {
                     slidesToShow: 1 // Si se ve mas de un slide a la vez fade debe ser false.
                }
            }
        ]
    });
    
    
/* // Slick Slider que se detiene ------------------------------------------- */
    var item_length = $('.slickFade > li').length - 1;
    var slider = $('.slickFade').slick({
        infinite: false,
        dots: false,
        arrows: false,            
        fade: true, // Si se ve mas de un slide a la vez fade debe ser false.
        pauseOnHover: false,
        pauseOnFocus: false,
        swipeToSlide: true, // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.
        slide: 'li',

        slidesToShow: 1, // Si se ve mas de un slide a la vez fade debe ser false.
        slidesToScroll: 1, // Si se scrollea mas de un slide a la vez swipeToSlide debe ser false.

        autoplay: true,
        autoplaySpeed: 3000,
        speed: 500
    });
    
    
/* // On before slide change ------------------------------------------------ */
    slider.on('afterChange', function(event, slick, currentSlide, nextSlide){
        //check the length of total items in .slide container
        //if that number is the same with the number of the last slider
        //Then pause the slider
        if( item_length === slider.slick('slickCurrentSlide') ){
            //this should do the same thing -> slider.slickPause();
            slider.slickSetOption("autoplay",false,false)
        };
    });
});