<?php
	include "konek.php";
	$nama = "";
	$pass = "";
	$db = new CONNECT();
	if(isset($_GET['nama'])){
	$nama = $_GET['nama'];}
	if(isset($_GET['pass'])){
	$pass = $_GET['pass'];}
	$query = mysql_query("SELECT * FROM petugas where nama = '$nama' && password = '$pass'");
	$response['log'] = array();
	$result = array();
	$data = mysql_fetch_array($query);
	$row = mysql_num_rows($query);
	if($row > 0){
		$result['name'] = $data['nama'];
		$result['status'] = "1";
		array_push($response['log'], $result);
	}
	if($row == 0){
		$result['name'] = "NULL";
		$result['status'] = "0";
		array_push($response['log'], $result);
	}
	echo json_encode($response);
	
?>