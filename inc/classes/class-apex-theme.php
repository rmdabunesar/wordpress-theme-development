<?php 
/**
 * Bootstraps the Theme
 * 
 * @package Apex
 */

namespace APEX_THEME\Inc;

use APEX_THEME\Inc\Traits\Singleton;

class APEX_THEME {
    use Singleton;

    protected function __construct() {
        // load class.
        Assets::get_instance();
        Menus::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme() {
        /** automatic feed link*/
        add_theme_support( 'automatic-feed-links' );
    
        /** tag-title **/
        add_theme_support( 'title-tag' );
    
        /** post formats */
        add_theme_support( 'post-formats', [
            'aside',
            'image',
            'gallery',
            'video',
            'audio',
            'link',
            'quote',
            'status',
        ] );
    
        /** post thumbnail **/
        add_theme_support( 'post-thumbnails' );
    
        /** HTML5 support **/
        add_theme_support( 'html5', [
            'comment-list', 
            'comment-form', 
            'search-form', 
            'gallery', 
            'caption',
        ] );
    
        /** refresh widgest **/
        add_theme_support( 'customize-selective-refresh-widgets' );
    
        /** custom background **/
        add_theme_support( 'custom-background', [
            'default-image'          => '',
            'default-preset'         => 'default',
            'default-size'           => 'cover',
            'default-repeat'         => 'no-repeat',
            'default-attachment'     => 'scroll',
        ] );
    
        /** custom header **/
        add_theme_support( 'custom-header', [
            
            'default-image'          => '',
            'width'                  => 300,
            'height'                 => 60,
            'flex-height'            => true,
            'flex-width'             => true,
            'default-text-color'     => '',
            'header-text'            => true,
            'uploads'                => true,
        ] );
    
        /** custom logo **/
        add_theme_support( 'custom-logo', array(
            'height'      => 60,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => [ 'site-title', 'site-description' ],
        ) );

        add_theme_support( 'wp-block-style' );

        add_theme_support( 'align-wide' );

        add_editor_style();

        global $content_width;
        if ( ! isset( $content_width ) ) {
            $content_width = 1240;
        }

    }
}