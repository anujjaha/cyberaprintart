<?php
include('menu.php');
include("function.php");
?>
<style>
td
{font-size:11px;}
</style>
<h1><font color="white">
Welcome To admin Panel</font>
</h1>
<table align="center" border="2" width="80%" bgcolor="#E9F7FC" >
<form action="verify.php" method="post">
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
        	Job Name
        </td>
        <td>
        	Amount
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
        	Payment type
        </td>
        <td>
 			View
        </td>
        <td>
 		Verify
        </td>
    </tr>
    <?php
		$vdate = "";
		$todayData = show_today('v_date',$vdate);
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
        	<?php echo $value[15];?>
        </td>
      
        <td>
        	<?php echo $value[19];?>
        </td>
         <td>
        	<?php echo $value[2];?>
        	
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
        	<?php
        	if(!empty($value[20]))
        	{
        		echo "Receipt :".$value[20]."&nbsp;&nbsp;";
        	}
        	if(!empty($value[21]))
        	{
        		echo "Voucher Num:".$value[21]."&nbsp;&nbsp;";
        	}
        	if(!empty($value[22]))
        	{
        		echo "Bill Num:".$value[22]."&nbsp;&nbsp;";
        	}
        	?>
        </td>
        <td>
        	<a href="job.php?job_view=true&j_id=<?php echo $value[0];?>">
            	View
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
        <a href="home.php?status=<?php echo $status;?>&start=<?php echo $pstart;?>&end=<?php echo $pend;?>">
            Previous 
            </a>
        <?php
		}
		?>
        	
            <a href="home.php?status=<?php echo $status;?>&start=<?php echo $start;?>&end=<?php echo $end;?>">
            Next
            </a>
           
        </Td>
    </tr>
</form>	
</table>
