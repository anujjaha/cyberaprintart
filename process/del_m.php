<?php
include('menu.php');
include('function.php');
function del_customer($cusname)
{
	$query = "UPDATE new_customers 
		 SET
		 status = 'N'
		 WHERE
		 cusname = '$cusname'
		 ";
	//print $query;
	if(mysql_query($query))
	{
	return true;
	}
}
?>
	<?php
	$data = $_REQUEST['mdel'];
	
	$data = implode(',',$data);
	/*$query = "UPDATE new_customers 
		  SET 
		  status = 'N'
		  WHERE
		  c_id IN ($data)
		 ";*/
	$query1 = "SELECT * FROM new_customers where c_id IN ($data)";
	$run1 = mysql_query($query1);
	while($row = mysql_fetch_assoc($run1))
	{
		$cname = $row['cusname'];
		$status = del_customer($cname);
	}
	if($status == "true")
	{
	echo "<center><h1> Record Deleted Succesfully </h1></center>";
	}
	else
	{
	echo "<center><h1> Error Occured </h1></center>";
	}
/*	print $query1;
	print $query;
	exit;
	if(mysql_query($query))
	{
		
	}*/
	?>
