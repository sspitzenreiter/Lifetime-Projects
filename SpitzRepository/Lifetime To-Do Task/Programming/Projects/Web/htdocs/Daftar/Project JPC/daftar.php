<html>
	<head>
		<title></title>
	<head>
	<body>
		<table align="center" width="800">
			<tr>
				<td> 
				<p align="center">
					<?php 
						$link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
						mysql_select_db("latihan",$link) or die ("Cannot select the database!");
						$query="SELECT * FROM siswa";
						$resource=mysql_query($query,$link);
						echo "
						<table align=\"center\" border=\"0\" width=\"70%\">
						<tr>
						<td><b>NIS</b></td> <td><b>Nama</b></td><td><b>Tempat Lahir</b></td><td><b>Tanggal Lahir</b></td><td><b>Jenis Kelamin</b></td></tr> ";
						while($result=mysql_fetch_array($resource))
						{ 
						echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[5]."</td></tr>";
						} echo "</table>";
						?>
				</p>
				</td>
			</tr>
		</table>
	</body>
</html>