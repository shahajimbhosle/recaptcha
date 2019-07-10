<?php
	/**
	 * 
	 */
	class CBaseController {
		
		function __construct() {
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
	}
?>