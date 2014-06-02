<?php
include("menu.php");
include("function.php");
?>
<?php
function showCus()
{
	$query = "SELECT distinct(cusname) FROM job_details order by cusname";
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

function showRecords($cname,$status)
{
?>
<table align="center" border="2" bgcolor="#E9F7FC">
	<tr>
		<td colspan="9" align="center">
			Client Name : <?php echo $cname;?>
		</td>
	</tr>
	<tr>
		<td>Sr NO.</td>
		<td>Job Num</td>
		<td>Job Name</td>
		<td>Amount</td>
		<td>Time</td>
		<td>Date</td>
		<td>Status</td>
		<td>View</td>
		<td>Verify</td>
	</tr>	

<?php
	if($status == "NVerify")
	{
		$query = "SELECT * FROM job_details where cusname = '$cname' and v_date = '' order by j_id DESC ";
	}
	else if($status == "all")
	{
		$query = "SELECT * FROM job_details where cusname = '$cname'  order by j_id DESC ";
	}
	else
	{
		$query = "SELECT * FROM job_details where cusname = '$cname' and v_date != '' order by j_id DESC";
	}
	$run = mysql_query($query);
	$sr=1;
	$xtotal = 0;
	while($row = mysql_fetch_assoc($run))
	{
	?>
	<tr>
		<td><?php echo $sr;?></td>
		<td><?php echo $row['j_id'];?></td>
		<td><?php echo $row['jname'];?></td>
		<td align="right"><?php echo $row ['total'];?></td>
		<td><?php echo $row['time'];?></td>
		<td><?php echo $row['date'];?></td>
		<td><?php echo $row['status'];?></td>
		<td>
		<a href="job.php?job_view=true&j_id=<?php echo $row['j_id'];?>">
		View
		</a>
		</td>
		<td>
		<a href="verify.php?j_id=<?php echo $row['j_id'];?>">
			Verify
		</a>
		</td>
	</tr>	
	<?php
	$sr++;
	$xtotal = $xtotal + $row['total'];
	}
	echo "<tr><td colspan='3' align='right'>Total : </td><td align='right'>".$xtotal."</td></tr>";
	echo "</table>";
}
?>
<?php
$op = $_REQUEST['check'];
if(isset($op))
{
	showRecords($_POST['cname'],$_POST['status']);
}
else
{

?>
<table align="center" border="2">
	<form action="#" method="POST">
	<tr>
		<td align="right">
			Customer Name : 
		</td>
		<td>
			<select name="cname">
				<?php showCus();?>
			</select>
		</td>
	</tr>
	<tr>
		<td align="right">
			Select Status : 
		</td>
		<td>
			<input type="radio" name="status" value="all" checked="checked">All
			<input type="radio" name="status" value="Verify" >Verify
			<input type="radio" name="status" value="NVerify">Not Verify
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center"> 
			<input type="hidden" name="check" value="true">
			<input type="submit" name="check" value="Find">
			<input type="reset" name="reset" value="Reset">
		</td>
	</tr>
	</form>
</table>
<?php
}
?>