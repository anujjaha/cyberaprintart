<?php
session_start();
$user = $_POST['uname'];
$pass = $_POST['pass'];
if($user == "cybera" and $pass == "shivam11")
{
	$_SESSION['login'] = "true";
	header("location:home.php");
}
else if ($user == "print" and $pass == "shivam123")
{
	$_SESSION['login'] = "true";
	header("location:print/home.php");
}
else if ($user == "admin" and $pass == "admin123")
{
	$_SESSION['login'] = "true";
	header("location:v/home.php");
}
else
{
	header("location:index.php");
}
?>