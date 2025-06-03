<?php
/**
 * Psicologia Sandplay functions and definitions.
 **/

 function psicologia_sandplay_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('editor-styles'); // Gutenberg
    
    // Enable excerpts for pages
    add_post_type_support('page', 'excerpt');
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
add_theme_support('post-thumbnails');

// Ensure featured image meta box is visible for pages
function add_featured_image_to_pages() {
    add_meta_box(
        'postimagediv',
        __('Featured Image'),
        'post_thumbnail_meta_box',
        'page',
        'side',
        'low'
    );
}
add_action('add_meta_boxes', 'add_featured_image_to_pages');

// Add excerpt meta box to pages
function add_excerpt_to_pages() {
    add_meta_box(
        'postexcerpt',
        __('Excerpt'),
        'post_excerpt_meta_box',
        'page',
        'normal',
        'core'
    );
}
add_action('add_meta_boxes', 'add_excerpt_to_pages');