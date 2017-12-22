<html>
	<body>
		<?php
			$mysql=mysql_connect("localhost","root","") or die("Id / Pass database salah")
			mysql_select_db("log",$mysql) or die ("Salah Database");
			$isi="SELECT * FROM idpass";
			$query=mysql_query($isi,$link);
			$all=mysql_fetch_array($resource);
			$a=0;
			echo "do{$a=$a+1;
					 $
						}"