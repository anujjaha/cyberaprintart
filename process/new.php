<?php
	include("menu.php");
	include("function.php");
	$_SESSION['print'] = 0;
	$job_id = get_job_id();
?>
<style>
input:focus {
border: 1px solid #0099CC;
    border-radius: 2px;
    box-shadow: 0 0 1px 1px 	#0099CC;
    color: #666;
   outline: none;
}
</style>
<script>
function showMob(state)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("mob").value = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","details1.php?q="+state,true);
	xmlhttp.send();
}
</script>
<script type="text/javascript" src="js/new_form.js"></script>
<br />
<body onLoad="myTime()">
<table align="center" border="2" bgcolor="#E9F7FC" bordercolor="#66CCFF" >
<form action="save.php" method="post" onSubmit="return saveNewJob()">
	<tr>
    	<td colspan="5" align="center">
        	Customer Type : 
            <input type="radio" name="type" id="ntype" checked="checked" value="new" onBlur="cusType()"/> New
			<input type="radio" name="type" id="otype" value="old" onBlur="cusType()"/> Regular
        </td>
    </tr>
	<tr>
    	<td align="right" class="new" >
            Job Num:
        </td>
        <td>
        	<input type="text" class="ntext"  name="j_id" value="<?php echo $job_id;?>" disabled="disabled"/>
        </td>
        <td width="30%">&nbsp;  </td>
        <td align="right" class="new">
        	Date : 
        </td>
        <td>
        	<input type="text" class="ntext"  name="date" value="<?php echo date('d-m-y'); ?>" />
        </td>
    </tr>
    <tr>
    	<td align="right" class="new">
        	Customer Name: 
        </td>
        <td>
        	<input type="text" class="ntext" id="ctname"  name="cusname" />
        </td>
        <td width="30%">&nbsp;  </td>
        <td align="right" class="new">
        	Mobile : 
        </td>
        <td>
        		<input type="text" class="ntext" id="mob"  name="mob" />
        </td>
    </tr>
    <tr>
    	<td align="right" class="new">
        	Customer Name: 
        </td>
        <td>
        	<select name="cusname" id="csname" onchange="showMob(this.value)" >
            	<?php
					show_customer();
				?>
            </select>
        </td>
        <td width="30%">&nbsp;  </td>
        <td align="right" class="new">
        	&nbsp;
        </td>
        <td>
        		&nbsp;
        </td>
    </tr>
    
    <tr>
    	<td colspan="2" align="right">
        	Job Name :
        </td>
        <td colspan="3">	
         <input type="text" class="ntext"  name="jname" style="width:420px;" />
        </td>
    </tr>
    <tr>
    	<td colspan="5" align="center" style="background-color:#4E4E4E">
        	<strong> <font color="#FFFFFF" size="5">Job Details</font></strong>
        </td>	
    </tr>
    <tr>
    	<td colspan="5" align="center">
        	<table align="center" border="2" width="100%">
            	<tr>
                	<td>
                    	Sr.
                    </td>
                    <td>
                       Rate
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
                    <input type="checkbox" name="rate1" value="rate1" id="rate1">
                    </td>
                    <td>
                    	<input type="text" class="ntext"  name="jone" style="width:320px;" />
                    </td>
                    <td>
                    	<input type="text" class="ntext"  name="qone" id="qone" />
                    </td>
                    <td align="right">
                    	<input type="text" class="ntext"  name="rone" id="rone"/>
                    </td>
                    <td align="right">
                    	<input type="text" class="ntext"  name="aone" id="aone"  onblur="t1()"/>
                    </td>
                </tr>
                <tr>
                	<td>
                    	2.
                    </td>
                     <td>
                    <input type="checkbox" name="rate2" value="rate2" id="rate2">
                    </td>
                    <td>
                    	<input type="text" class="ntext"  name="jtwo" style="width:320px;"/>
                    </td>
                    <td>
                    	<input type="text" class="ntext"  name="qtwo" id="qtwo" />
                    </td>
                    <td align="right">
                    	<input type="text" class="ntext"  name="rtwo" id="rtwo"/>
                    </td>
                    <td align="right">
                    	<input type="text" class="ntext"  name="atwo" id="atwo"  onblur="t2()"/>
                    </td>
                </tr>
                <tr>
                <td>
                    	3.
                    </td>
                     <td>
                    <input type="checkbox" name="rate3" value="rate3" id="rate3">
                    </td>
                    <td>
                    	<input type="text" class="ntext"  name="jthree" style="width:320px;"/>
                    </td>
                    <td>
                    	<input type="text" class="ntext"  name="qthree" id="qthree" />
                    </td>
                    <td align="right">
                    	<input type="text" class="ntext"  name="rthree" id="rthree" />
                    </td>
                    <td align="right">
                    	<input type="text" class="ntext"  name="athree" id="athree" onBlur="t3()"/>
                    </td>
                </tr>
                 <tr>
                <td>
                    	4.
                    </td>
                     <td>
                    <input type="checkbox" name="rate4" value="rate4" id="rate4">
                    </td>
                    <td>
                    	<input type="text" class="ntext"  name="jfour" style="width:320px;"/>
                    </td>
                    <td>
                    	<input type="text" class="ntext"  name="qfour" id="qfour" />
                    </td>
                    <td align="right">
                    	<input type="text" class="ntext"  name="rfour" id="rfour" />
                    </td>
                    <td align="right">
                    	<input type="text" class="ntext"  name="afour" id="afour" onBlur="t4()"/>
                    </td>
                </tr>
                <tr>
    	<td colspan="5" align="right">
        	Total : 
        </td>
        <td>
        	<input type="text" class="ntext"  name="total"  id="total"/>
        </td>
    </tr>
     <tr>
    	<td colspan="5" align="right">
        	Advance : 
        </td>
        <td>
        	<input type="text" class="ntext"  name="advance" id="advance" onBlur="test();"/>
        </td>
    </tr>
     <tr>
    	<td colspan="5" align="right">
        	Due Amount : 
        </td>
        <td>
        	<input type="text" class="ntext"  name="due" id="due" />
        </td>
    </tr>
     <tr>
    	<td colspan="5" align="right">
        	Balance : 
        </td>
        <td>
        	<input type="text" class="ntext"  name="balance" id="balance" />
        </td>
    </tr>
            </table>
        </td>
    </tr>
     <tr>
    	 <td align="center">
        	Bill Number :
           <input typte="text" name="bnum" class="ntext">
        </td>
    	<td align="center">
        	Voucher Number :
           <input typte="text" name="vnum" class="ntext">
        </td>
       
        <td align="center">
        	Receipt Number :
           <input typte="text" name="receipt" class="ntext">
        </td>
    </tr>
    <tr>
    	<td colspan="6" align="center">
    		<input type="checkbox" name="cbbill" value="Bill Num : ">Bill
    		<input type="checkbox" name="cbvoucher" value="Voucher Num : ">Voucher
    		<input type="checkbox" name="cbreceipt" value="Receipt Num : ">Receipt
    	</td>
    </tr>
    <tr>
    	<td colspan="6" align="center">
        	User :
        <input type="text" name="user" class="ntext">
        </td>
    </tr>
     <tr>
    	<td colspan="6" align="center">
        	Security Key :
            <font style="color:#FF0000; font-size:22px; font-weight:bold;">
            	<?php echo $key  = rand(111,999);?>
            </font>
        <input type="text" class="ntext"  name="key" id="key" style="width:35px;" maxlength="3" />
        </td>
    </tr>
    <tr>
    	<td colspan="5" align="center">
        <input type="hidden" name="job_id" value="<?php echo $job_id;?>" />
        <input type="hidden" name="skey" id="skey" value="<?php echo $key;?>" />
        <input type="hidden" name="myTime" id="myTime">
        <input type="hidden" name="print" value="<?php echo $_SESSION['print'];?>">
        <input type="submit" name="Save" value="Save Job" id="sub" />
        <input type="reset" name="Reset" value="Reset" id="sub" />
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