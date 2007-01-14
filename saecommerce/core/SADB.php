<?php
//SADB based on PEAR::DB
//$Id: SADB.php,v 1.4 2007/01/14 13:04:39 trinculescu Exp $

final class SADB extends DB {
	private static $instances;
	public static function &singleton($dsn = DSN){
		$md5Dsn = md5($dsn);
		if (!is_a(self::$instances[$md5Dsn], 'DB')) {
			self::$instances[$md5Dsn] = self::connect($dsn);
		}
		return self::$instances[$md5Dsn];
	}
}