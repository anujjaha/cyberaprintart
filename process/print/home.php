<?php
include('menu.php');
include("function.php");
?>
<style>
td
{font-size:11px;}
</style>
<br>
<h1><font color="white">
Welcome To admin Panel</font>
</h1>

<table align="center" border="2" width="80%" bgcolor="#E9F7FC"  style="margin-left:130px";>
	<tr>
    	<td>
        	Sr No.
        </td>
        <td>
        	Job No.
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
        	Receipt
        </td>
        <td>
        	Voucher Number
        </td>
        <Td>
        	Bill Number
        </td>
        <td>
        	Pay Mode
        </td>
        <td>
 			View
        </td>
    </tr>
    <?php
		$date = date('d-m-y');
		$todayData = show_today('date',$date);
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
		  <td>
        	<?php echo $value[5];?>
        </td>       
        <td>
        	<?php echo $value[19];?>
        </td>
         <td align="right">
        	<?php echo $value[18];?>
        </td>
        <td>
        	<?php
        	echo  $value[20];
        	?>
        	
        </td>
        <td>
        	<?php
        	echo  $value[21];
        	?>
        	
        </td>
        <td>
        	<?php
        	echo  $value[22];
        	?>
        	
        </td>
        <Td>
        	
        	<?php
        	$payMode = $value[20].$value[21].$value[22];
        	if(strlen($payMode) > 0 )
        	{
        		echo "-";
        	}
        	else
        	{
        		echo "Un-paid";
        	}
        	
        	?>
        </td>
        <td align="right">
        	<a href="job.php?job_view=true&j_id=<?php echo $value[0];?>">
            	View
            </a>
		</td>
    </tr>
   	<?php	
		}
	?>
</table>