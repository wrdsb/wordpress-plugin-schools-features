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

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WRDSB_SCHOOLS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wrdsb-schools-activator.php
 */
function activate_wrdsb_schools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wrdsb-schools-activator.php';
	Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wrdsb-schools-deactivator.php
 */
function deactivate_wrdsb_schools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wrdsb-schools-deactivator.php';
	Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wrdsb_schools' );
register_deactivation_hook( __FILE__, 'deactivate_wrdsb_schools' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wrdsb-schools.php';

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

	$plugin = new Main();
	$plugin->run();

}
run_wrdsb_schools();
