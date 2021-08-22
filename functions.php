<?php
function nlp_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'nlp_custom_logo_setup' );

function nlp_custom_new_menu() {
register_nav_menus(
    array(
        'topbar-menu' => __( 'TopBar Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        'mobile-menu' => __( 'Mobile Menu' ),
        'main-menu' => __( 'Main Menu' )
        )
    );
}
add_action( 'init', 'nlp_custom_new_menu' );

function nlp_enqueue_scripts(){
    wp_enqueue_script( 'sticky relocate', get_template_directory_uri() . '/js/sticky_relocate.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'menu button toggle', get_template_directory_uri() . '/js/menuButtonToggle.js');
}
add_action( 'wp_enqueue_scripts', 'nlp_enqueue_scripts' );