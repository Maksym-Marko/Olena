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
if ( ! defined( 'OLENA_THEME_VERSION' ) ) {

    define( 'OLENA_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

}

/**
 * Hooks.
*/
require_once get_template_directory() . '/inc/hooks.php';

/**
 * Helpers.
*/
require_once get_template_directory() . '/inc/helpers.php';

/**
 * Enqueue Scripts.
*/
require_once get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Notifications.
*/
require_once get_template_directory() . '/inc/notifications.php';
