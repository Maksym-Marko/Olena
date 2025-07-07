<?php

/**
 * Olena Theme Update Detection
 * 
 * Handles automatic theme update detection using a custom JSON file
 * 
 * @package Olena Theme
 * @author Maksym Marko <support@markomaksym.com.ua>
 *
 * @link https://markomaksym.com.ua/
 */

/**
 * The Olena Update Detection class.
 *
 * @since 3.4.0
 */
class Olena_Update_Detection
{

    /**
     * The theme slug
     */
    private $theme_slug = 'olena';

    /**
     * The remote JSON file URL
     */
    private $remote_json_url = 'https://olena-theme.com.ua/releases/olena-update.json';

    /**
     * Constructor
     */
    public function __construct()
    {
        add_filter('pre_set_site_transient_update_themes', array($this, 'check_for_update'));
        add_filter('themes_api', array($this, 'theme_api_call'), 10, 3);
        add_action('admin_notices', array($this, 'update_notice'));
    }

    /**
     * Check for theme updates
     * 
     * @param object $transient The transient object
     * @return object Modified transient object
     */
    public function check_for_update($transient)
    {

        if (empty($transient->checked)) {
            return $transient;
        }

        // Get current theme data
        $theme_data = wp_get_theme();
        $current_version = $theme_data->get('Version');

        // Get remote version info
        $remote_data = $this->get_remote_version_info();

        if (!$remote_data) {
            return $transient;
        }

        // Check if update is available
        if (version_compare($current_version, $remote_data['version'], '<')) {
            $transient->response[$this->theme_slug] = array(
                'theme' => $this->theme_slug,
                'new_version' => $remote_data['version'],
                'url' => $remote_data['url'] ?? '',
                'package' => $remote_data['download_url'],
                'requires' => $remote_data['requires'] ?? '',
                'tested' => $remote_data['tested'] ?? '',
                'last_updated' => $remote_data['last_updated'] ?? '',
                'sections' => array(
                    'description' => $remote_data['description'] ?? ''
                )
            );
        }

        return $transient;
    }

    /**
     * Handle theme API calls
     * 
     * @param mixed $result The result
     * @param string $action The action
     * @param array $args The arguments
     * @return mixed Modified result
     */
    public function theme_api_call($result, $action, $args)
    {
        if ($action !== 'theme_information') {
            return $result;
        }

        if (!isset($args->slug) || $args->slug !== $this->theme_slug) {
            return $result;
        }

        $remote_data = $this->get_remote_version_info();

        if (!$remote_data) {
            return $result;
        }

        $result = new stdClass();
        $result->name = $remote_data['name'];
        $result->slug = $this->theme_slug;
        $result->version = $remote_data['version'];
        $result->author = $remote_data['author'];
        $result->last_updated = $remote_data['last_updated'];
        $result->requires = $remote_data['requires'];
        $result->tested = $remote_data['tested'];
        $result->download_url = $remote_data['download_url'];
        $result->sections = array(
            'description' => $remote_data['description']
        );

        return $result;
    }

    /**
     * Get remote version information
     * 
     * @return array|false Remote data or false on failure
     */
    private function get_remote_version_info()
    {
        $cache_key = 'olena_theme_update_data';
        $cached_data = get_transient($cache_key);

        if ($cached_data !== false) {
            return $cached_data;
        }

        $response = wp_remote_get($this->remote_json_url, array(
            'timeout' => 15,
            'user-agent' => 'WordPress/' . get_bloginfo('version') . '; ' . get_bloginfo('url')
        ));

        if (is_wp_error($response)) {
            return false;
        }

        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);

        if (!$data || !isset($data['version'])) {
            return false;
        }

        // Cache the data for 12 hours
        set_transient($cache_key, $data, 12 * HOUR_IN_SECONDS);

        return $data;
    }

    /**
     * Display update notice in admin
     */
    public function update_notice()
    {
        if (!current_user_can('update_themes')) {
            return;
        }

        $theme_data = wp_get_theme();
        $current_version = $theme_data->get('Version');

        $remote_data = $this->get_remote_version_info();

        if (!$remote_data || version_compare($current_version, $remote_data['version'], '>=')) {
            return;
        }

        $update_url = admin_url('themes.php');

?>
        <div class="notice notice-warning is-dismissible">
            <p>
                <strong>Olena Theme</strong>
                <?php printf(
                    __('has a new version available: %s. <a href="%s">Update now</a>', 'olena'),
                    esc_html($remote_data['version']),
                    esc_url($update_url)
                ); ?>
            </p>
        </div>
<?php
    }

    /**
     * Get the remote JSON URL
     * 
     * @return string The remote JSON URL
     */
    public function get_remote_json_url()
    {
        return $this->remote_json_url;
    }

    /**
     * Set the remote JSON URL
     * 
     * @param string $url The remote JSON URL
     */
    public function set_remote_json_url($url)
    {
        $this->remote_json_url = $url;
    }
}
