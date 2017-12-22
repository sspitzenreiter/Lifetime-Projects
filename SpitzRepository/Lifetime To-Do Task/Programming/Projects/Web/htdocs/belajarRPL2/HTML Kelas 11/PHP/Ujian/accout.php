<html>
	<body>
		<?php
			$id=$_REQUEST['id'];
			$pass=$_REQUEST['pass'];
			 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
		      mysql_select_db("log",$link) or die ("Cannot select the database!");
			$query="SELECT * FROM idpass";
			$resource=mysql_query($query,$link);
	
			do{
			$id1=$result[1];
			$pass1=$result[2];}while($result=mysql_fetch_array($resource));
			if($id == $id1 && $pass == $pass1)
				echo "<br><br> Anda Berhasil Login";
			else
			if($id == $id1 && $pass != $pass1)
				echo "<br><br> Password Salah";
			else
			if($id != $id1 && $pass == $pass1)
				echo "<br><br> ID Salah";
			else
				echo "<br><br> ID dan Password salah";
				
				echo $id1;
			include "logsuc.php";
		?>
	</body>
</html>