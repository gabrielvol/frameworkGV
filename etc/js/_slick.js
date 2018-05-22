$(document).ready(function () {
    //Slick Slider
    $('.slick').slick({
         accessibility: true
        ,infinite: true
        
        ,dots: true
        ,arrows: false
        ,fade: true
        
        ,pauseOnHover: false
        ,pauseOnFocus: false
        ,swipeToSlide: true
        ,focusOnSelect: true

        ,slidesToShow: 3
        ,slidesToScroll: 3
        ,lazyLoad: 'ondemand'

        ,autoplay: true
        ,autoplaySpeed: 5000
        ,speed: 500

        ,centerMode: true
        ,centerPadding: '60px'
        
        ,variableWidth: true
        ,adaptiveHeight: true
        
        ,asNavFor: '.sliderNav'

        ,responsive: [
            {breakpoint: 1024,
                settings: {
                     slidesToShow: 3
                    ,slidesToScroll: 3
                    ,infinite: true
                    ,dots: true
                }                
            }
            ,{breakpoint: 600,
                settings: {
                     slidesToShow: 2
                    ,slidesToScroll: 2
                }
            }
            ,{breakpoint: 480,
                settings: {
                     slidesToShow: 1
                    ,slidesToScroll: 1
                }
            }
        ]
    });
    
    // Slick slider que se detiene
    var item_length = $('.slickFade > li').length - 1;
    var slider = $('.slickFade').slick({
        infinite: false,
        dots: false,
        arrows: false,            
        fade: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        swipeToSlide: true,
        slide: 'li',

        slidesToShow: 1,
        slidesToScroll: 1,

        autoplay: true,
        autoplaySpeed: 3000,
        speed: 500
    });

        // On before slide change
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