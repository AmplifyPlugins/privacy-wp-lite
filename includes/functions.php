<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
function privacy_wp_lite_active_tab( $tab ){
	$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'general';
	if( $tab == $active_tab || !isset( $_GET['tab'] ) && 'general' == $tab ){
		$class = 'nav-tab-active';
	} else {
		$class = '';
	}
	return $class;
}