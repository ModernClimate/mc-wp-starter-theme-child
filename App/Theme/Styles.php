<?php

namespace MCC\App\Theme;

use MCC\App\Interfaces\WordPressHooks;

/**
 * Class Styles
 *
 * @package MCC\App\Theme
 */
class Styles implements WordPressHooks
{
    /**
     * Add class hooks.
     */
    public function addHooks()
    {
        add_action('mcc/styles/icons', [$this, 'outputInlineIcons']);
    }

    /**
     * Output inline svg icons
     */
    public function outputInlineIcons()
    {
        include get_stylesheet_directory() . '/assets/images/global.svg';
    }
}
