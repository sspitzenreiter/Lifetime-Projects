<?php
session_start();
?>
<html>
<body>
<?php
$_SESSION["favcolor"]="green";
?>
<form action="sessionloc.php">
<input type="submit">
</form>
<form action="session_destroy.php">
<input type="submit">
</form>
</body>
</html>