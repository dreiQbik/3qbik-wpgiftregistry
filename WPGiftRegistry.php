<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://dreiqbik.de
 * @since             1.0.0
 * @package           WP_Gift_Registry
 *
 * @wordpress-plugin
 * Plugin Name:       WPGiftRegistry
 * Plugin URI:        http://dreiqbik.de
 * Description:       A simple way to create a linked list of wishes for your wedding, birthday or other occasion.
 * Version:           1.2.1
 * Author:            Moritz Bappert
 * Author URI:        http://dreiqbik.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       WPGiftRegistry
 * Domain Path:       /languages
 */

namespace WPGiftRegistry;
use \WPGiftRegistry;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-WP_Gift_Registry-activator.php
 */
function activate_WP_Gift_Registry() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-WP_Gift_Registry-activator.php';
	WP_Gift_Registry_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-WP_Gift_Registry-deactivator.php
 */
function deactivate_WP_Gift_Registry() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-WP_Gift_Registry-deactivator.php';
	WP_Gift_Registry_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_WP_Gift_Registry' );
register_deactivation_hook( __FILE__, 'deactivate_WP_Gift_Registry' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-WP_Gift_Registry.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_WP_Gift_Registry() {

	$plugin = new WP_Gift_Registry();
	$plugin->run();

}
run_WP_Gift_Registry();
