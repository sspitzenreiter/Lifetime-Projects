<?php
$a = $_REQUEST['id'];
$b = $_REQUEST['pass'];
$a1 = "schutz";
$a2 = "mnabil";

if($c <= 2)
if($a == $a1 && $b == $a2 && $c <= 3)
	include "logsuc.php";
else
	include "tryagain.php";
else
	include "logfal.php";

	


echo "<br>";
?>

<input type="text" name="id" placeholder="id" ><br>
<input type="password" name="pass"  ><br><br>
<input type="submit" value="Submit"><br><br>

