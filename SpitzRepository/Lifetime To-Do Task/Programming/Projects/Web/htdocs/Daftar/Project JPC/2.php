<html>
	<head>
	</head>
	<body><form>
	<table>
		<tr>
			<td>
		<?php 
		$id=$_REQUEST['id']; 
	 	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
		 mysql_select_db("daftar",$link) or die ("Cannot select the database!");
		$query="SELECT * FROM jpcbeta WHERE id='".$id."'";
		$resource=mysql_query($query,$link);
		
		echo "
		<table align=\"center\" border=\"0\" width=\"100%\">
		<tr>
		<td><b>Nama</b></td> <td><b>NIS</b></td><td><b>Kelas</b></td><td><b>Tempat Lahir</b></td>
		<td><b>Tanggal Lahir</b></td><td><b>Alamat</b></td><td><b>Agama</b></td><td><b>No. Telepon</b>
		</td><td><b>Nama Orangtua</b></td><td><b>Jenis Kelamin</b></td><td></td></tr> ";
			while($result=mysql_fetch_array($resource))
			{ 
			echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>
			".$result[3]."-".$result[4]." ".$result[5]."</td><td>".$result[6].
			"</td><td>".$result[7]."</td><td>".$result[8]."</td><td>".$result[9].
			"</td><td>".$result[10]."</td><td>".$result[11]."</td><td>".$result[12]."</td><td>".$result[13]."</td><td>
			<a href=\"teest.php?id=".$result[0]."\">Edit</a>
			</td><td><a href=\"hapus2.php?id=".$result[0]."\"> Hapus</a></td></tr>";
			} echo "</table>";
			?>
			</td>
		</tr><tr><td><input type="submit" name="button" id="button" value="Back" formaction="list.php" /></td></tr>
	</table>
	</form>
	 </body>
</html>