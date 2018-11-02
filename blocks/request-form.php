<?php
/**
 * Registers Request Form block utilities
 *
 * @package Request_Form_Block
 */
/**
 * Register block editor assets
 */
function privacy_wp_lite_request_form_enqueue_block_editor_assets() {
	$dir        = dirname( __FILE__ );
	$block_js   = 'request-form/index.js';
	wp_enqueue_script(
		'request-form', plugins_url( $block_js, __FILE__ ), array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		), filemtime( "$dir/$block_js" )
	);
}
add_action( 'enqueue_block_editor_assets', 'privacy_wp_lite_request_form_enqueue_block_editor_assets' );