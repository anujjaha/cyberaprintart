<?php
	include("menu.php");
	include("function.php");
?>
<br>
<style>
td{font-size:11px;}
</style>
<table align="center" border="2" width="80%" bgcolor="#E9F7FC"  >
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
 			Status
        </td>
         <td>
 			time
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
		$allData = viewAll();
		foreach($allData as $key => $value)
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
 			<?php echo $value[21];?>
        </td>
         <td align="right">
 			<?php echo $value[2];?>
            <br />
			<?php echo $value[22];?>
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
        <a href="all.php?start=<?php echo $pstart;?>&end=<?php echo $pend;?>">
            Previous 
            </a>
        <?php
		}
		?>
        	
            <a href="all.php?start=<?php echo $start;?>&end=<?php echo $end;?>">
            Next
            </a>
           
        </Td>
    </tr>
</table>
