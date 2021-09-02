<?php 
/**
 * Register Menu
 * 
 * @package Apex
 */

namespace APEX_THEME\Inc;

use APEX_THEME\Inc\Traits\Singleton;

class Menus {
    use Singleton;

    protected function __construct() {
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions
        add_action( 'init', [$this, 'register_menus'] );
    }

    public function register_menus() {
        // Register menu
        register_nav_menus( [
            'apex-header-menu' => esc_html__( 'Header Menu', 'apex' ),
            'apex-footer-menu' => esc_html__( 'Footer Menu', 'apex' ),
        ] );
    }
}