<?php

namespace cooler\Footer;

/*
|------------------------------------------------------------------
| Footer Controller
|------------------------------------------------------------------
|
| Controller for outputting layout's closing markup. Template
| rendered here should include `wp_footer()` function call.
|
*/

use function cooler\App\template;

/**
 * Renders layout's footer.
 *
 * @see resources/templates/layout/footer.tpl.php
 */
template('layout/footer');
