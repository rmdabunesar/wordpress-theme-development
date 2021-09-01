<?php
/**
 * Theme Functions
 * 
 * @package Apex
 */

function apex_enqueue_script () {
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory_uri(). '/style.css' ), 'all' );
}
add_action( 'wp_enqueue_script', 'apex_enqueue_script' );

?>




