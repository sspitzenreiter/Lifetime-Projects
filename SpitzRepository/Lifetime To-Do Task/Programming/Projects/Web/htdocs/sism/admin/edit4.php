<html>
	<head>
	</head>
	<body>
		<table>
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
	 
	 $db=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("Daftar",$db) or die ("Cannot select the database!");
	 $query="UPDATE siswa SET nama='".$nama."', nis='".$nis."', tkt_kls='".$tkt_kls."', jrs='".$jrs."', 
	 tmp_lhr='".$tmp."', tgl_lhr='".$tgl."', alm='".$alm."', agm='".$agm."', no_tlp='".$tlp."', nma_ort='".$ort."', jk='".$jk."' WHERE id='".$id."'";
		
		  if(!mysql_query($ins,$db))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo "Berhasil Diedit";}
	 ?>