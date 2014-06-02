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
<br>
<br>
<br>
<table align="center" border="2" width="80%" bgcolor="#E9F7FC"  >
<tr>
	<td align="center" colspan="12">
	<center>
	<h2>
		<a href="http://process.shivamtoursandtravels.com/home.php">
			Back
		</a>
		</h2>
		</center>
	</td>
</tr>
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
		$todayData = search_record($param,$value);
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
</table>