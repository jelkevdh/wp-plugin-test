<?php
/**
 * Plugin Name:       WP Test Plugin
 * Description:       Install plugins test plugin.
 * Version:           1.0.0
 * Author:            BitGuru
 * Author URI:        https://bitguru.nl
 * License:           GPL-2.0
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bg-shri
 * Domain Path:       /languages
 */

 namespace BitGuru\Shri;

defined('ABSPATH') || exit;


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function _wptp_wp_test_plugin() {
	printf('<p>WP PLUGIN TEST</p>');
}

add_action('plugins_loaded', '_wptp_wp_test_plugin');
