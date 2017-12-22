<?php
$p = $_REQUEST['p'];
$l = $_REQUEST['l'];
$t = $_REQUEST['t'];

$h = $p*$l*$t;
$l1 = $p*$l;
$l2 = $l*$t;
$l3 = $t*$p;
$l = $l1 + $l2 + $l3;


echo "Volumenya adalah : $h <br>";
echo "Luasnya adalah : $l";

	


echo "<br>";
?>



