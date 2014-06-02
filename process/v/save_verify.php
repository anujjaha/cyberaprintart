<?php
include('menu.php');
include('function.php');
$j_id = $_POST['j_id'];
$receipt = $_POST['receipt'];
$voucher = $_POST['v_num'];
$bill = $_POST['b_num'];
$remarks = $_POST['remarks'];
$time = $_POST['myTime'];
$date = date('d-m-y');
$query = "INSERT INTO j_verify
	(v_id,j_id,r_no,v_no,b_no,j_status,j_time,j_date,j_remarks)
	 VALUES
	 ('',
	 '$j_id',
	 '$receipt',
	 '$voucher',
	 '$bill',
	 'Verified',
	 '$time',
	 '$date',
	 '$remarks')
	";
	
$upQuery = "UPDATE job_details
	   SET
	   v_date = '$date',
	   v_time = '$time'
	   WHERE
	   j_id = '$j_id'
	   ";
	mysql_query($query);
	mysql_query($upQuery);
?>
<script type="text/javascript">
window.location.assign('home.php');
</script>