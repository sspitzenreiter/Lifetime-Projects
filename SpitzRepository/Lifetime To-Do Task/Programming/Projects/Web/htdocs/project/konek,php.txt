<?php
$dbhost = "localhost";
$db_usn = "root";
$db_pwd = "";
$db_name = "perpustakaan";

$db_link = mysqli_connect($dbhost,$db_usn,$db_pwd,$db_name);
if(!$db_link)
	{echo "Tidak dapat terhubung ke database";
	}
?>