<?php
session_start();
	$locate=$_GET['conf'];
	$_SESSION['username']="";
	$_SESSION['password']="";
	header("location:../index.php");
?>