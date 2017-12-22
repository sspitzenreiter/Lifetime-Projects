<?php
	include_once './DbConnect.php';
	function getCategories(){
		$db = new DB_CONNECT();
		$response = array();
		$response["categories"] = array();
		
		$result = mysql_query("SELECT * FROM categories");
		
		while($row = mysql_fetch_array($result)){
			$tmp = array();
			$tmp["id"] = $row["id"];
			$tmp["name"] = $row["name"];
			
			array_push($response["categories"], $tmp);
		}
		
		header('Content-Type: application/json');
		
		echo json_encode($response);
	}
	getCategories();
	?>