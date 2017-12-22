<html>
	<body>
		<?php 
	 
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("daftar",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM jpcbeta";
		
		 $resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
		  $result=mysql_fetch_array($resource);
		  echo $result[2];
		  
	 ?>
	 </body>
</html>