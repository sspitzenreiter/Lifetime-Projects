<?php

	include_once '.DbConnect.php';
	
	function createNewCategory(){
		if(isset($_POST["name"]) && $_POST["name"] !=""){
			$response = array();
			$category = $_POST["name"];
			
			$db = new DbConnect();
			
			$query = "INSERT INTO categories(name) VALUES('$category')";
			$result = mysql_query($query) or die(mysql_error());
			if($result) {
				$response["error"] = false;
				$response["message"] = "Category created successfully!";
			}
			else
			{
				$response["error"] = true;
				$response["message"] = "Failed to create Category!";
			}
		}
		else{
			$response["error"] = true;
			$response["message"] = "Category name is missing!";
		}
		echo json_encode($response);
	}
	createNewCategory();
	?>