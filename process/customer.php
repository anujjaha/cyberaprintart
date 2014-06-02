<?php
include('menu.php');
include('function.php');
?>
<?php
function customer_account()
{
	$query = "SELECT DISTINCT (cusname) from new_customers where  status = 'Y' order by cusname ";
//	print $query;
	$run = mysql_query($query);
	while($row = mysql_fetch_assoc($run))
	{
		$cusName = $row['cusname'];
		$dq = "SELECT * FROM new_customers WHERE cusname = '$cusName'";
		$rdq = mysql_query($dq);
		$ddq = mysql_fetch_assoc($rdq);
		$data[] = array($ddq['c_id'],$ddq['cusname'],$ddq['mob']);
	}
	return $data;
	
}
?>
<style>
td
{font-size:11px;}
</style>
<h1 style="margin-top:-20px;">
Customer Details
</h1>
<table align="center" border="2" width="50%"  bgcolor="#CCEAE7" style="margin-top:-15px;">
<form action="del_m.php" method="post">
	<tr>
    	<td colspan="5">
        	<a href="add_new_customer.php">
            	Add New Customer
            </a>	
        </td>
    </tr>
	<tR>
    	<td width="10%">
        	Sr.
        </td>
        <td width="60%">
        	Customer Name
        </td>
        <td width="30%">
        	Mobile Number
        </td>
        <td>
        	Edit
        </td>
        <td>
        	Delete
        </td>
         <td>
        	Multi Delete
        	<input type="submit" name="del" value="Multi Delete">
        </td>
    </tR>
    <?php 
	$customerData = customer_account();
	foreach($customerData as $key => $value)
	{
	?>
    <tR>
    	<td>
        	<?php echo ++$key;?>
        </td>
        <td>
        	<?php echO $value[1];?>
        </td>
        <td>
        	<?php echO $value[2];?>
        </td>
        <Td>
        	<a href="customer_edit.php?c_id=<?php echo $value[0];?>">
        		Edit
        	</a>
        </td>	
        <Td>
        	<a href="customer_delete.php?c_id=<?php echo $value[0];?>">
        		Delete
        	</a>
        </td>	
        <td>
        	
        	<input type="checkbox" name="mdel[<?php echo $value[0];?>]" value="<?php echo $value[0];?>">
        	
        </td>
    </tR>
    <?php
	}
	?>	
<tr>
	<Td colspan="4" align="right">
		<input type="submit" name="del" value="Multi Delete">
	</td>
</tr>
</table>