<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://funderberg.com
 * @since      1.0.0
 *
 * @package    Wp_Post_Qr_Code
 * @subpackage Wp_Post_Qr_Code/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Post_Qr_Code
 * @subpackage Wp_Post_Qr_Code/includes
 * @author     Wesley Funderberg <wesley@funderberg.com>
 */
class Wp_Post_Qr_Code_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-post-qr-code',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
