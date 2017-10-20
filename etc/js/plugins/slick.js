$(document).ready(function () {
    //Slick Slider
    $('.slick').slick({
        infinite: true,
        dots: true,
        arrows: false,            
        fade: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        swipeToSlide: true,

        slidesToShow: 3,
        slidesToScroll: 3,
        lazyLoad: 'ondemand',

        autoplay: true,
        autoplaySpeed: 5000,
        speed: 500,

        centerMode: true,
        centerPadding: '60px',

        variableWidth: true,
        adaptiveHeight: true,

        responsive: [
            {breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }                
            },
            {breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});