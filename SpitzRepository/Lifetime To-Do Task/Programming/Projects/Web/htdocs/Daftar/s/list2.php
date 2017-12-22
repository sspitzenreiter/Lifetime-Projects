<html>
	<head>
		<title></title>
	</head>
	<body>
	<form>
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
			<tr>
				<td>
					<?php 
	 $nama=$_REQUEST['nama']; 
	 $nis=$_REQUEST['nis'];
	 $tkt=$_REQUEST['tkt_kls'];
	 $jrs=$_REQUEST['jrs'];
	 $nks=$_REQUEST['no_kls'];
	 $tmp=$_REQUEST['tmp_lhr'];
	 $tgl=$_REQUEST['tgl_lhr'];
	 $alm=$_REQUEST['alm']; 
	 $agm=$_REQUEST['agm']; 
	 $tlp=$_REQUEST['no_tlp'];
	 $ort=$_REQUEST['nma_ort'];
	 $jk=$_REQUEST['jk']; 
	 $gd=$_REQUEST['gd'];
	 
	 $db=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("Daftar",$db) or die ("Cannot select the database!");
	 $ins="INSERT INTO jpcbeta ( nama, nis, tkt_kls, jrs, no_kls, tmp_lhr, tgl_lhr, alm, agm, no_tlp, nma_ort, jk, gd) 
	 values('".$nama."', '".$nis."', '".$tkt."', '".$jrs."', '".$nks."', '".$tmp."', '".$tgl."', '".$alm."', '".$agm."', '".$tlp."', '".$ort."', '".$jk."', '".$gd."')";
		
		  if(!mysql_query($ins,$db))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo  "Data Berhasil Dimasukan";}
	 ?></td>
	 <tr>
		</table>
	</body>
</html>