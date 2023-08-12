<?php

/**
 * This file contains functions that burn on particular hooks.
 *
 * @package Olena Theme
 * @author Maksym Marko <support@markomaksym.com.ua>
 *
 * @link https://markomaksym.com.ua/
 */

/**
 * Set Admin Notice as Viewed.
 *
 * @return void
 */
function ajax_olena_theme_notice_viewed()
{
	update_user_meta(get_current_user_id(), '_olena_theme_install_notice_viewed', 'true');
	die;
}
add_action('wp_ajax_olena_theme_notice_viewed', 'ajax_olena_theme_notice_viewed');
