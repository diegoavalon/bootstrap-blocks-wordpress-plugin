<?php
/**
 * Plugin Name: eHealth Pillar Layout Blocks
 * Description: Bootstrap 4 Gutenberg Layout Blocks for WordPress.
 * Version: 1.2.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: wp-bootstrap-blocks
 * Domain Path: /languages/
 *
 * @package wp-bootstrap-blocks
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define WP_BOOTSTRAP_BLOCKS_PLUGIN_FILE.
if ( ! defined( 'WP_BOOTSTRAP_BLOCKS_PLUGIN_FILE' ) ) {
	define( 'WP_BOOTSTRAP_BLOCKS_PLUGIN_FILE', __FILE__ );
}

// Include the main WP_Bootstrap_Blocks class.
if ( ! class_exists( \WP_Bootstrap_Blocks\WP_Bootstrap_Blocks::class ) ) {
	require_once plugin_dir_path( WP_BOOTSTRAP_BLOCKS_PLUGIN_FILE ) . 'src/class-wp-bootstrap-blocks.php';
}

// Initialize plugin
\WP_Bootstrap_Blocks\WP_Bootstrap_Blocks::instance();
