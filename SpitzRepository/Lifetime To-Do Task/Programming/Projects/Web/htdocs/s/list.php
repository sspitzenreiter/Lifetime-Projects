<html>
	<head>
		<title></title>
	</head>
	<body><form>
		<table width ="100%" align="center">
			<tr>
				<td><center>Daftar Kelas</center></td><td><input type="submit" name="button" id="1" value="Daftar Baru" formaction="inputk.php" /> <input type="submit" name="button" id="2" value="Admin Mode" formaction="edit.php"/> </td>
			</tr>
			<tr>
				<td><?php
						$link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
						mysql_select_db("jpchain",$link) or die ("Cannot select the database!");
						$query="SELECT * FROM kelas";
						$resource=mysql_query($query,$link);
							echo "
							<table align=\"center\" border=\"0\" width=\"100%\">
							<tr>
							<td><b>ID Kelas</b></td> <td><b>Nama Kelas</b></td></tr> ";
							while($result=mysql_fetch_array($resource))
							{ 
							echo "<tr><td>".$result[0]."</td><td>".$result[1]."</td></tr>";
							} echo "</table>";
						?>
				</td>
				
			</tr>
		</table>
	</body>
</html>