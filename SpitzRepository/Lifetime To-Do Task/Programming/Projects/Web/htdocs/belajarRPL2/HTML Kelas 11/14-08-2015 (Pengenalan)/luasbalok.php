<html>
<head>
<title></title>
</head>
<body>
<?php
$pan=$_GET['pan'];
$leb=$_GET['leb'];
$tin=$_GET['tin'];
$luas=$pan*$leb*$tin;
echo "Volume Balok : <b>$luas</b>";
?>
</body>
</html>