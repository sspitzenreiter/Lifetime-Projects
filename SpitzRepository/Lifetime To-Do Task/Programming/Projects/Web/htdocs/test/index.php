<?php
	
	$response = array();
	
	include "connect.php";
	
	$db = new CONNECTER();
	
	$query = mysql_query("SELECT * FROM anggota");
	
	$anggota = array();
	$response["anggota"] = array();
	while($data = mysql_fetch_array($query)){
		$anggota['nama'] = $data['nama'];
		$anggota['jk'] = $data['jk'];
		array_push($response["anggota"], $anggota);
	}
	
	
	
echo json_encode($response);
	?>
	