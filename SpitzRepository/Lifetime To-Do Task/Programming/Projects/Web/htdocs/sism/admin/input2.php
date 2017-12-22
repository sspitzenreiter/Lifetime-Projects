<html>
	<head>
		<title></title>
	<head>
	<body>
	<?php 
	 $nama=$_REQUEST['nama']; 
	 $nis=$_REQUEST['nis'];
	 $tkt=$_REQUEST['tkt_kls'];
	 $jrs=$_REQUEST['jrs'];
	 $nojrs=$_REQUEST['no_jrs']; 
	 $jk=$_REQUEST['jns_kel']; 
	 $tmp=$_REQUEST['tmp_lhr'];
	 $tgl=$_REQUEST['tgl_lhr'];
	 $tlp=$_REQUEST['nmr_tlp'];
	 $agm=$_REQUEST['agama']; 
	 $alm=$_REQUEST['alamat']; 
	 $ort=$_REQUEST['nma_ort'];

	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("Daftar",$link) or die ("Cannot select the database!");
	 $query="INSERT INTO jpc ( nama, nis, tkt_kls, jrs, no_jrs, jns_kel, tmp_lhr, tgl_lhr, nmr_tlp, agama, alamat, nma_ort) values('".$nama."', '".$nis."', '".$tkt."', '".$jrs."', '".$nojrs."', '".$jk."', '".$tmp."', '".$tgl."', '".$tlp."', '".$agm."', '".$alm."', '".$ort."')";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo "New record saved successfully!";}
	 ?>
	</body>
</html>