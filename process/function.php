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
	$start = $_REQUEST['start'];
	$offset = $_REQUEST['end'];
	if(empty($start))
	{
		$start = 0;
	}
	if(empty($offset))
	{
		$offset = 30;
	}
	$query = "SELECT * FROM job_details where $param = '$value' order by j_id desc limit $start,30";
	//print $query;
	$run = mysql_query($query);
	while($row = mysql_fetch_assoc($run))
	{
		$data[] = array($row['j_id'],$row['type'],$row['date'],$row['cusname'],$row['mob'],
				  $row['jname'],$row['jone'],$row['qone'],$row['rone'],$row['aone'],
				  $row['jtwo'],
				  $row['qtwo'],$row['rtwo'],$row['atwo'],
				  $row['jthree'],$row['qthree'],$row['rthree'],$row['athree'],
				  $row['total'],$row['advance'],$row['due'],$row['status'],$row['time'],$row['receipt'],$row['v_num'],$row['b_num'],);
	}
	return $data;
}
?>


<?php
function search_record($param,$value)
{
	$start = $_REQUEST['start'];
	$offset = $_REQUEST['end'];
	if(empty($start))
	{
		$start = 0;
	}
	if(empty($offset))
	{
		$offset = 30;
	}
	$query = "SELECT * FROM job_details where $param LIKE '%$value%' order by j_id desc ";
	//print $query;
	$run = mysql_query($query);
	while($row = mysql_fetch_assoc($run))
	{
		$data[] = array($row['j_id'],$row['type'],$row['date'],$row['cusname'],$row['mob'],
				  $row['jname'],$row['jone'],$row['qone'],$row['rone'],$row['aone'],
				  $row['jtwo'],
				  $row['qtwo'],$row['rtwo'],$row['atwo'],
				  $row['jthree'],$row['qthree'],$row['rthree'],$row['athree'],
				  $row['total'],$row['advance'],$row['due'],$row['status'],$row['time'],);
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

<?php
function show_customer()
{
	$query = "SELECT distinct(cusname) FROM new_customers order by cusname";
	
	$run = mysql_query($query);
	while($row = mysql_fetch_assoc($run))
	{
	?>
    	<option value="<?php echo $row['cusname'];?>">
        <?php echo $row['cusname'];?>
        </option>
    <?php
	}
}
?>

<?php
function viewAll()
{
$start = $_REQUEST['start'];
	$offset = $_REQUEST['end'];
	if(empty($start))
	{
		$start = 0;
	}
	if(empty($offset))
	{
		$offset = 30;
	}
	$query = "SELECT * FROM job_details order by j_id desc limit $start,$offset";
	$run = mysql_query($query);
	while($row = mysql_fetch_assoc($run))
	{
		$data[] = array($row['j_id'],$row['type'],$row['date'],$row['cusname'],$row['mob'],
				  $row['jname'],$row['jone'],$row['qone'],$row['rone'],$row['aone'],
				  $row['jtwo'],
				  $row['qtwo'],$row['rtwo'],$row['atwo'],
				  $row['jthree'],$row['qthree'],$row['rthree'],$row['athree'],
				  $row['total'],$row['advance'],$row['due'],$row['status'],$row['time'],);
	}
	return $data;
}
?>

<?php
function add_customer($cusname,$mob)
{
	$query = "INSERT INTO new_customers
				(c_id,cusname,mob,status)
			  VALUES
			  ('',
			  '$cusname',
			  '$mob',
			  'Y'
			  )
			 ";
	mysql_query($query);
}
?>

<?php
function change_status($param,$value,$cparam,$cvalue)
{
	$query = "UPDATE job_details
		  SET
		  $param = '$value'
		  WHERE
		  $cparam = '$cvalue'
		 ";
	mysql_query($query);
}
?>