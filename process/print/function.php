<?php
include('cn.php');
?>
<?php
function get_job_id()
{
	$query = "SELECT j_id FROM job_details order by j_id desc";
	$run = mysql_query($query);
	$job_id = mysql_fetch_assoc($run);
	$job_id = $job_id['j_id'] + 1;
	return $job_id;
}
?>

<?php
function show_today($param,$value)
{
	$query = "SELECT * FROM job_details where $param = '$value' order by j_id desc";
	$run = mysql_query($query);
	while($row = mysql_fetch_assoc($run))
	{
		$data[] = array($row['j_id'],$row['type'],$row['date'],$row['cusname'],$row['mob'],
				  $row['jname'],$row['jone'],$row['qone'],$row['rone'],$row['jtwo'],
				  $row['qtwo'],$row['rtwo'],$row['jthree'],$row['qthree'],$row['rthree'],
				  $row['total'],$row['advance'],$row['due'],$row['status'],$row['time'],$row['receipt'],$row['v_num'],$row['b_num']);
	}
	return $data;
}
?>

<?php
function single_record($param,$value)
{
	$query = "SELECT * FROM job_details where $param = '$value'";
	$run = mysql_query($query);
	$data = mysql_fetch_assoc($run);
	return $data;
}
?>