<?php
// This is databse connection class

final class CDatabase {

	static $c_objDatabase;

	private function __construct() {}

	public static function singleton() {
		if( false == valObj( self::$c_objDatabase, 'PDO' ) ) {
			try{
				self::$c_objDatabase = new PDO( "mysql:host=localhost;dbname=recaptcha", 'root', '' );
			} catch( PDOException $e ) {
				die( 'Error: ' . $e->getMessage() );
			}
		}

		return self::$c_objDatabase;
	}
}
?>