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

    protected function __construct()
    {
        // load class.
        $this->set_hooks();
    }

    protected function set_hooks() {
        // actions and filters

    }
}