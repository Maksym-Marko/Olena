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

    /** Use for production - wp_get_theme()->get( 'Version' ) */
    define( 'OLENA_THEME_VERSION', time() );

}

/**
 * Enqueue Scripts.
*/
require_once get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Register Custome Block Types.
*/
require_once get_template_directory() . '/inc/class-olena-custom-blocks.php';
new Olena_Custom_Blocks();

/**
 * MUST BE REMOVED!!!
*/
function sbSVGMimeType($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'sbSVGMimeType');