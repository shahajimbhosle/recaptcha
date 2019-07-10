<?php
	/**
	 *  Handle enquiry actions
	 */

	require_once 'CBaseController.class.php';

	class CEnquiriesController extends CBaseController {

		public function execute() {
			switch( getAction() ) {
				case 'create_enquiry':
					$this->handleCreateEnquiry();
					break;

				default:
					die( 'Invalid action.' );
			}
		}

		//  Handle functions

		public function handleCreateEnquiry() {
			$this->displayCreateEnquiry();
		}

		// Display functions

		public function displayCreateEnquiry() {
			$this->renderTemplate( 'create_enquiry' );
		}
	}
?>