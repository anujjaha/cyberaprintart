<?php
include('menu.php');
include('function.php');
$j_id = $_GET['j_id'];
$verifyData = single_record('j_id',$j_id);
?><script type="text/javascript">
function myTime()
{
	var currentTime = new Date()
	var hours = currentTime.getHours()
	var minutes = currentTime.getMinutes()
	if (minutes < 10)
	minutes = "0" + minutes
	var suffix = "AM";
	if (hours >= 12) {
	suffix = "PM";
	hours = hours - 12;
	}
	if (hours == 0) {
	hours = 12;
	}
	document.getElementById("myTime").value = hours + ":" + minutes + " " + suffix ;
	document.getElementById("ntype").focus();
}
</script>
<style>
td
{font-size:11px;}
</style>
<body onload="myTime()">

<br>
<h1><font color="white">
Welcome To admin Panel</font>
</h1>
<form action="save_verify.php" method="post">
<table align="center" border="2" width="80%" bgcolor="#E9F7FC" >
	<tr>
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
    </tr>
    
    </tr>
   <tr>
        <td>

        	<?php echo $verifyData['cusname'];?>
        </td>
        <td>
        	<?php echo $verifyData['mob'];?>
        </td>
		  <td>
        	<?php echo $verifyData['jname'];?>
        </td>       
         <td>
        	<?php echo $verifyData['total'];?>
        </td>
        <td>
        	<?php echo $verifyData['time'];?>
        </td>
         <td>
        	<?php echo $verifyData['date'];?>
        </td>
         <td align="right">
        	<?php echo $verifyData['status'];?>
        </td>
    </tr>
</table>
<table align="center" border="2" width="80%"  bgcolor="#E9F7FC" >
	<tr>
		<Td align="right">
			Job Number :
		</td>
		<td>
		<input type="text" name="j_id" value="<?php echo $verifyData['j_id'];?>">
		</td>
	</tr>
	<tr>
		<Td align="right">
			Receipt Number :
		</td>
		<td>
		 <input type="text" name="receipt" value="<?php echo $verifyData['receipt'];?>">
		</td>
	</tr>
	<tr>
		<Td align="right">
			Voucher Number : 
		</td>
		<td>
		<input type="text" name="v_num" value="<?php echo $verifyData['v_num'];?>">
		</td>
	</tr>
	<tr>
		<Td align="right">
			Bill Number : 
		</td>
		<td>
		<input type="text" name="b_num" value="<?php echo $verifyData['b_num'];?>">
		</td>
	</tr>
	<tr>
		<td align="right">
			Remarks :
		</td>
		<td>
		<textarea name="remarks" cols="20" rows="4"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="hidden" name="myTime" id="myTime">
			<input type="submit" name="save" value="Confirm Job">
			
		</td>
	</tr>
</table>