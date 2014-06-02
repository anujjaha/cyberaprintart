<?php
session_start();
$user = $_POST['uname'];
$pass = $_POST['pass'];
if($user == "anuj" and $pass == "jaha")
{
	$_SESSION['login'] = "true";
	header("location:home.php");
}
else
{
	header("location:index.php");
}
?>