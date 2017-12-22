<html>
	<head>
	</head>
	<body>
		<?php 
			$id=$_REQUEST['id']; 
	 
			$link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
			mysql_select_db("daftar",$link) or die ("Cannot select the database!");
			$query="DELETE FROM jpcbeta WHERE id='".$id."'";
		
			if(!mysql_query($query,$link))
			{die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
			else
			{
			echo "Record ".$id." removed successfully!";}
	 ?>
	 </body>
</html>