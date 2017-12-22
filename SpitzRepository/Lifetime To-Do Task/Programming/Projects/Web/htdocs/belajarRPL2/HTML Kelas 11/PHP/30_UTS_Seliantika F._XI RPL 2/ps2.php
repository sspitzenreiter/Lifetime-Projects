<?php
	$a = $_REQUEST['ak'];
	include "op1.php";
	
		if($a<=20)
		for($b=1;$b<=$a;$b++)
		{
			echo "<br><input type=\"text\" placeholder=\"$b\">";
		}
	else
		for($b=1;$b<=20;$b++)
		{
			echo "<br><input type=\"text\" placeholder=\"$b\">";
		}
			echo " <input type=\"submit\" value=\"Submit\">";
	?>