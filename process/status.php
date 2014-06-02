<?php
include('menu.php');
include('function.php');
?>

<?php
if(!empty($_REQUEST['status']))
{
?>
<style>
td{font-size:12px;}
</style>
<table align="center" border="2" width="80%" bgcolor="#E9F7FC" >
	<tr>
    	<td>
        	Sr No.
        </td>
        <td>
        	Job Num
        </td>	
        <td align="center">
        	Customer Name
        </td>
        <td>
        	Mobile
        </td>
        <td>
        	Bill Amount
        </td>
        <td>
        	Advance/Pay
        </td>
        <td>
 			Due       
        </td>
        <td>
 			Time
        </td>
        <td>
 		Date
        </td>
         <td>
 			Status
        </td>
         <td>
        	SMS
        </td>
        <td>
 			View
        </td>
        <td>
 			Edit
        </td>
    </tr>
    <?php
		$status = $_REQUEST['status'];
		$todayData = show_today('status',$status);
		foreach($todayData as $key => $value)
		{
		?>
			<tr>
    	<td>
        	<?php echo ++$key;?>
        </td>
        <td>
        	<?php echo $value[0];?>
        </td>	
        <td>
        	<?php echo $value[3];?>
        </td>
        <td>
        	<?php echo $value[4];?>
        </td>
        <td align="right">
        	<?php echo $value[18];?>
        </td>
        <td align="right">
        	<?php echo $value[19];?>
        </td>
        <td align="right">
 			<?php echo $value[20];?>      
        </td>
         <td align="right">
         		<?php echo $value[22];?>
         </td>
         <td>
 			<?php echo $value[2];?>
        </td>
        <td align="right">
 			<?php echo $value[21];?>
        </td>
         <td align="right">
 			<a href="send_sms.php?j_id=<?php echo $value[0];?>">
			SMS
            </a>
        </td>
        <td align="right">
 			<a href="view_details.php?j_id=<?php echo $value[0];?>">
			View
            </a>
        </td>
         <td align="right">
 			<a href="edit.php?j_id=<?php echo $value[0];?>">
			Edit
            </a>
        </td>
    </tr>
   	<?php	
		}
	?>
    <tr>
    	<Td colspan="12" align="center">
        <?php
		if(empty($_REQUEST['start']))
		{
			$start = 30;
		}
		else
		{
			$start = $_REQUEST['start'] + 30;
		}
		if(empty($_REQUEST['end']))
		{
			$end = 60;
		}
		else
		{
			$end = $_REQUEST['end'] + 30;
		}
		?>
        <?php
		if($_REQUEST['start'] > 29)
		{
		$pstart = $_REQUEST['start'] - 30;
        $pend = $_REQUEST['end'] - 30;
        ?>
        <a href="status.php?status=<?php echo $status;?>&start=<?php echo $pstart;?>&end=<?php echo $pend;?>">
            Previous 
            </a>
        <?php
		}
		?>
        	
            <a href="status.php?status=<?php echo $status;?>&start=<?php echo $start;?>&end=<?php echo $end;?>">
            Next
            </a>
           
        </Td>
    </tr>
</table>
<?php
}
else
{
?>
<table align="center" border="2" style="background-color:#CCCCCC;">
	<form action="#" method="post">
    	<Tr>
        	<td>
            	Select Status :
            </td>
            <td>
            	<input type="radio" name="status" id="status" value="Pending" checked="checked" />Pending
                <input type="radio" name="status" id="status" value="Working" />Working
                <input type="radio" name="status" id="status" value="Completed" />Completed
                <input type="radio" name="status" id="status" value="Delievered" />Delievered
            </td>
        </Tr>
        <tr>
        	<td colspan="2" align="center">
            	<input type="hidden" name="see" value="true" />
            	<input type="submit" name="View" value="View Details" />
                <input type="Reset" name="Reset" value="Reset" />
            </td>
        </tr>
    </form>
</table>
<?php
}
?>
