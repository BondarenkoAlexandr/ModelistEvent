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

    function firsBtn(button) {
        const headerBtn = document.querySelector(button),
        modalWindow = document.querySelector('.modal')
        headerBtn.addEventListener('click', () => {
            modalWindow.style.top = window.pageYOffset + 'px';
            modalWindow.style.width = '100%';
            modalWindow.style.opacity = '1';
            document.body.style.overflow = 'hidden';
        })
        modalWindow.addEventListener('click', (e) => {
            if (e.target.classList.contains('modal')) {
                modalWindow.style.width = '0';
                modalWindow.style.opacity = '0';
                document.body.style.overflowY = 'scroll';
            }
        })
    }
    firsBtn('.header-btn');
});