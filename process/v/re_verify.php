<?php
include('menu.php');
include('function.php');
include('cn.php');
$j_id = $_REQUEST['j_id'];
$query = "UPDATE job_details
	 SET
	 v_date = '',
	 v_time = ''
	 WHERE
	 j_id = '$j_id'
	 ";
	// print $query;
	mysql_query($query);
	
	$dquery = "DELETE FROM j_verify WHERE j_id = '$j_id'";
	//print $dquery;
	mysql_query($dquery);
?>
<script>
window.location.assign('home.php');
</script>