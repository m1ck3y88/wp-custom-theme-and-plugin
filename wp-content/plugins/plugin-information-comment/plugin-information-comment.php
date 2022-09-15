<?php
/*
Plugin Name: Information Comment
Plugin URI: https://github.com/m1ck3y88/wp-custom-theme-and-plugin
Description: Demo plugin for learning about the plugin information comment.
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

echo "<p style='text-align: center'>Hello, from the Information Comment plugin
 by <em><a href='https:mickeymakesapps.com'>Michael Pollard</a></em>!</p>";