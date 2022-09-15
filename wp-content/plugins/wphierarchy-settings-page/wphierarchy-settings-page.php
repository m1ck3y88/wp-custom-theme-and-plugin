<?php
/*
Plugin Name: Settings Page
Plugin URI: https://github.com/m1ck3y88/wp-custom-theme-and-plugin
Description: Demo settings page plugin.
Version: 1.0.0
Contributors: mpollard
Author: Michael Pollard
Author URI: https://mickeymakesapps.com
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wphierarchy
Domain Path:  /languages
*/

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

function wphierarchy_settings_pages()
{

    add_menu_page(

        __('Plugin Name', 'wphierarchy'),
        __('Plugin Menu', 'wphierarchy'),
        'manage_options',
        'wphierarchy',
        'wphierarchy_settings_page_markup',
        'dashicons-wordpress-alt',
        20


    );

    add_submenu_page(
        'wphierarchy',
        __( 'Plugin Feature 1', 'wphierarchy' ),
        __( 'Feature 1', 'wphierarchy' ),
        'manage_options',
        'wphierarchy-feature-1',
        'wphierarchy_settings_subpage_markup'
    );

    add_submenu_page(
        'wphierarchy',
        __( 'Plugin Feature 2', 'wphierarchy' ),
        __( 'Feature 2', 'wphierarchy' ),
        'manage_options',
        'wphierarchy-feature-2',
        'wphierarchy_settings_subpage_markup'
    );

}

add_action( 'admin_menu', 'wphierarchy_settings_pages' );

function wphierarchy_settings_page_markup() {

    // Double check user capabilities
    if ( !current_user_can( 'manage_options' ) ) {

        return;

    }
    ?>

<div>

    <h1><?php esc_html_e( get_admin_page_title() ) ?></h1>
    <p><?php esc_html_e( 'Demo content.', 'wphierarchy' ) ?></p>

</div>

<?php

}

function wphierarchy_settings_subpage_markup()
{
    // Double check user capabilities
    if ( !current_user_can('manage_options') ) {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
        <p><?php esc_html_e( 'Some content.', 'wphierarchy' ); ?></p>
    </div>
    <?php
}


function wphierarchy_default_sub_pages() {

    // Can add page as a submenu using the following:
    // add_dashboard_page()
    // add_posts_page()
    // add_media_page()
    // add_pages_page()
    // add_comments_page()
    // add_theme_page()
    // add_plugins_page()
    // add_users_page()
    // add_management_page()
    // add_options_page()

    add_dashboard_page(
        __( 'Cool Default Sub Page', 'wphierarchy' ),
        __( 'Custom Sub Page', 'wphierarchy' ),
        'manage_options',
        'wphierarchy-subpage',
        'wphierarchy_settings_page_markup'
    );

}
add_action( 'admin_menu', 'wphierarchy_default_sub_pages' );

// Add a link to your settings page in your plugin
function wphierarchy_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=wphierarchy">' . __( 'Settings', 'wphierarchy' ) . '</a>';
    array_push( $links, $settings_link );
    return $links;
}
$filter_name = "plugin_action_links_" . plugin_basename( __FILE__ );
add_filter( $filter_name, 'wphierarchy_add_settings_link' );

?>