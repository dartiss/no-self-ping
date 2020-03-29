<?php
/**
 * Uninstaller
 *
 * Uninstall the plugin by removing any options from the database
 *
 * @package  no-self-pings
 */

// If the uninstall was not called by WordPress, exit.

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

// Remove options.

delete_option( 'no_self_pings_option' );
