<?php
	class CRecaptcha {
		private $m_strSiteKey = 'xxxx';		// Put your site key here
		private $m_strSecretKey = 'xxxx';	// Put your secret key here

		private $m_arrmixRecaptchaErrors = [];

		public function verifyCaptcha( $strRecaptchaResponse ) {
			require( PATH_RECAPTCHA_MASTER . 'src/autoload.php' );

			$objRecaptcha = new \ReCaptcha\ReCaptcha( $this->m_strSecretKey );
			$objResponse = $objRecaptcha->verify( $strRecaptchaResponse, $_SERVER['REMOTE_ADDR'] );

			if( true == $objResponse->isSuccess() ) return true;

			$this->setRecaptchaErrors( $objResponse->getErrorCodes() );
			return false;
		}

		public function setRecaptchaErrors( $arrmixErrors ) {
			$this->m_arrmixRecaptchaErrors = $arrmixErrors;
		}

		public function getRecaptchaErrors() {
			return $this->m_arrmixRecaptchaErrors;
		}
	}
?>