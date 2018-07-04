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
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once 'vendor/autoload.php';

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WRDSB_SCHOOLS_VERSION', '1.0.0' );

register_activation_hook( __FILE__, array( __NAMESPACE__ . '\\Activator', 'activate' ) );
register_deactivation_hook( __FILE__, array( __NAMESPACE__ . '\\Deactivator', 'deactivate' ) );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wrdsb_schools() {

	$plugin = new Plugin();
	$plugin->run();

}

run_wrdsb_schools();
