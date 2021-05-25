<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * Remove styles and scripts from parent theme
 */
function remove_styles() {
    wp_dequeue_script('jquery');
    wp_dequeue_script('jquery-js');
}
add_action( 'wp_print_scripts', 'remove_styles', 10 );

/*
 * Add javascript and css
 */
function add_theme_scripts()
{
    /*Javascript*/
    wp_deregister_script( 'jquery-core' );
    wp_enqueue_script( 'jquery-core', "https://code.jquery.com/jquery-3.4.1.min.js", '', '3.4.1', true);
    wp_deregister_script( 'jquery-migrate' );
    wp_enqueue_script( 'jquery-migrate', "https://code.jquery.com/jquery-migrate-3.1.0.min.js", '', '3.1.0', true );
    wp_enqueue_script('slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery-core'), '1.8.1', true);
    wp_enqueue_script('main-js', STYLESHEET_PATH . '/assets/js/app.js', '', '1.0.0', true);

    /* CSS */
    
    wp_enqueue_style('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', '1.8.1');
    wp_enqueue_style('slick-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css', '1.8.1');
    wp_enqueue_style('main-styles', STYLESHEET_PATH .'/assets/css/styles.css', '1.0.0');
    //wp_enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', '1.0.0');

}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );