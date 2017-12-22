<html>
	<head>
		<title>Halaman Utama</title>
	</head>
	<body>
		<table>
			<tr>
				<td>No</td>
				<td>First Name</td>
				<td>Last Name </td>
				<td>City</td>
			</tr>
			
			<?php 
					include_once "dbconfig.php";
					$sqlq = "select * from users";
					$res = mysql_query($sqlq);
					while ($row = mysql_fetch_array($res))
					{
						echo "<tr><td>Latihan</td></tr>";
					}
			?>
			
		</table>
	</body>
</html>