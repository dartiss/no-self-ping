<?php
/**
 * Managa Pings
 *
 * Filter any incoming pings.
 *
 * @package no-self-ping
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Process Pings
 *
 * Before pinging the curated URLs, remove any that belong to this installation
 *
 * @param string $links URLs from post content.
 */
function no_self_ping( &$links ) {

	$home = esc_url( home_url() );

	// Get any additional URLs and explode into an array.

	$extra_urls = sanitize_option( 'ping_sites', get_option( 'no_self_pings_option', '' ) );

	if ( is_array( $extra_urls ) ) {
		$url_array = explode( PHP_EOL, $extra_urls );
	} else {
		$url_array = array();
	}

	// Process each link in the content and remove is it matches the current site URL or one of
	// the additional URLs provided.

	foreach ( $links as $l => $link ) {

		if ( 0 === strpos( $link, $home ) ) {
			unset( $links[ $l ] );
		}

		foreach ( $url_array as $url ) {

			$url = trim( $url );
			if ( 0 === strpos( $link, $url ) && '' !== $url ) {
				unset( $links[ $l ] );
			}
		}
	}
}

add_action( 'pre_ping', 'no_self_ping' );
