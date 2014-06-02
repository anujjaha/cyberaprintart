<?php
include('menu.php');
include('function.php');
error_reporting(0);
?>
<?php
if(isset($_REQUEST['job_view']))
{
	$param = 'j_id';
	$value = $_REQUEST['j_id'];
?>
<?php
		$viewData = single_record($param,$value);
		
	?>
<form action="save_job.php" method="post">
<br>
<br>
<br>

<table align="center" border="2"  bgcolor="#E9F7FC" cellspacing="4" cellpadding="3" >

	<tr>
    	<td colspan="5" align="center">
        	Customer Type : 
           <?php echo $viewData['type'];?>
        </td>
    </tr>
	<tr>
    	<td align="right" class="new">
        	Job Num: 
        </td>
        <td>
        	<?php echo $viewData['j_id'];?>
        </td>
        <td width="30%">&nbsp;  </td>
        <td align="right" class="new">
        	Date : 
        </td>
        <td>
        	<?php echo $viewData['date'];?>
        </td>
    </tr>
    <tr>
    	<td align="right" class="new">
        	Customer Name: 
        </td>
        <td>
        	<?php echo $viewData['cusname'];?>
        </td>
        <td width="30%">&nbsp;  </td>
        <td align="right" class="new">
        	Mobile : 
        </td>
        <td>
        		<?php echo $viewData['mob'];?>
        </td>
    </tr>
    
    <tr>
    	<td colspan="5" align="center">
        	Job Name :<?php echo $viewData['jname'];?>
        </td>
    </tr>
    <tr>
    	<td colspan="5" align="center">
        	Job Details
        </td>	
    </tr>
    <tr>
    	<td colspan="5" align="center">
        	<table align="center" border="2" width="100%">
            	<tr>
                	<td>
                    	Sr.
                    </td>
                    <td align="center">
                    	Description
                    </td>
                    <td align="center">
                    	Qty.
                    </td>
                    <td align="center">
                    	Rate
                    </td>
                </tr>
                <tr>
                	<td>
                    	1.
                    </td>
                    <td>
                    	<?php echo $viewData['jone'];?>
                    </td>
                    <td  align="right">
                    	<?php echo $viewData['qone'];?>
                    </td>
                    <td align="right">
                    	<?php echo $viewData['rone'];?>
                    </td>
                </tr>
                <tr>
                	<td>
                    	2.
                    </td>
                    <td>
                    	<?php echo $viewData['jtwo'];?>
                    </td>
                    <td  align="right">
                    	<?php echo $viewData['qtwo'];?>
                    </td>
                    <td align="right">
                    	<?php echo $viewData['rtwo'];?>
                    </td>
                </tr>
                <tr>
                	<td>
                    	3.
                    </td>
                    <td>
                    	<?php echo $viewData['jthree'];?>
                    </td>
                    <td  align="right">
                    	<?php echo $viewData['qthree'];?>
                    </td>
                    <td align="right">
                    	<?php echo $viewData['rthree'];?>
                    </td>
                </tr>
                 <tr>
                	<td>
                    	4.
                    </td>
                    <td>
                    	<?php echo $viewData['jfour'];?>
                    </td>
                    <td  align="right">
                    	<?php echo $viewData['qfour'];?>
                    </td>
                    <td align="right">
                    	<?php echo $viewData['rfour'];?>
                    </td>
                </tr>
                <tr>
            </table>
        </td>
    </tr>
    
    <tr>
    	<td colspan="5" align="center">
        	<strong>Printing Status : <?php echo $viewData['status'];?></strong>
        </td>
    </tr>
    <tr>
    	<td colspan="5" align="center">
        <?php
			if($viewData['status'] == "Pending")
			{
			$str_pend = 'checked="checked"';
			}
			if($viewData['status'] == "Working")
			{
			$str_work = 'checked="checked"';
			}
			if($viewData['status'] == "Completed")
			{
				$str_comp = 'checked="checked"';
			}
			if($viewData['status'] == "Un Shipped")
			{
				$str_comp = 'checked="checked"';
			}
			
		?>
        	<input type="radio" name="status" value="Pending" <?php echo $str_pend;?>/> Pending
            <input type="radio" name="status" value="Working" <?php echo $str_work;?>/> Working
            <input type="radio" name="status" value="Completed" <?php echo $str_comp;?> /> Completed
        </td>
    </tr>
     <tr>
    	<td colspan="4">
    		Bill Number : <input type="text" value="<?php echo $viewData['b_num'];?>" name="bnum">
    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    		Voucher Number : <input type="text"  value="<?php echo $viewData['v_num'];?>" name="vnum"> 
    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    		Reciept Number : <input type="text"  value="<?php echo $viewData['receipt'];?>" name="receipt">
    		
    	</td>
    <tr>
    <tr>
    	<td colspan="5" align="center">
        	<input type="hidden" name="j_id" value="<?php echo $viewData['j_id'];?>" />
            <input type="hidden" name="total" value="<?php echo $viewData['total'];?>" />
        	<input type="submit" name="Save" value="Update Status" id ="sub" />
        </td>
    </tr>
   
</table>
<style>
#sub
{
background-color:#663300;
color:#FFFFFF;
width:150px;
border-radius:4px;
border-shadow:10px;
border-color:black;
}
td
{
font-style:normal;
font-weight:lighter;
}



</style>
</form>

<?php
}
else
{
?>
<br>
<br>
<br>
<br>
<table align="center" border="2"  bgcolor="#E9F7FC" >
<form action="#" method="post">
	<tr>
    	<td align="right">
        	Enter Job Number :
        </td>
        <td>
        	<input type="text" name="j_id" />
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        	<input type="hidden" name="job_view" value="job_view" />
            <input type="submit" name="Job" value="Job" id="sub" />
        </td>
    </tr>	
    </form>
</table>
<style>
#sub
{
background-color:#663300;
color:#FFFFFF;
width:150px;
border-radius:4px;
border-shadow:10px;
border-color:black;
}
td
{
font-style:normal;
font-weight:lighter;
}



</style>
<?php
}
?>