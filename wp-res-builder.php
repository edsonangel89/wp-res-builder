<?php
/**
 * Plugin Name:       Wp Res Builder
 * Description:       The most easy way to create web components for your UIs enjoy it!!
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Liberty Web Solutions	 | View details
 * Author URI:		  http://localhost:4000/lws/wp-admin/plugin-install.php?tab=plugin-information&plugin=wp-res-builder&TB_iframe=true&width=600&height=550
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-res-builder
 *
 * @package           create-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function wp_res_builder_form() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'wp_res_builder_form' );

function wp_res_builder_create_db() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'wpresbuild_table';
	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		PRIMARY KEY  (id)
	) ";
	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $sql );
}
register_activation_hook( __FILE__, 'wp_res_builder_create_db' );

function plugin_deactivate() {
	flush_rewrite_rules();
}

register_deactivation_hook( __FILE__, 'plugin_deactivate' );
