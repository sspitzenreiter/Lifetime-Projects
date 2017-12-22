<?php
	include "konek.php";
	
	if(isset($_GET['login']))
	{
		header('location:.php');
	}
	if(isset($_GET['daftaranggota']))
	{
		header('location:anggota\user_add.php');
	}
	if(isset($_GET['adminlogin']))
	{
		header('location:.php');
	}
	if(isset($_GET['anggota']))
	{
		header('location:anggota\anggota_main.php');
	}
	if(isset($_GET['petugas']))
	{
		header('location:petugas\verify.php');
	}
	
	
?>							
