<?php

	include "connect.php";
	
	$db = new CONNECTER();

	$nama = $_GET['nama'];
	$query = mysql_query("INSERT INTO anggota(id_kelas, nama, jk) values('10','$nama','L')");
	$response['message'] = array();
	$tmp = array();
	if($query){
		$tmp['message'] = "Success";
		array_push($response['message'], $tmp);
	}
	else
	{
		$tmp['message'] = "Fail";
		array_push($response['message'], $tmp);
	}
	
	echo json_encode($response);
?>