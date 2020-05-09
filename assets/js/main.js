document.addEventListener("DOMContentLoaded", function(event) {
    
    $(document).ready(function(){
        $('.feedback-slider').slick({
            dots: false,
            prevArrow: '<div id="prev" type="button" class="slick-prevs"><img src="http://one.wordpress.test/wp-content/themes/modelist/assets/img/left-arrow_dis.png" alt="left-arrow"></div>',
            nextArrow: '<div id="next" type="button" class="slick-nexts"><img src="http://one.wordpress.test/wp-content/themes/modelist/assets/img/right-arrow.png" alt="right-arrow"></div>',
            infinite: false,
            arrows: true,
            fade: true,
            speed: 400
        });
    });
    
    // Смена цвета стрелок в слайдере

    window.onload = function slickDis(button) {
        document.getElementById('prev').addEventListener('click', () => {
            if (document.getElementById('prev').classList.contains('slick-disabled')) {
                document.querySelector('.slick-prevs img').src = 'http://one.wordpress.test/wp-content/themes/modelist/assets/img/left-arrow_dis.png'
   
            } else {
                document.querySelector('.slick-prevs img').src = 'http://one.wordpress.test/wp-content/themes/modelist/assets/img/left-arrow.png' 
            }
            if (!document.getElementById('prev').classList.contains('slick-disabled')) {
                document.querySelector('.slick-nexts img').src = 'http://one.wordpress.test/wp-content/themes/modelist/assets/img/right-arrow.png';
            } 
        })
        document.getElementById('next').addEventListener('click', () => {
            if (document.getElementById('next').classList.contains('slick-disabled')) {
                document.querySelector('.slick-nexts img').src = 'http://one.wordpress.test/wp-content/themes/modelist/assets/img/right-arrow_dis.png'
            } else {
                document.querySelector('.slick-nexts img').src = 'http://one.wordpress.test/wp-content/themes/modelist/assets/img/right-arrow.png'
                
            }
            if (!document.getElementById('next').classList.contains('slick-disabled')) {
                document.querySelector('.slick-prevs img').src = 'http://one.wordpress.test/wp-content/themes/modelist/assets/img/left-arrow.png';
            } 
        })
    }

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