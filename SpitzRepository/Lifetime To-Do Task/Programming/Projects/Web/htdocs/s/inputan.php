<html>
<body>
	<?php 
	 $nama=$_REQUEST['nama']; 
	 $id=$_REQUEST['id'];
	 
	 
	 $db=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("jpchain",$db) or die ("Cannot select the database!");
	 $ins="INSERT INTO kelas ( kelas_id, nama) 
	 values('".$id."', '".$nama."')";
		
		  if(!mysql_query($ins,$db))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo  "Data Berhasil Dimasukan";}
	 ?>
	 <form>
	  <input type="submit" name="button" id="1" value="Kembali" formaction="input1.html" />
	  </form>
	</body>
</html>