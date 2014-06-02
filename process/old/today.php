<?php
	include("menu.php");
	include("function.php");
?>
<table align="center" border="2" width="80%">
	<tr>
    	<td>
        	Sr No.
        </td>
        <td>
        	Type
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
        	<?php echo $value[1];?>
        </td>	
        <td>
        	<?php echo $value[3];?>
        </td>
        <td>
        	<?php echo $value[4];?>
        </td>
        <td align="right">
        	<?php echo $value[15];?>
        </td>
        <td align="right">
        	<?php echo $value[16];?>
        </td>
        <td align="right">
 			<?php echo $value[17];?>      
        </td>
         <td align="right">
 			<?php echo $value[18];?>
        </td>
    </tr>
   	<?php	
		}
	?>
</table>
