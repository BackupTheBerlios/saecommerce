<?php
//SADB based on PEAR::DB
//$Id: SADB.php,v 1.3 2007/01/14 10:35:09 trinculescu Exp $

final class SADB extends DB {
	private $instances;
	public static function &singleton($dsn = DSN){
		$md5Dsn = md5($dsn);
		if (!is_a(self::$instances[$md5Dsn], 'DB')) {
			self::$instances[$md5Dsn] = self::factory($md5Dsn);
		}
		return self::$instances[$md5Dsn];
	}
}