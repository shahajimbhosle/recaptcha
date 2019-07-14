<?php
	// Holds helper functions required throught out the app

	function getController() {
		return ( true == isset( $_REQUEST['controller'] ) ) ? $_REQUEST['controller'] : 'enquiries';
	}

	function getAction() {
		return ( true == isset( $_REQUEST['action'] ) ) ? $_REQUEST['action'] : NULL;
	}

	function valStr( $strString, $intLength = 1 ) {
		if( false == is_string( $strString ) ) return false;
		if( $intLength > strlen( trim( $strString ) ) ) return false;

		return true;
	}

	function valObj( $objObject, $strClassname = '' ) {
		if( false == is_object( $objObject ) ) return false;
		if( true == valStr( $strClassname ) && trim( $strClassname ) != get_class( $objObject ) ) return false;

		return true;
	}

	function display( $mixVar ) {
		echo '<pre>';
		print_r( $mixVar );
		echo '</pre>';
	}

	function show( $mixVar ) {
		display( $mixVar );
		exit;
	}
?>