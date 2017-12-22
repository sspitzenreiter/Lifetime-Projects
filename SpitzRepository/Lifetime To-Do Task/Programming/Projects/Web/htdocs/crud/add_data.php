<?php
	include_once "dbconfig.php";
		if(isset($_POST['btn-save']))
		{
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$city_name = $_POST['city_name'];
				$sql_query = "INSERT INTO users(first_name,last_name,user_city)
				values('$first_name','$last_name','$city_name')";
			mysql_query($sql_query);
		}
	?>
<html>
	<head>
		<title>CRUD Operations with PHP and MySQL</title>
	</head>
	<body>
	<center>
		<form method="post">
			<table align="center">
				<tr>
					<td align="center"><a href="index.php">back to main page</a></td>
				</tr>
				<tr>
					<td><input type="text" name="first_name" placeholder="First Name" required/>
				</tr>
				<tr>
					<td><input type="text" name="last_name" placeholder="Last Name" required/>
				</tr>
				<tr>
					<td><input type="text" name="city_name" placeholder="City" required/>
				</tr>
				<tr>
					<td><input type="submit" name="btn-save" value="Save"></td>
				</tr>
			</table>
		</form>
	</body>
</html>