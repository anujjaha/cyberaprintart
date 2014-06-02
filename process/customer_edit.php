<?php
include('menu.php');
include('function.php');
function customer_details($c_id)
{
	$query = "SELECT * FROM new_customers where c_id = '$c_id'";
	$run = mysql_query($query);
	$allData = mysql_fetch_assoc($run);
	return $allData;
}
?>
<h1>Update Customer Details </h1>
<?php
$c_id = $_REQUEST['c_id'];
$getData = customer_details($c_id);
?>
<table align="center" border="1" bgcolor="#CCEAE7" style="margin-top:-15px;"> 
<form action="customer_update.php" method="post">
	<tr>
		<td align="right">
			Customer Name :
		</td>
		<Td>
			<input type="text" name="cusname" value="<?php echo $getData['cusname'];?>" style="width:300px;">
		</td>
	</tr>
	<tr>
		<td align="right">
			Mobile Number :
		</td>
		<Td>
			<input type="text" name="mob"  value="<?php echo $getData['mob'];?>">
		</td>
	</tr>
	<Tr>
		<td colspan="2" align="center">
			<input type="hidden" name="c_id" value="<?php echo $getData['c_id'];?>">
			<input type="submit" name="Update" value="Update Data">
			<input type="reset" name="reset" value="Reset">
		</td>
	</tr>
</form>
</table>