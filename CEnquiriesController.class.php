<?php
	/**
	 *  Handle enquiry actions
	 */

	require_once 'CBaseController.class.php';

	class CEnquiriesController extends CBaseController {

		protected $m_strRecaptchaSiteKey;

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
			$this->m_strRecaptchaSiteKey = $this->getConfigKey( 'RECAPTCHA_SITE_KEY' );
			$this->displayCreateEnquiry();
		}

		public function handleInsertEnquiry() {
			require_once 'CRecaptcha.class.php';

			$objRecaptcha = new CRecaptcha();
			if( false == $objRecaptcha->verifyCaptcha( $_POST['g-recaptcha-response'], $this->getConfigKey( 'RECAPTCHA_SECRET_KEY' ) ) ) {
				print_r( $objRecaptcha->getRecaptchaErrors() );
			}
		}

		// Display functions

		public function displayCreateEnquiry() {
			$arrmixParameter['recaptcha_site_key'] = $this->m_strRecaptchaSiteKey;
			$this->renderTemplate( 'create_enquiry', $arrmixParameter );
		}
	}
?>