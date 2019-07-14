<?php

/**
 *  Gives refering controller from request
 */
class AppControllers {
	private $m_arrstrControllers = [
		'enquiries' => 'CEnquiriesController.class.php'
	];

	public function getControllerPath( $strController ) {
		if( false == isset( $this->m_arrstrControllers[$strController] ) ) {
			die( 'Invalid controller name.' );
		}

		return $this->m_arrstrControllers[$strController];
	}
}
?>