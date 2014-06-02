<?php
include('menu.php');
include('cn.php');
$j_id = $_POST['job_id'];
$type = $_POST['type'];
$date = $_POST['date'];
$cusname = $_POST['cusname'];
$mob = $_POST['mob'];
$jname = $_POST['jname'];
$jone = $_POST['jone'];
$qone = $_POST['qone'];
$rone = $_POST['rone'];
$jtwo = $_POST['jtwo'];
$qtwo = $_POST['qtwo'];
$rtwo = $_POST['rtwo'];
$jthree = $_POST['jthree'];
$qthree = $_POST['qthree'];
$rthree = $_POST['rthree'];
$total = $_POST['total'];
$advance = $_POST['advance'];
$due = $_POST['due'];
$status = "Pending";
$query = "INSERT INTO job_details
		(j_id,type,date,cusname,mob,jname,
		jone,qone,rone,
		jtwo,qtwo,rtwo,
		jthree,qthree,rthree,
		total,advance,due,status,time)
		VALUES
		('$j_id',
		'$type','$date','$cusname','$mob',
		'$jname',
		'$jone','$qone','$rone',
		'$jtwo','$qtwo','$rtwo',
		'$jthree','$qthree','$rthree',
		'$total','$advance','$due',
		'$status',NOW()
		)
";
	mysql_query($query);
?>
<h1>	Saved. </h1>