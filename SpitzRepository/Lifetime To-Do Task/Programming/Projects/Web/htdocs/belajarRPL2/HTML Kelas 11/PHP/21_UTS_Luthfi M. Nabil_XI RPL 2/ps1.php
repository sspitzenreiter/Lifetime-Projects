<?php
	$a = $_REQUEST['ak'];
	include "op1.php";
	
	echo "Bilangan Ganjil : ";
	for($b=1;$b<=$a;$b++){
		if($b%2==0)
			echo "$b,";
	}echo "<br>";
	
	echo "Bilangan Genap : ";
	for($c=1;$c<=$a;$c++){
		if($c%2!=0)
			echo "$c,";
	}echo "<br>";
	echo "Bilangan Prima : ";
	for($d=1;$d<=$a;$d++){
		if($d%2!=0 && $d%3!=0 && $d%5!=0 && $d%7!=0|| $d==2 || $d==3|| $d==5 || $d==7)
			echo "$d,";
	}
	?>