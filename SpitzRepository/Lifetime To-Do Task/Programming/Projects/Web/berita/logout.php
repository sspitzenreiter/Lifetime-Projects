<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['nama']);
unset($_SESSION['pass']);
unset($_SESSION['foto']);
header("location: index.php");
?>