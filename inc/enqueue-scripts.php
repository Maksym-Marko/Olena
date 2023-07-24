<?php

/**
 * This file contains scripts and styles that will be enqueued to the website.
 *
 * @package Olena Theme
 * @author Maksym Marko <support@markomaksym.com.ua>
 *
 * @link https://markomaksym.com.ua/
 */

if (!function_exists('olena_frontend_assets')) {
    /**
     * Enqueue scripts and styles on the website frontend.
     * 
     * @return void
     */
    function olena_frontend_assets()
    {

        /**
         *  Owl Carousel.
         * */
        // owl.carousel.min.css
        wp_enqueue_style(
            'olena-owl-carousel-style',
            get_template_directory_uri() . '/assets/packages/owl-carousel/owl.carousel.min.css',
            array(),
            OLENA_THEME_VERSION
        );

        // owl.carousel.min.js
        wp_enqueue_script(
            'olena-owl-carousel-script',
            get_template_directory_uri() . '/assets/packages/owl-carousel/owl.carousel.min.js',
            array('jquery'),
            OLENA_THEME_VERSION,
            true
        );

        /**
         *  Frontend Styles.
         * */
        wp_enqueue_style(
            'olena-frontend-style',
            get_template_directory_uri() . '/assets/css/frontend.css',
            array(),
            OLENA_THEME_VERSION
        );

        /**
         *  Frontend Scripts.
         * */
        wp_enqueue_script(
            'olena-frontend-script',
            get_template_directory_uri() . '/assets/js/frontend.js',
            array('jquery'),
            OLENA_THEME_VERSION,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'olena_frontend_assets');

if (!function_exists('olena_editor_assets')) {
    /**
     * Enqueue scripts and styles for the website editor.
     * 
     * @return void
     */
    function olena_editor_assets()
    {
        /**
         * Editor Styles.
         * */
        wp_enqueue_style(
            'olena-editor-style',
            get_template_directory_uri() . '/assets/css/editor.css',
            array(),
            OLENA_THEME_VERSION
        );

        /**
         * Editor Scripts.
         * */
        wp_enqueue_script(
            'olena-editor-script',
            get_template_directory_uri() . '/assets/js/editor.js',
            array('wp-blocks'),
            OLENA_THEME_VERSION
        );
    }
}
add_action('enqueue_block_editor_assets', 'olena_editor_assets');

if (!function_exists('olena_editor_frontend_assets')) {
    /**
     * Enqueue scripts and styles for the website editor and frontend.
     * 
     * @return void
     */
    function olena_editor_frontend_assets()
    {
        /**
         * Editor/Frontend Styles.
         * */
        wp_enqueue_style(
            'olena-editor-frontend-style',
            get_template_directory_uri() . '/assets/css/editor-frontend.css',
            array(),
            OLENA_THEME_VERSION
        );
    }
}
add_action('enqueue_block_assets', 'olena_editor_frontend_assets');
