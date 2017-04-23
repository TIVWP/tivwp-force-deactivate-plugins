<?php

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
