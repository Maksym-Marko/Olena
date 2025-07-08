<?php

/**
 * Here you can register your own custom blocks.
 *
 * @package Olena Theme
 * @author Maksym Marko <support@markomaksym.com.ua>
 *
 * @link https://markomaksym.com.ua/
 */

/**
 * The Olena Custom Blocks class.
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
         * Animated Section.
         * */
        add_action('init', array($this, 'animated_section'));

        /**
         * Full Width Section.
         * */
        add_action('init', array($this, 'full_width_section'));

        /**
         * Animated Box.
         * */
        add_action('init', array($this, 'animated_box'));

        /**
         * Animated Text.
         * */
        add_action('init', array($this, 'animated_text'));

        /**
         * Responsive Box.
         * */
        add_action('init', array($this, 'responsive_box'));

        /**
         * Floating Box.
         * */
        add_action('init', array($this, 'floating_box'));

        /**
         * Responsive spacer.
         * */
        add_action('init', array($this, 'responsive_spacer'));

        /**
         * Content Slider.
         * */
        add_action('init', array($this, 'content_slider'));
    }

    /**
     * Full Width Section.
     *
     * @since 1.0.0
     * 
     * @return void Register a Full Width Section custom block.
     */
    public function full_width_section()
    {

        register_block_type(get_template_directory() . '/custom-blocks/full-width-section');
    }

    /**
     * Animated Section custom block type.
     * 
     * @since 2.2.0
     * 
     * @return void Register a Animated Section custom block.
     */
    public function animated_section()
    {

        register_block_type(get_template_directory() . '/custom-blocks/animated-section');
    }

    /**
     * Animated Box custom block type.
     *
     * @since 1.0.0
     * 
     * @return void Register an animated box custom block.
     */
    public function animated_box()
    {

        register_block_type(get_template_directory() . '/custom-blocks/animated-box');
    }

    /**
     * Animated Text custom block type.
     *
     * @since 3.5.0
     * 
     * @return void Register an animated text custom block.
     */
    public function animated_text()
    {

        register_block_type(get_template_directory() . '/custom-blocks/animated-text');
    }

    /**
     * Responsive Box custom block type.
     *
     * @since 1.0.0
     * 
     * @return void Register a responsive box custom block.
     */
    public function responsive_box()
    {

        register_block_type(get_template_directory() . '/custom-blocks/responsive-box');
    }

    /**
     * Floating box custom block type.
     *
     * @since 1.0.0
     * 
     * @return void Register a floating box custom block.
     */
    public function floating_box()
    {

        register_block_type(get_template_directory() . '/custom-blocks/floating-box');
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

        register_block_type(get_template_directory() . '/custom-blocks/responsive-spacer');
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

        register_block_type(get_template_directory() . '/custom-blocks/content-slider');
    }
}
