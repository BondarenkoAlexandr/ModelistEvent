document.addEventListener("DOMContentLoaded", function(event) {
    
    
    
    $(document).ready(function(){
        $('.feedback-slider').slick({
            dots: false,
            prevArrow: '<div id="prev" type="button" class="slick-nexts"><img src="img/left-arrow.png"></div>',
            nextArrow: '<div id="next" type="button" class="slick-prevs"><img src="img/right-arrow.png"></div>',
            infinite: true,
            arrows: true,
            fade: true,
            speed: 400,
            autoplay: true,
            autoplaySpeed: 4000
        });
    });
});