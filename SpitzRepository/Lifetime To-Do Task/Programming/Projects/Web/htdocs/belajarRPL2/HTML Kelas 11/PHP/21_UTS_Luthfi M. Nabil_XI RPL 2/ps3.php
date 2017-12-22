<?php
$a = $_REQUEST['id'];
$b = $_REQUEST['pass'];
$c = $_REQUEST['lim'];
$a1 = "schutz";
$a2 = "mnabil";


if($c <= 3)
if($a == $a1 && $b == $a2)
	include "logsuc.php";
else
	include "tryagain.php";
else
	include "logfal.php";
	


echo "<br>";
?>



