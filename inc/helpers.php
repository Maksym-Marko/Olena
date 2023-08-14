<?php

/**
 * This file contains helper functions.
 *
 * @package Olena Theme
 * @author Maksym Marko <support@markomaksym.com.ua>
 *
 * @link https://markomaksym.com.ua/
 */

if (!function_exists('olena_is_olena_blocks_set_installed')) {

    /**
     * Check if the Olena Blocks Set plugin installed.
     * 
     * @since 1.1.0
     * 
     * @return bool If the Olena Blocks Set plugin installed - return TRUE.
     */

    function olena_is_olena_blocks_set_installed()
    {

        $olena_blocks_set_slugs = [
            'olena-blocks-set/olena-blocks-set.php',
            'olena-blocks-set/olena-blocks-set.php'
        ];

        $installed_plugins = get_plugins();

        return isset($installed_plugins[$olena_blocks_set_slugs[0]]) || isset($installed_plugins[$olena_blocks_set_slugs[1]]);
    }
}

if (!function_exists('olena_is_olena_blocks_set_activated')) {

    /**
     * Check if the Olena Blocks Set plugin activated.
     * 
     * @since 1.1.0
     * 
     * @return bool If the Olena Blocks Set plugin activated - return TRUE.
     */

    function olena_is_olena_blocks_set_activated()
    {

        $olena_blocks_set_slugs = [
            'olena-blocks-set/olena-blocks-set.php',
            'olena-blocks-set/olena-blocks-set.php'
        ];

        $active_plugins = get_option('active_plugins');

        return is_numeric(array_search($olena_blocks_set_slugs[0], $active_plugins)) || is_numeric(array_search($olena_blocks_set_slugs[1], $active_plugins));
    }
}

if (!function_exists('olena_display_olena_blocks_set_pattern')) {

    /**
     * The function displays HTML to notify the user that 
     * the Olena Blocks Set plugin needs to be installed.
     * 
     * @param string $pattern_name   Pattern name.
     *
     * @since 1.1.0
     * 
     * @return void Return HTML pattern if the Olena Blocks Set plugin doesn't activated.
     */

    function olena_display_olena_blocks_set_pattern($pattern_name)
    {

        $button_url = esc_url('https://olena-theme.com.ua/olena-blocks-set.zip');
        $button_text = __('Download and Activate Olena Blocks Set', 'olena');
?>

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"color":{"background":"#ffe4e4"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background" style="background-color:#ffe4e4;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ec1111"}},"fontSize":"medium"} -->
                <h3 class="wp-block-heading has-text-color has-medium-font-size" style="color:#ec1111"><?php printf(__('The "%s" pattern requires the Olena Blocks Set plugin to be installed!', 'olena'), esc_html($pattern_name)); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php printf(__('Please install and activate <strong>Olena Blocks Set</strong> plugin. The <strong>"%s"</strong> pattern contains some features that are provided only by <strong>Olena Blocks Set</strong> plugin.', 'olena'), esc_html($pattern_name)); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $button_url; ?>" target="_blank" rel="noreferrer noopener"><?php echo $button_text; ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

<?php
    }
}
