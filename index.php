<?php

namespace cooler\Index;

/*
|------------------------------------------------------------------
| Index Controller
|------------------------------------------------------------------
|
| Think about theme template files as some sort of controllers
| from MVC design pattern. They should link application
| logic with your theme view templates files.
|
*/

use function cooler\App\template;

/**
 * Renders index page header.
 *
 * @see resources/templates/index.tpl.php
 */
function render_header()
{
    template('partials/header', [
        'title' => __('Tonik — WordPress Starter Theme'),
        'lead' => __('Tonik is a WordPress Starter Theme which aims to modernize, organize and enhance some aspects of WordPress theme development. Take a look at what is waiting for you.'),
    ]);
}
add_action('theme/index/header', 'cooler\Index\render_header');

/**
 * Renders index page.
 *
 * @see resources/templates/index.tpl.php
 */
template('index');
