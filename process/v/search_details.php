<?php
	include("menu.php");
	include("function.php");
	if(!empty($_POST['j_id']))
	{
		$param = 'j_id';
		$value = $_POST['j_id'];
	}
	if(!empty($_POST['date']))
	{
		$param = 'date';
		$value = $_POST['date'];
	}
	if(!empty($_REQUEST['date']))
	{
		$param = 'date';
		$value = $_REQUEST['date'];
	}
	if(!empty($_POST['cusname']))
	{
		$param = 'cusname';
		$value = $_POST['cusname'];
	}
	if(!empty($_POST['jname']))
	{
		$param = 'jname';
		$value = $_POST['jname'];
	}
?>
<style>
td
{font-size:11px;}
</style>
<br>
<table align="center" border="2" width="80%" bgcolor="#E9F7FC" >
	<tr>
    	<td>
        	Sr No.
        </td>
        <td align="center">
        	Customer Name
        </td>
        <td>
        	Mobile
        </td>
        <td>
 			Job Name
        </td>
         <td>
 			Time
        </td>
         <td>
 			Status
        </td>
         <td>
 			View Detail
        </td>
         <td>
 		Verify
        </td>
    </tr>
    <?php
		$todayData = show_today($param,$value);
		foreach($todayData as $key => $value)
		{
		?>
			<tr>
    	<td>
        	<?php echo ++$key;?>
        </td>
        <td>
        	<?php echo $value[3];?>
        </td>
        <td>
        	<?php echo $value[4];?>
        </td>
        <td >
 			<?php echo $value[5];?>      
        </td>
         <td align="right">
 			<?php echo $value[2];?> <br /> <?php echo $value[19];?>      
        </td>
         <td align="right">
 			<?php echo $value[18];?>
 			<?php
 			if($value[1] == "Voucher Ref")
 			{
 			$part = $value[5];
 			$part = explode(" ",$part);
 			$part = array_pop($part);
 			?>
 			<a href="http://cybera.shivamtoursandtravels.com/view_vnum.php?vnum=<?php echo $part;?>" target="_blank">
 			<?php
 			echo $value[5];
 			?>
 			</a>
 			<?php
 			}
 			else
 			{
 			 echo $value[21];
 			}
 			 ?>
        </td>
         <td>
 			<a href="job.php?job_view=true&j_id=<?php echo $value[0];?>">
			View &nbsp;&nbsp;
            </a>
        </td>
	<td align="right">
		<a href="verify.php?j_id=<?php echo $value[0];?>">
			Verify
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
        <a href="search_details.php?status=<?php echo $status;?>&start=<?php echo $pstart;?>&end=<?php echo $pend;?>">
            Previous 
            </a>
        <?php
		}
		?>
        	
            <a href="search_details.php?status=<?php echo $status;?>&start=<?php echo $start;?>&end=<?php echo $end;?>">
            Next
            </a>
           
        </Td>
    </tr>
</table>
