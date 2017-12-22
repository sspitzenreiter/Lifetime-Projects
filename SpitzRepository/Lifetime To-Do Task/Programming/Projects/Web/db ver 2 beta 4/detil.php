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
		
		
			while($result=mysql_fetch_array($resource))
			{ 
			echo "<tr><td>Nama :".$result[1]."</td></tr><tr><td>NIS :".$result[2]."</td></tr><tr><td>
			Kelas :".$result[3]."-".$result[4]." ".$result[5]."</td></tr><tr><td>Tempat Lahir :".$result[6].
			"</td></tr><tr><td>Tanggal Lahir :".$result[7]."</td></tr><tr><td>Alamat :".$result[8]."</td></tr><tr><td>Agama :".$result[9].
			"</td></tr><tr><td>No. Telepon :".$result[10]."</td></tr><tr><td> Nama Orangtua :".$result[11]."</td></tr><tr><td>Jenis Kelamin :".$result[12]."
			</td></tr><tr><td>Golongan Darah :".$result[13]."</td>
			</tr>";
			} echo "</table>";
			?>
			</td>
		</tr><tr><td><input type="submit" name="button" id="button" value="Back" formaction="list.php" /></td></tr>
	</table>
	</form>
	 </body>
</html>