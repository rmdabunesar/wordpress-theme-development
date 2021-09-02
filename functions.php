<?php
/**
 * Theme Functions
 * 
 * @package Apex
 */

if ( ! defined( 'AQUILA_DIR_PATH' ) ) {
	define( 'AQUILA_DIR_PATH', untrailingslashit( get_template_directory() ) );
}
require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';


function apex_get_theme_instance() {
    \APEX_THEME\Inc\APEX_THEME::get_instance();
}
apex_get_theme_instance();

function apex_enqueue_script() {
    // Register style
    wp_register_style( 'style-css', get_template_directory_uri() . '/style.css', false, 'all' );
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all' );
    
    // Register script
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true );
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), false, true );

    // Enqueue style
    wp_enqueue_style( 'style-css' );
    wp_enqueue_style( 'bootstrap-css' );
    
    // Enqueue script
    wp_enqueue_script( 'main-js' );
    wp_enqueue_script( 'bootstrap-js' );
}
add_action( 'wp_enqueue_scripts', 'apex_enqueue_script' );

?>




