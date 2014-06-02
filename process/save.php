<?php
include('menu.php');
include('function.php');
include('cn.php');
$j_id = $_POST['job_id'];
$type = $_POST['type'];
$date = $_POST['date'];
$cusname = $_POST['cusname'];
$mob = $_POST['mob'];
$mob = explode(" ",$mob);
$mob = implode("",$mob);


$jname = $_POST['jname'];
$jone = $_POST['jone'];
$qone = $_POST['qone'];
$rone = $_POST['rone'];
$jtwo = $_POST['jtwo'];
$qtwo = $_POST['qtwo'];
$rtwo = $_POST['rtwo'];
$jthree = $_POST['jthree'];
$qthree = $_POST['qthree'];
$rthree = $_POST['rthree'];
$jfour = $_POST['jfour'];
$qfour = $_POST['qfour'];
$rfour = $_POST['rfour'];

$total = $_POST['total'];



$advance = $_POST['advance'];
$due = $_POST['due'];
$aone = $_POST['aone'];
$atwo = $_POST['atwo'];
$athree = $_POST['athree'];
$afour = $_POST['afour'];
$balance = $_POST['balance'];
$status = "Pending";
$user = $_POST['user'];
$time = $_POST['myTime'];
$rec = $_POST['receipt'];
$vnum = $_POST['vnum'];

$bnum = $_POST['bnum'];

$bcheckbox = $_POST['cbbill'];
$vcheckbox = $_POST['cbvoucher'];
$rcheckbox = $_POST['cbreceipt'];




$due = $total - $advance;
$xtotal = $aone + $atwo + $athree + $afour;
if($xtotal != $total)
{
	print $aone." ".$atwo." ".$athree." ".$afour;
	print "X Total ".$xtotal." now all total ".$total;
	echo "<center><h1>Total Miss Match Please Try Again </h1></center>";

}


$query = "INSERT INTO job_details
		(j_id,type,date,cusname,mob,jname,
		jone,qone,rone,aone,
		jtwo,qtwo,rtwo,atwo,
		jthree,qthree,rthree,athree,
		jfour,qfour,rfour,afour,
		total,advance,due,balance,status,time,user,receipt,v_num,b_num)
		VALUES
		('$j_id',
		'$type','$date','$cusname','$mob',
		'$jname',
		'$jone','$qone','$rone','$aone',
		'$jtwo','$qtwo','$rtwo','$atwo',
		'$jthree','$qthree','$rthree','$athree',
		'$jfour','$qfour','$rfour','$afour',
		'$total','$advance','$due','$balance',
		'$status','$time','$user','$rec','$vnum','$bnum'
		)
";

$print = $_POST['print'];
if($print == $_SESSION['print'])
{
	if(mysql_query($query))
	{
		$error_query = "";
	}
	else
	{
		$error_query = "Record Not Saved Error Occured";
		echo "Error Data Not Saved Please Try Again ";
		exit;
	}
	
	add_customer($cusname,$mob);
	$_SESSION['print'] = $_SESSION['print'] + 1;
}
	
?>
<?php echo $error_query;?>
<style>
.print{font-size:8px; font-family:Arial, Helvetica, sans-serif}
</style>
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
}
</script>
<body style="background-color:#FFFFFF; background-image:none;">
<h1>	Saved. </h1>
<input type="button" onClick="printDiv('printableArea')" value="Take a Print" />
	</center>
<div id="printableArea" style="height:8.3in; width:5.8in; font-size:8px; font-family:Arial, Helvetica, sans-serif;">
<br>
<?PHP
for($i=0;$i<2;$i++)
{
?>
<table align="center" border="0" width="300px;" style="margin-top:-10px;">
<tr>
	<td colspan="4" align="center">
	<font style="font-size:20px;">
	<br>
	Job Ticket
	</font>
	</td>
</tr>
<tr>
	<td colspan="4" align="center">
	<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
	<?php
	if(empty($rec) and empty($vnum) and empty($bnum))
	{
		 if(!empty($bcheckbox))
			{echo $bcheckbox . "______";}?>
		<?php if(!empty($rcheckbox))
			{echo $rcheckbox . "______";}?>
		<?php if(!empty($vcheckbox))
			{echo $vcheckbox . "______";}
	}
	else
	{
	 if(!empty($bnum))
			{echo "Bill Num :" .$bnum;}?>
	<?php if(!empty($vnum))
			{echo "Voucher Num :" .$vnum;}?>
	<?php if(!empty($rec))
			{echo "Receipt Num :" .$rec;}
	}
	?>
	</font>
	</td>
</tr>
	<tr>
    	<td width="20%" class="print">
        <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
        Job Num: <?php echo $j_id;?>
        </font>
        </td>
        <td class="print" align="right">
        <br><br>
        <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
        Date : <?php echo date('d-m-y');?>
        </font>
        </td>
    </tr>
    <tr>
    	 <td class="print" width="50%">
         <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
         Customer : <?php echo $cusname;?>
         </font>
         </td>
         <td class="print">
         <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
         Mobile : <?php echo $mob;?>
         </font>
         </td>
    </tr>
    
     <tr>
    	 <td class="print" colspan="2" align="center">
         <font style="font-family:Arial, Helvetica, sans-serif; font-size:10px;">
         Job Name : <?php echo $jname;?>
         </font>
         </td>
    </tr>
    
    <tr>
    	<td colspan="2" align="center">
        	<table align="center" border="0" width="100%">
            	<tr>
                	<td  class="print">
                    <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                    Sr No.
                    </font>
                    </td>
                    <td  class="print">
                    <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                    Details
                    </font>
                    </td>
                    <td  class="print">
                    <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                    Qty
                    </font>
                    </td>
                    <td  class="print">
                    <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                    Rate
                    </font>
                    </td>
                    <td  class="print">
                    <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                    Amount
                    </font>
                    </td>
                </tr>
                <tr>
                	<td class="print">
                    <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                    1.
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $jone;?>
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $qone;?>
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $rone;?>
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $aone;?>
                    </font>
                    </td>
               </tr>
               <tr>
                	<td class="print">
                    <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                    2.
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $jtwo;?>
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $qtwo;?>
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $rtwo;?>
                    </font>
                    </td>
                    <td class="print">
                    <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $atwo;?>
                    </font>
                    </td>
               </tr>
               <tr>
                	<td class="print">
                    <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                    3.
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $jthree;?>
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $qthree;?>
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $rthree;?>
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $athree;?>
                    </font>
                    </td>
               </tr>
               <tr>
                	<td class="print">
                    <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                    4.
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $jfour;?>
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $qfour;?>
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $rfour;?>
                    </font>
                    </td>
                    <td class="print">
					<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
					<?php echo $afour;?>
                    </font>
                    </td>
               </tr>
               <tr>
               	<td colspan="4" align="right" class="print">
                	<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                    Total :
                    </font>
                </td>
                <td class="print">
                <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                	<?php echo $total;?>
                    </font>
                </td>
               </tr>
               <tr>
               <td colspan="2">
               	<font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                	Receipt Num : <?php echo $rec;?>
                    </font>
               </td>
               	<td class="print" colspan="2" align="right">
                <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;"> 
                               	Advance :
                </font>
                </td>
                <td class="print">
                <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                	<?php echo $advance;?>
                    </font>
                </td>
               </tr>
               <tr>
               <td  class="print" colspan="2">
                <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                                	User:
                </font>
               <font style="font-family:Arial, Helvetica, sans-serif; font-size:9px;">
                	<?php echo $user;?>
                    </font>
                </td>
               	<td  class="print" colspan="3" align="right">
                <font style="font-family:Arial, Helvetica, sans-serif; font-size:11px;">
                                	Due :
                </font>
                </td>
                <td class="print">
                
                <font style="font-family:Arial, Helvetica, sans-serif; font-size:11px;">
                	<?php echo $due;?>
                    </font>
                </td>
               </tr>
            </table>
        </td>
    </tr>
     <tr>
    	<td colspan="2">
    	<font style="font-family:Arial, Helvetica, sans-serif; font-size:10px;">
    	I/we have checked the sample Print.
    	It is acceptable to us.
	</td>
	</tr>
	<tr>
	<td colspan="2" align="right">
	<font style="font-family:Arial, Helvetica, sans-serif; font-size:11px;">
	<br>
	Sign : ____________________________
	
	</font>
    	</td>
       </tr>
       <tr>
       	<td>
       		&nbsp;
       		<br><br>
       	</td>
       	</tr>
       
</table>
<?php
}
?>
</div>