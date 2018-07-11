<?php
namespace WRDSB\Schools;

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/wrdsb
 * @since             1.0.0
 * @package           WRDSB_Schools
 *
 * @wordpress-plugin
 * Plugin Name:       WRDSB Schools Features
 * Plugin URI:        https://github.com/wrdsb/wordpress-plugin-schools-features
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            WRDSB
 * Author URI:        https://github.com/wrdsb
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       wrdsb-schools
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WRDSB_SCHOOLS_VERSION', '1.0.0' );

require_once 'vendor/autoload.php';

$container = get_container();

$container['plugin'] = $container->factory( function( $c ) {
	return new Plugin();
});

register_activation_hook( __FILE__, array( __NAMESPACE__ . '\\Activator', 'activate' ) );
register_deactivation_hook( __FILE__, array( __NAMESPACE__ . '\\Deactivator', 'deactivate' ) );

$plugin = $container['plugin'];
$plugin->run();


/**
 * Get plugin's container
 *
 * @return \Pimple\Container
 */
function get_container() : \Pimple\Container {
	static $container;
	if ( ! $container ) {
		$container = new \Pimple\Container();
	}
	return $container;
}
