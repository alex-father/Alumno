<?php 
error_reporting(E_ALL ^ E_NOTICE);

class Db
{
	private static $instance=NULL;
	
	function __construct(){}

	public static function  getConnect(){
		if (!isset(self::$instance)) {
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$instance= new PDO('mysql:host=localhost:33065;dbname=cphpmysql','root','',$pdo_options);
		} 
		return self::$instance;
	}
}

 ?>