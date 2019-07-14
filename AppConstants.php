<?php
	// Holds constants rewuired through app

	define( 'BASE_URL',  'http://127.0.0.1/reCaptcha/' );
	define( 'PUBLIC_URL', BASE_URL . 'public/' );

	define( 'BASE_PATH', dirname( __FILE__ ) . '/' );
	define( 'PATH_PUBLIC', BASE_PATH . 'public/' );
	define( 'PATH_TEMPLATES', BASE_PATH . 'templates/' );
	define( 'PATH_VENDORS', BASE_PATH . 'vendors/' );
	define( 'PATH_MODELS', BASE_PATH . 'models/' );

	define( 'PATH_RECAPTCHA_MASTER', PATH_VENDORS . 'recaptcha-master/' );
?>