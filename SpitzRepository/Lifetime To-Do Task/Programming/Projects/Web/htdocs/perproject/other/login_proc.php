<?php	
include "konek.php";
session_start();
$b = $_GET['account'];
$a = $_GET['pass'];
$locate=$_GET['conf'];
$sql = "select * from petugas where nama='$b' && password='$a'";
$query=mysqli_query($db_link,$sql);
$row = mysqli_num_rows($query);
if($row==1)
{
$_SESSION['username']= $b;
$_SESSION['password']= $a;
header("location:../buku_tab.php");
}
else
	echo "fail";
?>




