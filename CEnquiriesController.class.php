<?php
	/**
	 *  Handle enquiry actions
	 */

	require_once 'CBaseController.class.php';

	class CEnquiriesController extends CBaseController {

		protected $m_strRecaptchaSiteKey;
		protected $m_arrmixEnquiries;

		public function execute() {
			switch( getAction() ) {
				case NULL:
				case 'view_enquiries':
					$this->handleViewEnquiries();
					break;

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
				exit;
			}

			require_once PATH_MODELS . 'CEnquiriesModel.class.php';
			CEnquiriesModel::insertEnquiry( $_POST['enquiry'], $this->m_objDatabase );

			header( 'Location: ' . BASE_URL . '?controller=enquiries&action=view_enquiries' );
		}

		public function handleViewEnquiries() {
			require_once PATH_MODELS . 'CEnquiriesModel.class.php';
			$this->m_arrmixEnquiries = CEnquiriesModel::fetchEnquiries( $this->m_objDatabase );

			$this->displayViewEnquiries();
		}

		// Display functions

		public function displayCreateEnquiry() {
			$arrmixParameter['recaptcha_site_key'] = $this->m_strRecaptchaSiteKey;
			$this->renderTemplate( 'create_enquiry', $arrmixParameter );
		}

		public function displayViewEnquiries() {
			$arrmixParameter['enquiries'] = $this->m_arrmixEnquiries;
			$this->renderTemplate( 'view_enquiries', $arrmixParameter );
		}
	}
?>