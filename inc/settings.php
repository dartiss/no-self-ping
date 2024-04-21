<?php
/**
 * Settings
 *
 * A group of functions shared across my plugins, for consistency.
 *
 * @package no-self-ping
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add to settings
 *
 * Add a field to the Discussion settings screens to capture additional URLs
 */
function nsp_settings_init() {

	add_settings_section( 'nsp_section', __( 'No Self Pings', 'no-self-ping' ), 'nsp_section_callback', 'discussion' );

	add_settings_field( 'no_self_pings_option', __( 'Additional URLs', 'no-self-ping' ), 'nsp_setting_callback', 'discussion', 'nsp_section', array( 'label_for' => 'no_self_pings_option' ) );

	register_setting( 'discussion', 'no_self_pings_option' );
}

add_action( 'admin_init', 'nsp_settings_init' );

/**
 * Section callback
 *
 * Create the new section that we've added to the Discussion settings screen
 */
function nsp_section_callback() {

	/* translators: %s: URL of website */
	$text = __( 'By default, No Self Pings will exclude pings for this site (%s) but you can supply additional URLs below. Separate multiple URLs with line breaks.', 'no-self-ping' );

	echo esc_html( sprintf( $text, esc_url( home_url() ) ) );
}

/**
 * Settings callback
 *
 * Output the settings field
 */
function nsp_setting_callback() {

	$urls = sanitize_option( 'ping_sites', get_option( 'no_self_pings_option', '' ) );

	echo '<textarea name="no_self_pings_option" rows="3" class="large-text code">' . esc_html( $urls ) . '</textarea>';
}
