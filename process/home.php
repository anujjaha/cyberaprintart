<?php
include('menu.php');
include('function.php');
?>
<style>
td
{font-size:11px;}
</style>
<br>
<h1>
Welcome To admin Panel
</h1>
<table align="center" border="2" bgcolor="#E9F7FC">
<form action="search_details.php" method="post">
	<tr>
		<td align="right">
			Party Name :
		</td>
		<td>
		<input type="text" name="cusname">
		</td>
		<td> &nbsp;&nbsp; </td>
		<td align="right">
			Job Number :
		</td>
		<td>
		<input type="text" name="j_id">
		</td>
		<td> &nbsp;&nbsp; </td>
		<td align="right">
			Job Date :
		</td>
		<td>
		<input type="text" name="date"> Format : dd-mm-yy
		</td>
	</tr>
	<tr>
		<td colspan="9" align="center">
			<input type="submit" name="Search" value ="Search">
		</td>
	<tr>
</table>
<table align="center" border="2" width="100%" bgcolor="#E9F7FC">
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
        	Receipt
        </td>
        <td>
        	Voucher Number
        </td>
        <td>
        	Bill Number
        </td>
        <td>
        	Pay Mode
        </td>
        <td>
        	Delievered        
        </td>
        <td>
        	0 Due
        </td>
        
        <td>
 			View
        </td>
        <td>
 			Edit
        </td>
    </tr>
    <?php
		$date = date('d-m-y');
		$todayData = show_today('date',$date);
		//echo "<pre>";
		
		//print_r($todayData);
		
		//die;
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
        <td>		
	<?php echo $value[22];?>
        </td>
        <td align="right">
 			<?php echo $value[2];?>
 	</td>
 	<td align="right">
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
        	<?php echo $value[23];?>
        </td>
        <td>
        	<?php echo $value[24];?>
        </td>
        <td>
        	<?php echo $value[25];?>
        </td>
        <td>
        	<?php
        		$payMode = $value[23].$value[24].$value[25];
        		if(strlen($payMode) > 0)
        		{
        			echo "-";
        		}
        		else
        		{
        			echo "Un-Paid";
        		}
        	?>
        </td>
         <td align="right">
 			<a href="status_delivered.php?j_id=<?php echo $value[0];?>">
			Delievered
            </a>
             <td align="right">
 			<a href="clear_due.php?j_id=<?php echo $value[0];?>">
			0Due
            </a>
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
        <a href="home.php?start=<?php echo $pstart;?>&end=<?php echo $pend;?>">
            Previous 
            </a>
        <?php
		}
		?>
        	
            <a href="home.php?start=<?php echo $start;?>&end=<?php echo $end;?>">
            Next
            </a>
           
        </Td>
    </tr>
</table>