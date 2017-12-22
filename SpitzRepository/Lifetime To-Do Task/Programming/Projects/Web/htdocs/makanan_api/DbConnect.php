<?php
class DB_CONNECT{
	function __construct(){
		$this->connect();
	}
	
	function __destruct(){
		$this->close();
	}
	
	function connect(){
		require_once __DIR__. '/Config.php';
		
		$con = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
		
		$db = mysql_select_db(DB_NAME) or die(mysql_error()) or die(mysql_error());
		return $con;
	}
	
	function close(){
		mysql_close();
	}
}
?>