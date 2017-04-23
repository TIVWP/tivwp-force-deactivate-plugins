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
 */

if ( is_file( dirname( __FILE__ ) . '/tivwp-force-deactivate-plugins/main.php' ) ) {
	require_once dirname( __FILE__ ) . '/tivwp-force-deactivate-plugins/main.php';
}
