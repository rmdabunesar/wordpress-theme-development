<?php
/**
 * Theme Functions.
 *
 * @package Apex
 */


if ( ! defined( 'APEX_DIR_PATH' ) ) {
	define( 'APEX_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'APEX_DIR_URI' ) ) {
	define( 'APEX_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}


require_once APEX_DIR_PATH . '/inc/helpers/autoloader.php';


function apex_get_theme_instance() {
    \APEX_THEME\Inc\APEX_THEME::get_instance();
}
apex_get_theme_instance();


?>




