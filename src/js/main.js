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
            modalWindow.style.display = 'block';
            setTimeout(() => {
                modalWindow.style.zIndex = '1000';
                modalWindow.style.opacity = '1';
                document.body.style.overflow = 'hidden';
            }, 100)
        })
        modalWindow.addEventListener('click', (e) => {
            if (e.target.classList.contains('modal')) {
                modalWindow.style.opacity = '0';
                modalWindow.style.zIndex = '-1';
                document.body.style.overflowY = 'scroll';
                setTimeout(() => {
                    modalWindow.style.display = 'none'
                }, 400)
            }
        })
    }
    firsBtn('.header-btn');

});