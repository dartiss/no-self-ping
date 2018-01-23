<?php
/*
Plugin Name: No Self Pings
Plugin URI: https://github.com/dartiss/no-self-pings
Description: Keeps WordPress from sending pings to your own site.
Version: 1.0
Author: Michael D. Adams
Author URI: http://blogwaffe.com/
Text Domain: no-self-ping
*/

/**
* No Self Pings
*
* PKeeps WordPress from sending pings to your own site.
*
* @package	no-self-ping
* @since	0.1
*/

/**
* Add meta to plugin details
*
* Add options to plugin meta line
*
* @since	1.0
*
* @param	string  $links	Current links
* @param	string  $file	File in use
* @return   string			Links, now with settings added
*/

function no_self_ping_plugin_meta( $links, $file ) {

	if ( false !== strpos( $file, 'no-self-pings.php' ) ) {

		$links = array_merge( $links, array( '<a href="https://github.com/dartiss/no-self-pings">' . __( 'Github', 'no-self-ping' ) . '</a>' ) );

		$links = array_merge( $links, array( '<a href="https://wordpress.org/support/plugin/no-self-ping">' . __( 'Support', 'no-self-ping' ) . '</a>' ) );
	}

	return $links;
}

add_filter( 'plugin_row_meta', 'no_self_ping_plugin_meta', 10, 2 );

/**
* Process Pings
*
* Before pinging the curated URLs, remove any that belong to this installation
*
* @since	0.1
*/

function no_self_ping( &$links ) {

	$home = home_url();

	foreach ( $links as $l => $link ) {

		if ( 0 === strpos( $link, $home ) ) {
			unset( $links[ $l ] );
		}
	}
}

add_action( 'pre_ping', 'no_self_ping' );
