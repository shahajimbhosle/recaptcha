<?php
class CRecaptcha {
	private $m_arrmixRecaptchaErrors = [];

	public function verifyCaptcha( $strRecaptchaResponse, $strSecretkey ) {
		require( PATH_RECAPTCHA_MASTER . 'src/autoload.php' );

		$objRecaptcha = new \ReCaptcha\ReCaptcha( $strSecretkey );
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