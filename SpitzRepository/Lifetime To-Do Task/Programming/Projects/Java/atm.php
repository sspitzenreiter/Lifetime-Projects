<html>
<head>
<title> ATM </title>
</head>
<body>
<center>
<?
if(isset$_POST['pin'])){
if($_POST['pin']==1213456)die("Anda Berhak Mengakses Menu Utama ATM");
if($_POST['hitung']<=3){
	echo"Maaf Pin Salah,Coba Lagi.";}
else{
	die("ATM Tertelan, Silahkan Hubungi Customer Service");}
$_POST['hitung']++;
}
if(isset($_POST['hitung']))$_POST['hitung']=1;
echo"
<form action='ATM.php' method='POST'>
<input type='hidden' name='hitung' value='{$_POST['hitung']}'>
Masukan PIN : <input type='password' name='pin'><br><br>
<input type='submit' value='Kirim'>
</form>";
?>
</center>
</body>
</html>