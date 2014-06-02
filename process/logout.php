<?php
session_start();
error_reporting(0);
?>
<?php
$_SESSION['login'] = "false";
session_destroy();
header("location:index.php");	
?>