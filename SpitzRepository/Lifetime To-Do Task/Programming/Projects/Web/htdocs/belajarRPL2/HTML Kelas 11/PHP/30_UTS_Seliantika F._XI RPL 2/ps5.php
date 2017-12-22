<?php
$mot = $_REQUEST['mot'];
$dp = $_REQUEST['dp'];
$cil = $_REQUEST['cicil'];

switch($mot)
	{
	case "m1" : $hmot=10000000; break;
	case "m2" : $hmot=13000000; break;
	case "m3" : $hmot=15000000; break;
	}
	
switch($dp)
	{
	case "dp1" : $hdp=1000000; break;
	case "dp2" : $hdp=2000000; break;
	case "dp3" : $hdp=3000000; break;
	}	
	
switch($cil)
	{
	case "12b" : $jcil=0.1; $jbln=12; break;
	case "24b" : $jcil=0.2; $jbln=24; break;
	case "36b" : $jcil=0.3; $jbln=36; break;
	}

	$sb = $hmot - $hdp;
	$s  = $sb * $jcil;
	$sbay = $sb + $s;
	$bper = $sbay / $jbln;
	$tb=0;
echo "<table><tr>";
echo "<td>Yang telah dipilih : </td>";
echo "<td>Motor : $hmot</td>";
echo "</tr><tr>";
echo "<td></td><td>DP : $hdp</td>";
echo "</tr><tr>";
echo "<td></td><td>Cicilan : $jcil</td>";
echo "</tr></table><table border=\"1\">";
echo "<tr><td>No</td><td>Total Bayar</td></tr>";

for($no=1;$no<=$jbln;$no++)
{
	$tb = $tb+$bper;
	echo "<tr><td>$no</td><td>$tb</td></tr>";
	
}
echo "</table>"
?>



