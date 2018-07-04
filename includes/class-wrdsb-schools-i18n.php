<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/wrdsb
 * @since      1.0.0
 *
 * @package    Wrdsb_Schools
 * @subpackage Wrdsb_Schools/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wrdsb_Schools
 * @subpackage Wrdsb_Schools/includes
 * @author     WRDSB <website@wrdsb.ca>
 */
class Wrdsb_Schools_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wrdsb-schools',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
