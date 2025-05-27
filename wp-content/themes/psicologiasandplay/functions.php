<?php
/**
 * Psicologia Sandplay functions and definitions.
 **/

 function psicologia_sandplay_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('editor-styles'); // Gutenberg
}
add_action('after_setup_theme', 'psicologia_sandplay_setup');

function psicologia_sandplay_assets() {
    wp_enqueue_style('psicologia-style', get_stylesheet_uri());
    
    // Enqueue JavaScript for home page interactions
    if (is_page_template('page-home.php') || is_front_page()) {
        wp_enqueue_script(
            'home-interactions',
            get_template_directory_uri() . '/js/home-interactions.js',
            array(),
            '1.0.0',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'psicologia_sandplay_assets');

function psicologia_register_menus() {
    register_nav_menus(array(
        'main_menu' => 'Menu'
    ));
}
add_action('init', 'psicologia_register_menus');

// function maintenance_redirect(){
//     if( !is_user_logged_in() ){
//         wp_redirect( site_url( 'maintenance.html' ), 302 );
//         exit();
//     }
// }
//add_action( 'init', 'maintenance_redirect' );

add_filter('show_admin_bar', '__return_false');
function mytheme_enqueue_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri(), [], microtime());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');