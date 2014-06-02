<?php
session_start();
?>

<?php
$_SESSION['login'] = "false";
session_destroy();
header("location:index.php");	
?>