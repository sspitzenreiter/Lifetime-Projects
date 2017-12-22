<?php
	include "koneksi.php";
	$user=$_GET['user'];
	$pass=$_GET['pass'];
	$query=mysqli_query($db_link,"insert into account values('$user','$pass');");
	if($_SESSION['user']==''){
	header("location:tampil_mapel2.php");}
	else{
	header("location:tampil_mapel.php");}
?>