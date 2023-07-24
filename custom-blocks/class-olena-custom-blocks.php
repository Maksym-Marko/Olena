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
 * The Olena Custom Blocks class.
 *
 * @link https://markomaksym.com.ua/
 *
 * @since 1.0.0
 */
class Olena_Custom_Blocks
{

    /**
     * Register your own block types for the Olena theme.
     *
     * @since 1.0.0
     * 
     * @return void
     */
    public function __construct()
    {

        /**
         *  Responsive spacer.
         * */
        add_action('init', array($this, 'responsive_spacer'));

        /**
         *  Content Slider.
         * */
        add_action('init', array($this, 'content_slider'));
    }

    /**
     * Responsive spacer custom block type.
     *
     * @since 1.0.0
     * 
     * @return void Register a responsive spacer custom block.
     */
    public function responsive_spacer()
    {

        register_block_type(__DIR__ . '/responsive-spacer');
    }

    /**
     * Content slider custom block type.
     *
     * @since 1.0.0
     * 
     * @return void Register a content slider custom block.
     */
    public function content_slider()
    {

        register_block_type(__DIR__ . '/content-slider');
    }
}
