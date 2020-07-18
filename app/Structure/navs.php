<?php

namespace cooler\App\Structure;

/*
|----------------------------------------------------------------
| Theme Navigation Areas
|----------------------------------------------------------------
|
| This file is for registering your theme custom navigation areas
| where various menus can be assigned by site administrators.
|
*/

use function cooler\App\config;

/**
 * Registers navigation areas.
 *
 * @return void
 */
function register_navigation_areas()
{
    register_nav_menus([
        'primary' => __('Primary Menu', config('textdomain')),
        'social' => esc_html__('Social Media Menu', config('textdomain'))
    ]);
}
add_action('after_setup_theme', 'cooler\App\Structure\register_navigation_areas');
