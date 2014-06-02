<?php
	include("menu.php");
	include("function.php");
	if(!empty($_REQUEST['j_id']))
	{
		$param = 'j_id';
		$value = $_REQUEST['j_id'];
	}
	if(!empty($_POST['date']))
	{
		$param = 'date';
		$value = $_POST['date'];
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
 <?php
		$viewData = single_record($param,$value);
	?>
	<br>
	<br>
	<br>
<table align="center" border="2" bgcolor="#E9F7FC" >
<tr>
	<td colspan="5" align="center">
	<h2>
	
		<a href="http://process.shivamtoursandtravels.com/home.php">
			Back
		</a>
		</h2>
	</td>
</tr>
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
                    <td align="center">
                    	Amount
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
                    <td align="right">
                    	<?php echo $viewData['aone'];?>
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
                    <td align="right">
                    	<?php echo $viewData['atwo'];?>
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
                    <td align="right">
                    	<?php echo $viewData['athree'];?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
    	<td colspan="4" align="right">
        	Total : 
        </td>
        <td align="right">
        	<?php echo $viewData['total'];?>
        </td>
    </tr>
     <tr>
    	<td colspan="4" align="right">
        	Advance : 
        </td>
        <td  align="right">
        	<?php echo $viewData['advance'];?>
        </td>
    </tr>
     <tr>
    	<td colspan="4" align="right">
        	Due Amount : 
        </td>
        <td  align="right">
        	<?php echo $viewData['due'];?>
        </td>
    </tr>
    <tr>
    	<td colspan="4" align="right">
        	Receive Time  : 
        </td>
        <td  align="right">
        	<?php echo $viewData['balance'];?>
        </td>
    </tr>
</table>