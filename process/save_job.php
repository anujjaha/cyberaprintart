<?php
include('menu.php');
include('function.php');
$j_id = $_POST['j_id'];
$status = $_POST['status'];
$total = $_POST['total'];
$query = "UPDATE job_details
		  SET
		  status = '$status'
		  WHERE
		  j_id = '$j_id'
		 ";
mysql_query($query);
$date = date('d-m-y');
$query1 = "INSERT INTO job_doing
			VALUES(
			'',
			'$j_id',
			'$total',
			'$status',
			'$date',
			NOW()
			)
		 ";
mysql_query($query1);
?>
<center>
<h1>
	Status Updated 
</h1>
</center>