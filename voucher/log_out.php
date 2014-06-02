<?php



	session_start();

	$_SESSION['val'] == "false";

?>



<?php

	session_destroy();

	//header("location:index.php");

?>

<head>

	<link rel="shortcut icon" href="img/favicon.ico" />

	<title>

		Cybera Print Art MIS by ANUJ JAHA [ IT GOLD MEDALIST ]

	</title>

</head>

<body background="img/right_bg.jpg">

<br />

<br />

<br />

<br />

<br />



<center>



<img src="img/out.JPG" />
<br><br>
<script>
var d = new Date();
var n = d.getHours(); 
if(n > 18 && n < 22){
window.location.assign('today_reports.php');
}
</script>
<h1>
<a href="today_reports.php">Send Report </a>
</h1>
</center>