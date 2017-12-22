<?php
session_start();
session_unset();
session_destroy();
?>
<html>
<body>
<form action="sessionloc.php">
<input type="submit">
</form>
</body>
</html>