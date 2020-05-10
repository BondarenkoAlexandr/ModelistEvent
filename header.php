<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" lang="ru" content="" />
    
    <!-- <link rel="stylesheet" href="css/slick.css"> -->
    <!-- <link rel="shortcut icon" type="image/png" href="img/"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="preload" href="css/fonts.css" as="style">
    <link media="none" onload="media='all'" rel="stylesheet" type="text/css", href="css/style.min.css"> -->
    <?php wp_head();?>
    <title><?php bloginfo('description')?></title>
</head>
<body>
    <header class="header">
        <div class="header-background">
            <video width="100%" height="auto" preload="auto" autoplay=""
            loop="loop" poster="">
                <source src="<?php the_field( 'header-background' ) ?>" type="video/mp4"></source>
            </video>
        </div>
       <nav class="header-nav">
            <div class="header-logo">
                <a href="#"><img src="<?php the_field( 'header-logo' ) ?>" alt="логотип"></a>
            </div>
            <div class="header-nav_social">
                <div class="header-nav_lang">
                    <a href="<?php echo get_site_url();?>?lang=ru">ru</a>/<a href="<?php echo get_site_url();?>/?lang=uk">ua</a>
                </div>
                <div class="header-nav_phone">
                    <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/phone.png" alt="phone"><a href="tel:+380954836969"><?php the_field( 'header-nav_phone' ) ?></a>
                </div>
            </div>
       </nav>
       <div class="header-title">
        <h1><?php the_field( 'header-title' ) ?></h1>
       </div>
       <div class="header-subtitle">
        <h3><?php the_field( 'header-subtitle' ) ?>
            <br> <span class="header-subtitle_mobile">
            <?php the_field( 'header-subtitle_mobile' ) ?>
            </span></h3>
       </div>
       <button class="header-btn btn">
       <?php the_field( 'header-btn' ) ?>
       </button>
       <div class="header-botTitle">
       <?php the_field( 'header-botTitle' ) ?>
        </div>    
    </header>