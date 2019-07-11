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

				case 'insert_enquiry':
					$this->handleInsertEnquiry();
					break;

				default:
					die( 'Invalid action.' );
			}
		}

		//  Handle functions

		public function handleCreateEnquiry() {
			$this->displayCreateEnquiry();
		}

		public function handleInsertEnquiry() {
			require_once 'CRecaptcha.class.php';

			$objRecaptcha = new CRecaptcha();
			var_dump( $objRecaptcha->verifyCaptcha( $_POST['g-recaptcha-response'] ) );

			print_r( $objRecaptcha->getRecaptchaErrors() );
		}

		// Display functions

		public function displayCreateEnquiry() {
			$this->renderTemplate( 'create_enquiry' );
		}
	}
?>