<?php

/**
 * This file contains functions for user notifications.
 *
 * @package Olena Theme
 * @author Maksym Marko <support@markomaksym.com.ua>
 *
 * @link https://markomaksym.com.ua/
 */

if (!function_exists('olena_olena_blocks_set_checker')) {

    /**
     * This function checks if the Olena Blocks Set is installed and activated.
     * If no, a website admin will receive a red notification.
     * 
     * @return void
     */
    function olena_olena_blocks_set_checker()
    {

        if (!current_user_can('activate_plugins')) return;

        if ('true' === get_user_meta(get_current_user_id(), '_olena_theme_install_notice_viewed', true)) return;

        $screen = get_current_screen();
        if (isset($screen->parent_file) && 'plugins.php' === $screen->parent_file && 'update' === $screen->id) return;

        if (olena_is_olena_blocks_set_installed()) {

            $message = esc_html__('The Olena Theme is a starter theme that works perfectly with the Olena Blocks Set plugin. Once you activate the plugin, you will get more features for your amazing website.', 'olena');
            $button_url = esc_url(admin_url('plugins.php'));
            $button_text = 'Activate Olena Blocks Set';
        } else {

            $message = esc_html__('The Olena Theme is a starter theme that works perfectly with the Olena Blocks Set plugin. Once you download and activate the plugin, you will get more features for your amazing website. Click the button below and download the plugin to your PC. After that you can upload the plugin on your plugin page and activate it.', 'olena');
            $button_url = esc_url('https://wordpress.org/plugins/olena-block-sets/');
            $button_text = 'Download Olena Blocks Set';
        }

?>

        <style>
            .olena-notification-wrapper {
                display: flex;
                flex-wrap: wrap;
                padding: 20px;
            }

            .olena-notification-image {
                width: 10%;
            }

            .olena-notification-content {
                width: 90%;
            }

            .olena-notification-image img {
                width: 100%;
                max-width: 100px;
            }

            .olena-notification-install-button-wrapp {
                margin-top: 20px;
            }

            .olena-notification-install-button {
                background: #007cba;
                border: 0;
                border-radius: 2px;
                box-sizing: border-box;
                color: #ffffff;
                display: inline-flex;
                font-size: 14px;
                font-weight: 400;
                margin: 0;
                padding: 16px 25px;
                text-decoration: none;
                transition: box-shadow .1s linear;
            }

            .olena-notification-install-button:hover {
                color: #ffffff;
                background: #015c89;
            }
        </style>

        <div class="notice notice-error is-dismissible olena-notification-wrapper">
            <div class="olena-notification-image">
                <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/olena-logo.png'; ?>" alt="<?php echo esc_attr__('Get Olena Theme', 'olena'); ?>" />
            </div>
            <div class="olena-notification-content">
                <h3><?php echo esc_html__('Thanks for installing the Olena Theme!', 'olena'); ?></h3>
                <p><?php echo esc_html($message); ?></p>
                <a href="https://olena-theme.in.ua/" target="_blank"><?php echo esc_html__('View live demo of Olena theme', 'olena'); ?></a>
                <div class="olena-notification-install-button-wrapp">
                    <a class="olena-notification-install-button" href="<?php echo esc_attr($button_url); ?>"><?php echo esc_html($button_text); ?></a>
                </div>
            </div>
        </div>

        <script>
            jQuery(function($) {
                $('.notice.olena-notification-wrapper').on('click', 'button.notice-dismiss', function(event) {
                    event.preventDefault();

                    $.post(ajaxurl, {
                        action: 'olena_theme_notice_viewed'
                    });
                });
            });
        </script>

<?php }
}

if (!olena_is_olena_blocks_set_activated()) {
    add_action('admin_notices', 'olena_olena_blocks_set_checker');
}
