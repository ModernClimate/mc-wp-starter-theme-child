<?php

namespace MCC\App;

use MCC\App\Interfaces\WordPressHooks;

/**
 * Class Scripts
 *
 * @package MCC\App
 */
class Scripts implements WordPressHooks
{

    /**
     * Add class hooks.
     */
    public function addHooks()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueStyles']);
    }

    /**
     * Load stylesheets for the front end.
     */
    public function enqueueStyles()
    {
        wp_enqueue_style(
            'mc-child-styles',
            get_stylesheet_directory_uri() . '/build/styles/child-theme-styles.min.css',
            ['mc-styles'],
            MCC_THEME_VERSION
        );
    }
}
