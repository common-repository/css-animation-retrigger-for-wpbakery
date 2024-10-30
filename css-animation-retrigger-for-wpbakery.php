<?php
/**
 * Plugin Name:       CSS Animation Retrigger for WPBakery
 * Plugin URI:        https://wordpress.org/plugins/css-animation-retrigger-for-wpbakery/
 * Description:       Retriggers the WPBakery CSS animations whenever the element is scrolled into view.
 * Version:           1.1
 * Requires at least: 6.3
 * Requires PHP:      8.0
 * Author:            WPExplorer
 * Author URI:        https://www.wpexplorer.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       css-animation-retrigger-for-wpbakery
 * Domain Path:       /languages/
 */

/*
CSS Animation Retrigger for WPBakery is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

CSS Animation Retrigger for WPBakery is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with CSS Animation Retrigger for WPBakery. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'CSS_Animation_Retrigger_For_WPBakery' ) ) {

	final class CSS_Animation_Retrigger_For_WPBakery {

		/**
		 * Constructor.
		 */
		public function __construct() {
			add_action( 'wp_enqueue_scripts', __CLASS__ . '::register_script' );
			add_action( 'wp_footer', __CLASS__ . '::enqueue_script' );
		}

		/**
		 * Register script.
		 */
		public static function register_script() {
			wp_register_script(
				'vc-css-animation-retrigger',
				trailingslashit( plugin_dir_url( __FILE__ ) ) . 'assets/vc-css-animation-retrigger.js',
				array( 'jquery' ),
				'1.0',
				true
			);
		}

		/**
		 * Enqueue JS needed to retrigger animations.
		 */
		public static function enqueue_script() {
			if ( wp_style_is( 'vc_animate-css' ) && wp_script_is( 'wpb_composer_front_js' ) ) {
				wp_enqueue_script( 'vc-css-animation-retrigger' );
			}
		}

	}

	new CSS_Animation_Retrigger_For_WPBakery;

}