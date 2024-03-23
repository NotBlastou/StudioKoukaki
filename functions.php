<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/style.css' );
}

if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; 
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}



function enqueue_swiper_scripts() {

    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/swiper-bundle.min.css');

    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), false, true);

    wp_enqueue_script('jquery');

    wp_enqueue_script('scripts.js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_scripts');