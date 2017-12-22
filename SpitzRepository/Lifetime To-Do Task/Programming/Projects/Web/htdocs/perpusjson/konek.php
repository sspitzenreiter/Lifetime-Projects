<?php

	class CONNECT{
		
		function __construct(){
			$this->connect();
		}
		
		function __destruct(){
			$this->close();
		}
		
		function connect(){
			include "config.php";
			$con = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
			
			$db = mysql_select_db(DB_NAME) or die(mysql_error());
			
			return $con;
		}
		
		
		function close(){
			mysql_close();
		}
	}
	