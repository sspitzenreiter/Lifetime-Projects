<?php
	$a = $_REQUEST['ak'];
	include "op1.php";
		
		
	if($a<=20)
		
		for($b=1;$b<=$a;$b++)
		{
			echo "<input type=\"text\"><br>";
		}
	else
		for($b=1;$b<=20;$b++)
		{
			echo "<input type=\"text\"><br>";
		}
		
			echo " <input type=\"submit\" value=\"Submit\">";
	?>