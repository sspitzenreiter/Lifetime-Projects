<?php include "konek.php";

$sql = "show columns from anggota";
$query = mysqli_query($db_link,$sql);
while($data2 = mysqli_fetch_array($query))
{
	echo "$data2[columns]";
}?>