<?php
include "connect.php";
$query=mysqli_query($db_link,"select * from guru");
while($arr=mysqli_fetch_array($query))
{
	echo "$arr[id_guru],$arr[no_telp]<br>";
	
}
echo "Welcome $user";?>