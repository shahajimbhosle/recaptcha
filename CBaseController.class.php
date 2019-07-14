<?php
/**
 * Base class for application
 */
class CBaseController {
	
	protected $m_objDatabase;

	public function __construct() {
		require_once 'CDatabase.class.php';
		$this->m_objDatabase = CDatabase::singleton();
	}

	// Framework methods
	public function execute() {}

	public function finalize() {}

	// Template methods
	public function renderTemplate( $strTemplateName, $arrmixParameters = [], $boolIncludeBaseTemplates = true, $strTitle = 'reCaptcha' ) {
		if( false == file_exists( PATH_TEMPLATES . $strTemplateName . '.php' ) ) {
			die( 'Template file does not exists.' );
		}

		if( true == $boolIncludeBaseTemplates ) include_once PATH_TEMPLATES . 'base_header.php';

		extract( $arrmixParameters );
		include_once PATH_TEMPLATES . $strTemplateName . '.php';

		if( true == $boolIncludeBaseTemplates ) include_once PATH_TEMPLATES . 'base_footer.php';
	}

	// Other methods

	public function getConfigKey( $strKey ) {
		include_once 'AppKeys.class.php';
		return ( true == isset( AppKeys::$c_arrmixKeys[$strKey] ) ) ? AppKeys::$c_arrmixKeys[$strKey] : NULL;
	}
}
?>