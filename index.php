<?php
/*
Template Name: Sample Page
*/
?>
<?php get_header(); ?>
    
    <div class="howEvent">
        <div class="howEvent-title">
            <h2><?php the_field('howEvent-title')?></h2>
        </div>
        <div class="howEvent-block">
            <div class="howEvent-block_left">
                <div class="howEvent-block_left-item">
                    <img src="<?php the_field('howEvent-block_left-item_first')?>" alt="car">
                    <div class="">
                        <div class="howEvent-block_left-title">
                            <?php the_field('howEvent-block_left-title_first')?>
                        </div>
                        <div class="howEvent-block_left-text">
                        <?php the_field('howEvent-block_left-text_first')?>
                        </div>
                    </div>
                </div>
                <div class="howEvent-block_left-item">
                    <img class="howEvent-block_left-desk" src="<?php the_field('howEvent-block_left-desk')?>" alt="organization">
                    <div class="">
                        <div class="howEvent-block_left-title">
                        <?php the_field('howEvent-block_left-title_second')?>
                        </div>
                        <div class="howEvent-block_left-text">
                        <?php the_field('howEvent-block_left-text_second')?>
                        </div>
                    </div>
                    <img class="howEvent-block_left-mobile" src="<?php the_field('howEvent-block_left-desk')?>" alt="organization">
                </div>
                <div class="howEvent-block_left-item">
                    <img src="<?php the_field('howEvent-block_left-item_third')?>" alt="trophie">
                    <div class="">
                        <div class="howEvent-block_left-title">
                        <?php the_field('howEvent-block_left-title_third')?>
                        </div>
                        <div class="howEvent-block_left-text">
                        <?php the_field('howEvent-block_left-text_third')?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="howEvent-block_right">
                <div class="howEvent-block_right-item">
                    <img class="howEvent-block_right-desk" src="<?php the_field('howEvent-block_right-desk_first') ?>" alt="electronic">
                    <div class="">
                        <div class="howEvent-block_right-title">
                        <?php the_field('howEvent-block_right-title_first') ?>
                        </div>
                        <div class="howEvent-block_right-text">
                        <?php the_field('howEvent-block_right-text_first') ?>
                        </div>
                    </div>
                    <img class="howEvent-block_right-mobile" src="<?php the_field('howEvent-block_right-desk_first') ?>" alt="electronic">
                </div>
                <div class="howEvent-block_right-item">
                    <img src="<?php the_field('howEvent-block_right-desk_second') ?>" alt="age">
                    <div class="">
                        <div class="howEvent-block_right-title">
                        <?php the_field('howEvent-block_right-title_second') ?>
                        </div>
                        <div class="howEvent-block_right-text">
                        <?php the_field('howEvent-block_right-text_second') ?>
                        </div>
                    </div>
                </div>
                <div class="howEvent-block_right-item">
                    <img class="howEvent-block_right-desk" src="<?php the_field('howEvent-block_right-desk_third') ?>" alt="hard">
                    <div class="">
                        <div class="howEvent-block_right-title">
                        <?php the_field('howEvent-block_right-title_third') ?>
                        </div>
                        <div class="howEvent-block_right-text">
                        <?php the_field('howEvent-block_right-text_third') ?>
                        </div>
                    </div>
                    <img class="howEvent-block_right-mobile" src="<?php the_field('howEvent-block_right-desk_third') ?>" alt="hard">
                </div>
            </div>
        </div>
        <button class="howEvent-btn btn"><?php the_field('howEvent-btn') ?></button>
    </div>

    <section class="galary">
        <div class="galary-title">
            <h2>
            <?php the_field('galary-title') ?>
            </h2>
        </div>
        <?php the_field('slider') ?>
    </section>

    <section class="whyMe">
        <div class="whyMe-title">
            <h2><?php the_field('whyMe-title') ?></h2>
        </div>
        <img  class="whyMe-bg_left" src="<?php the_field('whyMe-bg_left') ?>" alt="car">
    <img  class="whyMe-bg_right" src="<?php the_field('whyMe-bg_right') ?>" alt="car">
        <div class="whyMe-subtitle">
        <?php the_field('whyMe-subtitle') ?>
        </div>
        <div class="whyMe-block">
            <div class="whyMe-block_item">
                <img src="<?php the_field('whyMe-block_item_first') ?>" alt="clock">
                <div class="whyMe-block_text">
                <?php the_field('whyMe-block_text_first') ?>
                </div>
            </div>
            <div class="whyMe-block_item">
                <img src="<?php the_field('whyMe-block_item_second') ?>" alt="man">
                <div class="whyMe-block_text">
                <?php the_field('whyMe-block_text_second') ?>
                </div>
            </div>
            <div class="whyMe-block_item">
                <img src="<?php the_field('whyMe-block_item_third') ?>" alt="instructor">
                <div class="whyMe-block_text">
                <?php the_field('whyMe-block_text_third') ?>
                </div>
            </div>
            <div class="whyMe-block_item">
                <img src="<?php the_field('whyMe-block_item_fourth') ?>" alt="brending">
                <div class="whyMe-block_text">
                <?php the_field('whyMe-block_text_fourth') ?>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback">
        <div class="feedback-title">
            <h2>
                Отзывы
            </h2>
        </div>
        <div class="feedback-slider">
            <div class="feedback-slider_item">
                <div class="feedback-slider_item-img">
                    <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/feedback.png" alt="feedback">
                    <span class="mobile-show">Бегущий Банкир
                        <span class="small">Спортсмен, бизнесмен,банкир</span>
                    </span>
                </div>
                <div class="feedback-slider_item-text">
                    Фантастическое место для детей и взрослых. Здесь можно научиться работать 
                    руками и головой. Здесь можно научить водить машину на максимально 
                    приближенном к реалиям тренажере. Есть троссы для моделей и тренировок.
                    Очень доступно и уютно.
                    
                    <span class="mobile-hide">Бегущий Банкир
                        <span class="small">Спортсмен, бизнесмен,банкир</span>
                    </span>
                </div>
            </div>
            <div class="feedback-slider_item">
                <div class="feedback-slider_item-img">
                    <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/feedback.png" alt="feedback">
                    <span class="mobile-show">Бегущий Банкир
                        <span class="small">Спортсмен, бизнесмен,банкир</span>
                    </span>
                </div>
                <div class="feedback-slider_item-text">
                    Фантастическое место для детей и взрослых. Здесь можно научиться работать 
                    
                    
                    <span class="mobile-hide">Бегущий Банкир
                        <span class="small">Спортсмен, бизнесмен,банкир</span>
                    </span>
                </div>
            </div>
            <div class="feedback-slider_item">
                <div class="feedback-slider_item-img">
                    <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/feedback.png" alt="feedback">
                    <span class="mobile-show">Бегущий Банкир
                        <span class="small">Спортсмен, бизнесмен,банкир</span>
                    </span>
                </div>
                <div class="feedback-slider_item-text">
                    Фантастическое место для детей и взрослых. Здесь можно научиться работать 
                    
                    
                    <span class="mobile-hide">Бегущий Банкир
                        <span class="small">Спортсмен, бизнесмен,банкир</span>
                    </span>
                </div>
            </div>
            <div class="feedback-slider_item">
                <div class="feedback-slider_item-img">
                    <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/feedback.png" alt="feedback">
                    <span class="mobile-show">Бегущий Банкир
                        <span class="small">Спортсмен, бизнесмен,банкир</span>
                    </span>
                </div>
                <div class="feedback-slider_item-text">
                    Фантастическое место для детей и взрослых. Здесь можно научиться работать 
                    руками и головой. Здесь можно научить водить машину на максимально 
                    приближенном к реалиям тренажере. Есть троссы для моделей и тренировок.
                    Очень доступно и уютно.
                    
                    <span class="mobile-hide">Филантроп
                        <span class="small">Спортсмен, бизнесмен,банкир</span>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="test">
        <div class="test-title">
            <h2>Протестировать наши гонки 
                <br class="mobile-hide"> Вы сможете на нашей локации</h2>
        </div>
        <button class="test-btn btn">
            Тест-драйв
        </button>
    </section>

    

    <section class="reservation">
        <div class="reservation-title">
            <h2>
                Забронировать дату мероприятия
            </h2>
        </div>
    </section>

    <section class="question">
        <div class="question-title">
            <h2>Остались вопросы – скачайте PDF - презентацию</h2>
            <a href="sass/style.sass" download class="question-btn btn">
                Скачать
            </a>
        </div>
    </section>

    <section class="contact">
        <div class="contact-title">
            <h2>Оставьте ваши контакты и мы свяжемся с вами</h2>
        </div>
        <form class="contact-form">
            <div class="contact-form_item">
                <div class="contact-form_item-title">
                    Имя
                </div>
                <input type="text" class="contact-form_item-input" placeholder="Имя">
            </div>
            <div class="contact-form_item">
                <div class="contact-form_item-title">
                    Телефон
                </div>
                <div class="contact-form_item-tel">
                    <div class="contact-form_item-telephone">+380</div> 
                    <input type="text" maxlength="9" class="contact-form_item-input contact-form_item-input_tel" placeholder="000000000">
                </div>
            </div>
            <div class="contact-form_item">
                <button class="contact-form_btn btn">Отправить</button>
            </div>
        </form>
        <div class="contact-car">
            <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/contact-car.png" alt="car">
        </div>
    </section>

    <section class="contactSocial">
        <div class="contactSocial-title">
            <h2>Контакты</h2>
        </div>
        <div class="contactSocial-block">
            <div class="contactSocial-item">
                <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/phone-contact.png" alt="phone">
                <a class="contactSocial-item_telephone" href="tel:+380954836969">+38 (095) 483 69 69</a>
            </div>
            <div class="contactSocial-item">
                <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/mail.png" alt="mail">
                <div class="contactSocial-item_text">
                    Электронная почта<br>
                    <a href="mailto:clubmodelist@gmail.com">clubmodelist@gmail.com </a>
                </div>
            </div>
            <div class="contactSocial-item">
                <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/location.png" alt="location">
                <div class="contactSocial-item_text">
                    Наш адрес: <br>
                    г. Киев, ул. Кавказкая, 13А
                </div>
            </div>
            <div class="contactSocial-item contactSocial-item_icons">
                <a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/assets/img/instagram.png" alt="instagram"></a>
                <a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/assets/img/facebook.png" alt="facebook"></a>
            </div>
        </div>
    </section>

    <div class="modal">
        <div class="modal-block">
            <div class="modal-block_title">
                Оставьте свои данные и наш 
                менеджер свяжется с Вами
            </div>
            <div class="modal-block_form">
                <input type="text" class="modal-block_input" placeholder="Имя">
                <input type="text" class="modal-block_input" placeholder="Телефон">
                <button class="btn modal-block_btn">Отправить</button>
            </div>
        </div>
    </div>

	<?php get_footer(); ?>