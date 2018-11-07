$(document).ready(function () {
    $('.sliderMain').slick({
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
        speed: 500
    });
   
    $('.sliderNav').slick({
        accessibility: true,
        infinite: false,
        
        dots: false,
        arrows: false,
        
        focusOnSelect: true,
        
        slidesToShow: 16,
        slidesToScroll: 0
    });
    
    
    $('.corvetteC3').slick({        
        asNavFor: '.corvetteC3Nav'
    });   
    $('.corvetteC3Nav').slick({        
        asNavFor: '.corvetteC3'
    });
});