<html>
	<head>
		<title></title>
	</head>
	<body><form>
		<table width ="100%" align="center">
			<tr>
				<td><center>Daftar Anggota JPC</center></td><td><input type="submit" name="button" id="1" value="Daftar Baru" formaction="inputk.php" /> <input type="submit" name="button" id="2" value="Admin Mode" formaction="edit.php"/> </td>
			</tr>
			<tr>
				<td><?php
						$link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
						mysql_select_db("Daftar",$link) or die ("Cannot select the database!");
						$query="SELECT * FROM jpcbeta";
						$resource=mysql_query($query,$link);
							echo "
							<table align=\"center\" border=\"0\" width=\"100%\">
							<tr>
							<td><b>Nama</b></td> <td><b>NIS</b></td><td><b>Kelas</b></td></tr> ";
							while($result=mysql_fetch_array($resource))
							{ 
							echo "<tr><td><a href=\"detil.php?id=".$result[0]."\">".$result[1]."</a></td><td>".$result[2]."</td><td>".$result[3]."-".$result[4]." ".$result[5]."</td></tr>";
							} echo "</table>";
						?>
				</td>
				
			</tr>
		</table>
	</body>
</html>