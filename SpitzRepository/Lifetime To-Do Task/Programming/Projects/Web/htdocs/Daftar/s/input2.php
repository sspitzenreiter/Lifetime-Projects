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
	 ?>
	 <form>
	  <input type="submit" name="button" id="1" value="Kembali" formaction="list.php" />
	  </form>
	</body>
</html>