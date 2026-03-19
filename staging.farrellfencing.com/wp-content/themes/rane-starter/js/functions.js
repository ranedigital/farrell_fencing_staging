(function($){ 
 
    console.log("child theme functions js loaded");

    /* ==================== */  
    /* Wow Library
    /* ==================== */
    new WOW().init();

    /* ======================================== */  
    /* Init Testimonil Slider
    /* ======================================== */

    $('#testimonial-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 4000
    });

})(jQuery);