<?php
/**
 * Plugin Name: TIVWP Force Deactivate Plugins
 * Description: If the WP_LOCAL_DEV define is NOT true, disables plugins that you specify
 * Plugin URI: https://github.com/TIVWP/tivwp-force-deactivate-plugins
 * Author: TIV.NET
 * Author URI: http://www.tiv.net/
 * Version: 1.0.1
 * License: GPL-3.0
 * License URI: http://www.gnu.org/licenses/gpl.txt
 *
 * @attention This file must be copied to the `mu-plugins` folder.
 */

if (
	! ( defined( 'WP_LOCAL_DEV' ) && WP_LOCAL_DEV )
	&& defined( 'TIVWP_LOCAL_DEV_PLUGINS' ) && TIVWP_LOCAL_DEV_PLUGINS
) {

	/**
	 * Hooks into the `option_active_plugins` filter and does the disabling.
	 * @see get_option()
	 *
	 * @param array $plugins WP-provided list of plugins.
	 *
	 * @return array The filtered array of plugins.
	 */
	function tivwp_force_deactivate_plugins( $plugins ) {
		return array_diff( $plugins, TIVWP_LOCAL_DEV_PLUGINS );
	}

	add_filter( 'option_active_plugins', 'tivwp_force_deactivate_plugins' );
}
