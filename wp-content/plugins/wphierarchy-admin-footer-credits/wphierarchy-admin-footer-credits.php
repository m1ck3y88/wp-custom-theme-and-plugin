<?php
/*
Plugin Name: Simple Plugin
Plugin URI: https://github.com/m1ck3y88/wp-custom-theme-and-plugin
Description: Sample custom plugin.
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
if ( ! defined( 'WPINC' ) ) {
	die;
}

include(plugin_dir_path(__FILE__) . 'includes/admin-footer-text.php');