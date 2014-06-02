<?php
	include("menu.php");
	include("function.php");
?>
<style>
td
{font-size:11px;}
</style>
<br>
<table align="center" border="2" width="80%"  bgcolor="#E9F7FC" cellspacing="4" cellpadding="3">
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
        <td align="right">
        	<?php echo $value[5];?>
        </td>
         <td>
        	<?php echo $value[19];?>
        </td>
        <td align="right">
        	<?php echo $value[18];?>
        </td>
        <td align="right">
        	<a href="job.php?job_view=true&j_id=<?php echo $value[0];?>">View &nbsp;&nbsp;
            </a>
		</td>
    </tr>
   	<?php	
		}
	?>
</table>
