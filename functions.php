<?php

/**
 * Functions and definitions
 *
 * @package MCC
 */

use MCC\App\Core\Init;
use MCC\App\Scripts;
use MCC\App\Theme\Styles;

/**
 * Define Plugin Version
 * Define Plugin directories
 */
define('MCC_THEME_VERSION', '1.0.0');
define('MCC_THEME_DIR', trailingslashit(get_stylesheet_directory()));
define('MCC_BASE_REST_URL', home_url() . '/wp-json/mcc/v1');

require __DIR__ . '/constants.php';

// Require Autoloader
require_once MCC_THEME_DIR . 'vendor/autoload.php';

/**
 * Theme Setup
 */
add_action('after_setup_theme', function () {

    (new Init())
        ->add(new Scripts())
        ->add(new Styles())
        ->initialize();

    load_theme_textdomain('mc-starter-theme-child', MCC_THEME_DIR . '/languages');
});
