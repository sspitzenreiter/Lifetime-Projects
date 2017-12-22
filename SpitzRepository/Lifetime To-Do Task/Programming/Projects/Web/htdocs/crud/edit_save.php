<?php include_once "dbconfig.php";
			$first_name = $_REQUEST['fnama'];
			$last_name = $_REQUEST['lname'];
			$city_name = $_REQUEST['city'];
			$user_id = $_REQUEST['id'];
			$sql_query = "UPDATE users SET first_name='".$first_name."', last_name='".$last_name."', users_city='".$city_name."' WHERE user_id='".$user_id."'";
				mysql_query($sql_query);
			echo "Data telah diubah";
		
?>
<form action = "index.php">
<input type="submit" value="back">
</form>