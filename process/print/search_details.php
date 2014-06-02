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
<style>
td
{font-size:11px;}
</style>
<br>
<table align="center" border="2" width="80%" bgcolor="#E9F7FC" >
	<tr>
    	<td>
        	Sr No.
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
 			View Detail
        </td>
    </tr>
    <?php
		$todayData = show_today($param,$value);
		foreach($todayData as $key => $value)
		{
		?>
			<tr>
    	<td>
        	<?php echo ++$key;?>
        </td>
        <td>
        	<?php echo $value[3];?>
        </td>
        <td>
        	<?php echo $value[4];?>
        </td>
        <td >
 			<?php echo $value[5];?>      
        </td>
         <td align="right">
 			<?php echo $value[2];?> <br /> <?php echo $value[19];?>      
        </td>
         <td align="right">
 			<?php echo $value[18];?>
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
