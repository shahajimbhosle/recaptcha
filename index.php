<?php
	require_once 'AppConstants.php';
	require_once 'AppHelper.php';
	require_once 'AppControllers.class.php';

	$objAppControllers = new AppControllers();
	$strControllerClassPath = $objAppControllers->getControllerPath( getController() );
	$strControllerClassName = basename( $strControllerClassPath, '.class.php' );

	require_once $strControllerClassPath;
	$objController = new $strControllerClassName();
	$objController->execute();
?>