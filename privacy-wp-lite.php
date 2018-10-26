<?php
/*
	Plugin Name: Privacy WP Lite
	Plugin URI: https://privacywp.com
	Description: Make edits to the WordPress privacy notices.
	Version: 1.0.1
	License: GPLv3
	License URI: https://www.gnu.org/licenses/gpl.html
	Author: Scott DeLuzio
	Author URI: https://scottdeluzio.com
	Text Domain: privacy-wp-lite
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( !defined( 'PRIVACY_WP_LITE_VERSION' ) ){
	define( 'PRIVACY_WP_LITE_VERSION', '1.0.1' );
}
if ( !defined( 'PRIVACY_WP_LITE_PLUGIN_LICENSE_PAGE' ) ){
	define( 'PRIVACY_WP_LITE_PLUGIN_LICENSE_PAGE', 'privacy-wp-license' );
}

include_once( 'includes/admin-menu.php' );
include_once( 'includes/filters.php' );
include_once( 'includes/functions.php' );
include_once( 'includes/general.php' );
include_once( 'includes/confirmation-messages.php' );
include_once( 'includes/export-email-to-user.php' );
include_once( 'includes/third-party.php' );
/**
 * These sections rely on user_confirmed_action_email_content filter.
 * Ticket #44314 references the duplicate use of this filter, which makes it impossible to
 * correctly filter the content in two different contexts.
 * https://core.trac.wordpress.org/ticket/44314
 * Will revisit these as the ticket evolves.
 */
// include_once( 'includes/erase-confirmation-email.php' );
// include_once( 'includes/user-confirmed-action-email-to-admin.php' );