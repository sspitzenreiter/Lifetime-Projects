<?php include_once "dbconfig.php";?>
<html>
<body>
	<center>
	<table cellpadding ="6">
		<tr>
			<td>First Name</td><td>Last Name</td><td>User City</td>
		</tr>
<?php
	$sql_query="SELECT * FROM users";
	$result_set=mysql_query($sql_query);
	
	while($row = mysql_fetch_array($result_set))
		{?>
			<tr>
				<td><?php echo $row[1];?></td>
				<td><?php echo $row[2];?></td>
				<td><?php echo $row[3];?></td>
				<td><form action="edit_data.php"><input type="hidden" name="id" value="<?php echo $row[0];?>">
				<input type="submit" name="ids" value="Edit"></form></td>
			</tr><?php
		}?><tr><td colspan="3"><form action="add_data.php"><input type="submit" name="ll" value="Isi lagi yang baru"></form></table>
		</center>
	</body>
</html>
		