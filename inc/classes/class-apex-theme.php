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
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filters
    }
}