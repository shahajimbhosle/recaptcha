<?php
	// Holds helper functions required throught out the app

	function getController() {
		return ( true == isset( $_REQUEST['controller'] ) ) ? $_REQUEST['controller'] : NULL;
	}

	function getAction() {
		return ( true == isset( $_REQUEST['action'] ) ) ? $_REQUEST['action'] : NULL;
	}
?>