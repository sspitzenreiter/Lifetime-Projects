<?php
	include "koneksi.php";
	session_unset();
	session_destroy();
	header("location:tampil_mapel2.php");
	
?>