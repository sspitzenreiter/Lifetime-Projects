<html>
	<head>
	</head>
	<body>
		<table>
			<tr>
				<td>
					<?php 
	$id=$_REQUEST['id'];
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
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("Daftar",$link) or die ("Cannot select the database!");
	 $query="UPDATE jpcbeta SET nama='".$nama."', nis='".$nis."', tkt_kls='".$tkt."', jrs='".$jrs."', 
	 tmp_lhr='".$tmp."', tgl_lhr='".$tgl."', alm='".$alm."', agm='".$agm."', no_tlp='".$tlp."', 
	 nma_ort='".$ort."', jk='".$jk."', gd='".$gd."' WHERE id='".$id."'";
		
		 if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo "Data Berhasil Diubah";}
	 ?>
	 </td>
	 <td>
	 <form>
	 <input type="submit" name="button" id="1" value="Kembali ke Home" formaction="list.php" /> <input type="submit" name="button" id="1" value="Edit Yang Lain" formaction="edit.php" />
	 </form>
	 </td>
	</tr>
</table>
</body>
</html>
	 