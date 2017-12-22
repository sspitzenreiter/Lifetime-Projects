<input type="text" name="bil" placeholder="Bilangan" ><br><br>
<input type="submit" value="Submit"><br><br>

<?php
$a = $_REQUEST['bil'];

echo "<p>Angka Genap : ";
for($b=1;$b<=$a;$b++){
	if($b%2==0)
	echo "$b,";
}
echo "</p><p>Angka Ganjil : ";
for($c=1;$c<=$a;$c++){
	if($c%2!=0)
	echo "$c,";
}
echo "</p><p>Angka Prima : ";
for($d=1;$d<=$a;$d++){
	if($d%2!=0 && $d%3!=0 && $d%5!=0)
	echo "$d,";
}
echo "</p>";
?>
