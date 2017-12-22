<?php

$la=$_REQUEST['la'];
$lak=$_REQUEST['lak'];
$pre=$_REQUEST['pre'];
$per=$_REQUEST['per'];
$sol=$_REQUEST['sol'];

$pre1=$la*7300;
$per1=$la*9300;
$sol1=$la*6900;


echo "<table border=\"1\"><tr><td>Liter</td><td>Premium</td><td>Pertamax</td><td>Solar</td></tr>";
for($a=$la;$a<=$lak;$a++)
{
	
	echo "<tr><td>$la</td>";
	
	if($pre == 1)
		echo "<td>$pre1</td>";
	else
		echo "<td>-</td>";
	
	if($per == 1)
		echo "<td>$per1</td>";
	else
		echo "<td>-</td>";
	
	if($sol == 1)
		echo "<td>$sol1</td>";
	else
		echo "<td>-</td>";
	echo "</tr>";
	$la=$la+1;
	$pre1=$pre1+7300;
	$per1=$per1+9300;
	$sol1=$sol1+6900;
}	
echo "</table>";
?>