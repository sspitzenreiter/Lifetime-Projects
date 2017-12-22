<html>
	<head>
	</head>
	<body><form>
	<table>
		<tr>
			<td>
		<?php 
	 	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
		 mysql_select_db("daftar",$link) or die ("Cannot select the database!");
		$query="SELECT * FROM jpcbeta";
		$resource=mysql_query($query,$link);
		echo "
		<table align=\"center\" border=\"0\" width=\"100%\">
		<tr>
		<td><b>Nama</b></td> <td><b>NIS</b></td><td><b>Kelas</b></td><td></td></tr> ";
			while($result=mysql_fetch_array($resource))
			{ 
			echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>
			".$result[3]."-".$result[4]." ".$result[5]."</td><td>
			<a href=\"edit.php?id=".$result[0]."\">Edit</a>
			</td><td><a href=\"hapus2.php?id=".$result[0]."\"> Hapus</a></td></tr>";
			} echo "</table>";
			?>
			</td>
		</tr><tr><td><input type="submit" name="button" id="button" value="Back" formaction="list.php" /></td></tr>
	</table>
	</form>
	 </body>
</html>