<?php


add_theme_support('title-tag');

//function dealer_theme_support() {
add_theme_support('custom-logo');
//}
//add_action('after_theme_setup', 'dealer_theme_support');

add_theme_support( 'post-thumbnails' );


// Menu
function dealer_menus() {
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus( $locations );
}
add_action( 'init', 'dealer_menus' );


// CSS
function dealer_register_styles() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('dealer-style', get_template_directory_uri() . '/style.css', array('dealer-bootstrap'), $version, 'all');
    wp_enqueue_style('dealer-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style('dealer-grid-gallery', get_template_directory_uri() . '/assets/css/grid-gallery/grid-gallery.min.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'dealer_register_styles');


// JS
function dealer_register_scripts() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('dealer-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array(), '2.10.2', true);
    wp_enqueue_script('dealer-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array(), '5.1.3', true);
    wp_enqueue_script('dealer-grid-galleryjs', get_template_directory_uri() . '/assets/js/grid-gallery/grid-gallery.min.js', array(), '1.0', true);
    wp_enqueue_script('dealer-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('dealer-mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'dealer_register_scripts');


// WIDGETS
function dealer_widget_areas() {
    // Nav
    // Custom HTML
    register_sidebar(
        array(
            'before_title' => '', // <h2>
            'after_title' => '', // </h2>
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sibebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    // Footer
    register_sidebar(
        array(
            'before_title' => '', // <h2>
            'after_title' => '', // </h2>
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Foote Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}
add_action( 'widgets_init', 'dealer_widget_areas' );