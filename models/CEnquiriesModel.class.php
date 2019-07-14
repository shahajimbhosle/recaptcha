<?php
// Enquiries model

require_once 'CBaseModel.class.php';

class CEnquiriesModel extends CBaseModel {

	public static function fetchEnquiries( $objDatabase ) {
		$strSql = 'SELECT * FROM enquiries';
		return self::fetchData( $strSql, $objDatabase );
	}

	public static function insertEnquiry( $arrmixParams, $objDatabase ) {
		$strSql = 'INSERT INTO enquiries( name, contact_no, course ) VALUE( :name, :contact_no, :course )';
		return self::insert( $strSql, $objDatabase, $arrmixParams );
	}
}
?>