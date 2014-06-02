<?php
	include("menu.php");
	include("function.php");
	$job_id = get_job_id();
?>
<script type="text/javascript" src="js/new_form.js"></script>
<table align="center" border="2">
<form action="save.php" method="post" onsubmit="return saveNewJob()">
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
        	<input type="text" name="j_id" value="<?php echo $job_id;?>" disabled="disabled"/>
        </td>
        <td width="30%">&nbsp;  </td>
        <td align="right" class="new">
        	Date : 
        </td>
        <td>
        	<input type="text" name="date" value="<?php echo date('d-m-y'); ?>" />
        </td>
    </tr>
    <tr>
    	<td align="right" class="new">
        	Customer Name: 
        </td>
        <td>
        	<input type="text" name="cusname" />
        </td>
        <td width="30%">&nbsp;  </td>
        <td align="right" class="new">
        	Mobile : 
        </td>
        <td>
        		<input type="text" name="mob" />
        </td>
    </tr>
    
    <tr>
    	<td colspan="5" align="center">
        	Job Name : <input type="text" name="jname" style="width:420px;" />
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
                    	<input type="text" name="jone" style="width:320px;" />
                    </td>
                    <td>
                    	<input type="text" name="qone" />
                    </td>
                    <td align="right">
                    	<input type="text" name="rone" id="rone" />
                    </td>
                </tr>
                <tr>
                	<td>
                    	2.
                    </td>
                    <td>
                    	<input type="text" name="jtwo" style="width:320px;"/>
                    </td>
                    <td>
                    	<input type="text" name="qtwo" />
                    </td>
                    <td align="right">
                    	<input type="text" name="rtwo" id="rtwo" />
                    </td>
                </tr>
                <tr>
                	<td>
                    	3.
                    </td>
                    <td>
                    	<input type="text" name="jthree" style="width:320px;"/>
                    </td>
                    <td>
                    	<input type="text" name="qthree" />
                    </td>
                    <td align="right">
                    	<input type="text" name="rthree" id="rthree"/>
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
        	<input type="text" name="total"  id="total"/>
        </td>
    </tr>
     <tr>
    	<td colspan="4" align="right">
        	Advance : 
        </td>
        <td>
        	<input type="text" name="advance" id="advance" onblur="test();"/>
        </td>
    </tr>
     <tr>
    	<td colspan="4" align="right">
        	Due Amount : 
        </td>
        <td>
        	<input type="text" name="due" id="due" />
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
        <input type="hidden" name="job_id" value="<?php echo $job_id;?>" />
        <input type="hidden" name="skey" id="skey" value="<?php echo $key;?>" />
        <input type="submit" name="Save" value="Save Job" />
        <input type="reset" name="Reset" value="Reset" />
        </td>
    </tr>
</form>
</table>