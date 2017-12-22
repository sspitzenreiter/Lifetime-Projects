<input type="text" name="bil" placeholder="Bilangan" ><br><br>
<input type="submit" value="Submit"><br><br>

<?php
$a = $_REQUEST['bil'];
echo "<table border=\"0\" cellpadding=\"4\">";
for($b=1;$b<=$a;$b++)
	echo "<tr><td><input type=\"text\" placeholder=\"$b\"></td></tr>";
echo "</table>";

echo "</p>";
?>
