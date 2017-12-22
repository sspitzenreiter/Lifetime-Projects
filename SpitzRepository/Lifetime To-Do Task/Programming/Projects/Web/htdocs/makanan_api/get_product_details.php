<?php

$response = array();

require_once __DIR__ . '/DbConnect.php';

$db = new DB_CONNECT();
if(isset($_GET["pid"])){
	$pid = $_GET['pid'];
	
	$result = mysql_query("SELECT * FROM products WHERE pid = $pid");
	
	if(!empty($result)){
		if(mysql_num_rows($result) > 0){
			$result = mysql_fetch_array($result);
			
			$product = array();
			$product["pid"] = $result["pid"];
			$product["name"] = $result["name"];
			$product["price"] = $result["price"];
			$product["description"] = $result["description"];
			$product["created_at"] = $result["created_at"];
			$product["updated_at"] = $result["updated_at"];
			
			$response["success"] = 1;
			
			$response["product"] = array();
			
			array_push($response["product"], $product);
			
			echo json_encode($response);
		} else{
			$response["success"] = 0;
			$response["message"] = "Gak ada produk yang terlihat";
			
			echo json_encode($response);
		}
	}else{
		$response["success"] = 0;
		$response["message"] = "No Product";
		
		echo json_encode($response);
	}
}else{
	$response["success"] = 0;
	$response["message"] = "Required field is missing";
	
	echo json_encode($response);
}
?>