<?php

add_action( 'wp_enqueue_scripts', 'modelist_event_styles' );
add_action( 'wp_enqueue_scripts', 'modelist_event_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function modelist_event_styles() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	wp_enqueue_style( 'slick-style', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
	wp_enqueue_style( 'aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() .'/assets/css/bootstrap-grid.min.css' );

}
function modelist_event_scripts() {
	wp_enqueue_script( 'main-script', get_template_directory_uri() .'/assets/js/main.js',array('jquery'),null,true);
	wp_enqueue_script( 'aos-scripts', 'https://unpkg.com/aos@2.3.1/dist/aos.js',array('jquery'),null,true);
	wp_enqueue_script('slick-script', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',array('jquery'),null,true);
	wp_enqueue_script( 'lazyload-scripts', 'https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js',array('jquery'),null,true);
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
}    
?>
