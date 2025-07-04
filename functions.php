<?php

/**
 * This file contains functions and hooks.
 *
 * @package Olena Theme
 * @author Maksym Marko <support@markomaksym.com.ua>
 *
 * @link https://markomaksym.com.ua/
 */

/**
 * Define version to use it with JS and CSS files.
 */
if (! defined('OLENA_THEME_VERSION')) {

    define('OLENA_THEME_VERSION', wp_get_theme()->get('Version'));
}

/**
 * Enqueue Scripts.
 */
require_once get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Register Custom Block Types.
 */
require_once get_template_directory() . '/inc/class-olena-custom-blocks.php';
new Olena_Custom_Blocks();

/**
 * Theme Update Detection.
 */
if (! defined('OLENA_LOCAL_ENV') || ! OLENA_LOCAL_ENV) {

    require_once get_template_directory() . '/inc/class-olena-update-detection.php';
    // Initialize the update detection
    new Olena_Update_Detection();
}
