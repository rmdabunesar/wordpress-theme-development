<?php 
/**
 * Enqueue theme assets
 * 
 * @package Apex
 */

namespace APEX_THEME\Inc;

use APEX_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

    protected function __construct() {
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions 
        add_action( 'wp_enqueue_scripts', [$this, 'register_styles'] );
        add_action( 'wp_enqueue_scripts', [$this, 'register_scripts'] );
    }

    public function register_styles() {
        // Register style
        wp_register_style( 'style-css', APEX_DIR_URI . '/style.css', false, 'all' );
        wp_register_style( 'bootstrap-css', APEX_DIR_URI . '/assets/css/bootstrap.min.css', array(), false, 'all' );

        // Enqueue style
        wp_enqueue_style( 'style-css' );
        wp_enqueue_style( 'bootstrap-css' );        
    }

    public function register_scripts() {
        // Register script
        wp_register_script( 'main-js', APEX_DIR_URI . '/assets/js/main.js', array('jquery'), false, true );
        wp_register_script( 'bootstrap-js', APEX_DIR_URI . '/assets/js/bootstrap.bundle.min.js', array('jquery'), false, true );

        // Enqueue script
        wp_enqueue_script( 'main-js' );
        wp_enqueue_script( 'bootstrap-js' );
    }
}