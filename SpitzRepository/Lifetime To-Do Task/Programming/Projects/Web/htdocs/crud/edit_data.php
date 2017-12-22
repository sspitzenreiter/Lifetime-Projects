<?php include_once "dbconfig.php";


	?>
<html>
<body>
	<center><form action="edit_save.php">
	<table cellpadding ="6">
		<tr>
			<td></td>
		</tr>
<?php $id = $_GET['id'];
	$sql_query="SELECT * FROM users where user_id='".$id."'";
	$result_set=mysql_query($sql_query);
	
	while($row = mysql_fetch_array($result_set))
		{?>
			<tr>
				<td><input type="text" name="fnama" value="<?php echo $row[1];?>"></td>
			</tr>
			<tr>
				<td><input type="text" name="lname" value="<?php echo $row[2];?>"></td>
			</tr>
			<tr>
				<td><input type="text" name="city" value="<?php echo $row[3];?>"><input type="hidden" name="id" value="<?php echo $row[0];?>"></td>
				<td><input type="submit" name="ids" value="Save"></form></td>
			</tr><?php
		}?><tr><td colspan="3"></table>
		</center></form>
	</body>
</html>
		