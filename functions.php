<?php
/**
 * Theme Functions
 * 
 * @package Apex
 */

function apex_enqueue_script() {
    wp_register_style( 'mystyle', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), wp_get_theme()->get( 'Version' ), true );

    wp_enqueue_style( 'mystyle' );
    wp_enqueue_script( 'main-js' );
}
add_action( 'wp_enqueue_scripts', 'apex_enqueue_script' );

?>




