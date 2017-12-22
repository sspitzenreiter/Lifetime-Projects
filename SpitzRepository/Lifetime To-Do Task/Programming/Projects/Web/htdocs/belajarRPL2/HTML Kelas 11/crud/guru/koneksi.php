<?php
	session_start();
	$host = "localhost";
	$user_name = "root";
	$pass = "";
	$database_name = "task_new";
	
	$db_link = mysqli_connect($host,$user_name,
	$pass,$database_name);

?>