<?php
//	include ("ck.php");
	include ("menu.php");
include ("val.php");


	include ("cn.php");
	error_reporting(0);
?>
  <body>
<center>
<br>
<br>


	<font style="color:#FF0000; font-size:36px;">
		Welcome to Cybera Print Art.
	</font>
	<br><br>
	
	
	

<table align="center" border="2">

	<tr>

		<td align="center" colspan="6">
		
		<h2>
		Welcome Home

		</td>

	</tr>

	<tr>

		<td>

			Sr Num

		</td>

		<td>

			Voucher Number

		</td>
		<td>

			Client Name

		</td>

		<td>

			Date

		</td>

		<td>

			Total Amout

		</td>

		<td>

			Details

		</td>

		<td>

			Update

		</td>

	</tr>

	<?php

	$sr = 1;
	//$date = $_SESSION['tdate'];
	$date = date('d-m-Y');
	$q ="select distinct(vnum) from master_data where date='$date' order by id";
	
	//print $q;
	
	$r = mysql_query($q);

	?>

	<?php

	while ( $row = mysql_fetch_assoc($r))

	{

	?>

		<tr>

			<td> <?php echo $sr;?> </td>

			<td> <?php echo $row['vnum'];

					$dtemp = $row['vnum'];	

			?> </td>
			

			<?php

				$q1 ="select * from master_data where vnum='$dtemp' ";

				//echo $q1;

				

				$r1 = mysql_query($q1);

				while ( $row1 = mysql_fetch_assoc($r1))

				{
				

					$date = $row1['date'];
					$mcname = $row1['name'];
					$gtot = $row1['gtot'];
					$total = $total + $row1['gtot'];

				}

			?>
			<td>
				<?php echo $mcname;?>
			</td>
			<td> <?php echo $date;?> </td>

			<td align="right"> <?php echo $gtot;?> </td>

			<td> <a href="view_vnum.php?vnum=<?php echo $row['vnum'];?>"> View</a> </td>

			<td> <a href="update_rec.php?vnum=<?php echo $row['vnum'];?>"> Update </a> </td>

		</tr>

	<?php

	$sr = $sr + 1;

	}

	?>

	<tr>

		<td colspan="4" align="right">
		
		Grand Total :  
		</td>
		<td align="right">
		
		<?php
		echo $total;

		?>

		</td>	

	</tr>

	</table>

		
	
	<br><br>

	<img src="img/aj.jpg">

</center>
    </body>
    </html>