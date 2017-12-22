<?php include "select.php";?>

<?php
$a = $_REQUEST['mot'];
$b = $_REQUEST['dp'];
$c = $_REQUEST['cil'];
$d = $a-$b;
$e = $d*$c;
$f = $c*120;
echo "<br><br>Bunga yang harus dibayar selama $f Bulan sejumlah : Rp.$e";

?>
