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
<table align="center" border="2" width="100%" bgcolor="#E9F7FC" >
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
 		Amount
        </td>
        <td>
        	Voucher No.
        </td>
        <td>
        	Reciept No.
        </td>
         <td>
        	Bill No.
        </td>
        <td>
        	Time
        </td>
        <td>
 		Date
        </td>
        <td>
        	Verify Date
        </td>
        <td>
        	Verify Time
        </td>
        <td>
        	Verify Remarks
        </td>
         <td>
 		Verify
        </td>
        
       
    </tr>
    <?php
		$input = $_REQUEST['status'];
		$status = $input;
		if($input == "notverify")
		{
		$todayData = show_notverify();
		}
		else
		{
		$todayData = show_verify();
		}
		echo "<pre>";
		//print_r($todayData);
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
 			<?php echo $value[15];?>      
        </td>
         <td align="right">
 			<?php  echo $value[22];?>      
        </td>
         <td align="right">
 			<?php echo $value[21];?>      
        </td>
        <td>
        	<?php echo $value[26];?> 
        </td>
         <td align="right">
 			<?php echo $value[19];?>      
        </td>
        
         <td align="right">
 			<?php echo $value[2];?>      
        </td>
        <td align="right">
 			<?php echo $value[23];?>      
        </td>
         <td align="right">
 			<?php echo $value[24];?>      
        </td>
      	<td>
      		<?php   echo $value[25];?>
      	</td>
      
     	
      <td align="center">
	<?php
     	if($status == "verify")
     	{
     	?>
     	Verified
     	&nbsp;&nbsp;&nbsp;
     	&nbsp;&nbsp;&nbsp;
     	&nbsp;&nbsp;&nbsp;
     	<a href="re_verify.php?j_id=<?php echo $value[0];?>">
     	Cancel
     	</a>
     	<?php
     	}
     	else
     	{
     	?>
     	<a href="verify.php?j_id=<?php echo $value[0];?>">
			Verify
		</a>
     	<?php
     	}
     	?>
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
            	<input type="radio" name="status" id="status" value="verify" checked="checked" />Verified
                <input type="radio" name="status" id="status" value="notverify" />Un Verify
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
