<?php
include('menu.php');
include("function.php");
	$j_id = $_GET['j_id'];
	$param = 'j_id';
	$editData = single_record($param,$j_id);
?>
<script type="text/javascript" src="js/new_form.js"></script>
<br>
<br>

<table align="center" border="2" bgcolor="#E9F7FC" >
<form action="save_edit.php" method="post" onsubmit="return saveNewJob()">
	<tr>
    	<td colspan="5" align="center">
        	Customer Type : 
            <input type="radio" name="type" checked="checked" value="new" /> New
			<input type="radio" name="type" value="existing" /> Regular
        </td>
    </tr>
	<tr>
    	<td align="right" class="new">
        	Job Num: 
        </td>
        <td>
        	<input type="text" name="j_id" value="<?php echo $editData['j_id'];?>" disabled="disabled"/>
        </td>
        <td width="30%">&nbsp;  </td>
        <td align="right" class="new">
        	Date : 
        </td>
        <td>
        	<input type="text" name="date" value="<?php echo $editData['date'];?>" />
        </td>
    </tr>
    <tr>
    	<td align="right" class="new">
        	Customer Name: 
        </td>
        <td>
        	<input type="text" name="cusname"  value="<?php echo $editData['cusname'];?>"  />
        </td>
        <td width="30%">&nbsp;  </td>
        <td align="right" class="new">
        	Mobile : 
        </td>
        <td>
        		<input type="text" name="mob"  value="<?php echo $editData['mob'];?>"  />
        </td>
    </tr>
    
    <tr>
    	<td colspan="5" align="center">
        	Job Name : <input type="text" name="jname" style="width:420px;"  value="<?php echo $editData['jname'];?>" />
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
                    	<input type="text" name="jone"  value="<?php echo $editData['jone'];?>" style="width:320px;" />
                    </td>
                    
                    <td>
                    	<input type="text" name="qone" id="qone"  value="<?php echo $editData['qone'];?>"  />
                    </td>
                    <td align="right">
                    	<input type="text" name="rone"  value="<?php echo $editData['rone'];?>"  id="rone"  />
                    </td>
                    <td align="right">
                    	<input type="text" name="aone" id="aone" value="<?php echo $editData['aone'];?>"  id="rone" onblur="t1()" />
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
                    	<input type="text" name="jtwo"  value="<?php echo $editData['jtwo'];?>" style="width:320px;"/>
                    </td>
                    
                    <td>
                    	<input type="text" name="qtwo" id="qtwo"  value="<?php echo $editData['qtwo'];?>" />
                    </td>
                    <td align="right">
                    	<input type="text" name="rtwo" id="rtwo"  value="<?php echo $editData['rtwo'];?>"/>
                    </td>
                    <td align="right">
                    	<input type="text" name="atwo" id="atwo"  value="<?php echo $editData['atwo'];?>"  onblur="t2()"/>
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
                    	<input type="text" name="jthree" value="<?php echo $editData['jthree'];?>"  style="width:320px;"/>
                    </td>
                    <td>
                    	<input type="text" name="qthree" id="qthree"  value="<?php echo $editData['qthree'];?>" />
                    </td>
                    <td align="right">
                    	<input type="text" name="rthree" id="rthree" value="<?php echo $editData['rthree'];?>" />
                    </td>
                    <td align="right">
                    	<input type="text" name="athree" id="athree"  value="<?php echo $editData['athree'];?>"  onblur="t3()"/>
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
                    	<input type="text" class="ntext"  name="jfour" value="<?php echo $editData['jfour'];?>" style="width:320px;"/>
                    </td>
                    <td>
                    	<input type="text" class="ntext"  name="qfour" value="<?php echo $editData['qfour'];?>" id="qfour" />
                    </td>
                    <td align="right">
                    	<input type="text" class="ntext"  name="rfour" value="<?php echo $editData['rfour'];?>" id="rfour" />
                    </td>
                    <td align="right">
                    	<input type="text" class="ntext"  name="afour" id="afour" value="<?php echo $editData['afour'];?>" onBlur="t4()"/>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
    	<td colspan="4" align="right">
        	Total : 
        </td>
        <td>
        	<input type="text" name="total" value="<?php echo $editData['total'];?>"   id="total"/>
        </td>
    </tr>
     <tr>
    	<td colspan="4" align="right">
        	Paid Amount : 
        </td>
        <td>
        	<input type="text" name="advance"  value="<?php echo $editData['advance'];?>"  id="advance" onblur="test();"/>
        </td>
    </tr>
    <tr>
    	<td colspan="4" align="right">
        	Pay Now : 
        </td>
        <td>
        	<input type="text" name="balance" value="<?php echo $editData['balance'];?>"  id="balance"  onblur="completeAmt()"/>
        </td>
    </tr>
     <tr>
    	<td colspan="4" align="right">
        	Due Amount : 
        </td>
        <td>
        	<input type="text" name="due" value="<?php echo $editData['due'];?>"  id="due" />
        </td>
    </tr>
   
    <tr>
    	 <td align="center">
        	Bill Number :
           <input typte="text" name="bnum" class="ntext" value="<?php echo $editData['b_num'];?>">
        </td>
    	<td align="center">
        	Voucher Number :
           <input typte="text" name="vnum" class="ntext" value="<?php echo $editData['v_num'];?>">
        </td>
       
        <td align="center">
        	Receipt Number :
           <input typte="text" name="receipt" class="ntext" value="<?php echo $editData['receipt'];?>">
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
        <input type="text" name="user" class="ntext" value="<?php echo $editData['user'];?>" >
        </td>
    </tr>
   
     <tr>
    	<td colspan="5" align="center">
        	Received By  : 
       	<input type="text" name="receive"  id="receive" style="width:225px;" value="<?php echo $editData['r_name'];?>"/>
        </td>
    </tr>
    <tr>
    	<td colspan="5" align="center">
        	Status :
            <select name="status">
            	<option> <?php echo $editData['status'];?></option>
            	<option> Completed </option>
                <option> Delievered </option>
                <option> Un Shipped </option>
                <option> Done </option>
                <option> Pending </option>
                <option> Cancel </option>
                
            </select>
        </td>
    </tr>
     <tr>
    	<td colspan="5" align="center">
        	Security Key :
            <font style="color:#FF0000; font-size:22px; font-weight:bold;">
            	<?php echo $key  = rand(111,999);?>
            </font> 
        <input type="text" name="key" id="key" style="width:35px;" maxlength="3" />
        </td>
    </tr>
    
    <tr>
    	<td colspan="5" align="center">
        <input type="hidden" name="job_id" value="<?php echo $editData['j_id'];?>" />
        <input type="hidden" name="skey" id="skey" value="<?php echo $key;?>" />
        <input type="submit" name="Save" value="Save Job" />
        <input type="reset" name="Reset" value="Reset" />
        </td>
    </tr>
</form>
</table>
