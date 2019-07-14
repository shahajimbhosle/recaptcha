<?php
// Base class fpr databse operations

class CBaseModel{

	public static function fetchData( $strSql, $objDatabase, $arrmixParams = [] ) {
		$objStatement = $objDatabase->prepare( $strSql );
		$objStatement->execute( $arrmixParams );

		return $objStatement->fetchAll( PDO::FETCH_ASSOC );
	}

	public static function insert( $strSql, $objDatabase, $arrmixParams = [] ) {
		$objStatement = $objDatabase->prepare( $strSql );
		if( false === $objStatement->execute( $arrmixParams ) ) return false;

		return $objDatabase->lastInsertId();
	}
}
?>