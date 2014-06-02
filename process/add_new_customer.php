<?php
include('menu.php');
include('function.php');
?>
<script>
function check()
{
	var key = document.getElementById('key').value;
	var skey = document.getElementById('skey').value;	
	if(key == "")
	{
		alert("Please Fill security Key");
		document.getElementById('key').focus();
		return false;
	}
	if(key != skey )
	{
		alert("Please Provide Valid Security Key");
		document.getElementById('key').value = "";
		document.getElementById('key').focus();
		return false;
	}
}

</script>
<style>
td
{font-size:11px;}
</style>

<h1 style="margin-top:-20px;">
Add New Customer 
</h1>
<table align="center" border="2"  bgcolor="#CCEAE7" style="margin-top:-15px;">
<form action="save_new_customer.php" method="post" onSubmit="return check()">
	<tr>	
    	<Td align="right">
        	Customer Name :
        </Td>
        <td>
        	<input type="text" name="cusname" />
        </td>
    </tr>
    <tr>	
    	<Td align="right">
        	Contact Number :
        </Td>
        <td>
        	<input type="text" name="mob" />
        </td>
    </tr>
	<tr>
    	<td align="right">
        	Security Key :
        </td>
        <Td>
        <font style="color:#FF0000; font-size:16px;">
        	<?php $key = rand(11,99);
				echo $key; ?>
                </font>
            <input type="text" name="key" maxlength="2" id="key" style="width:35px;">
        </Td>
    </tr>
    <Tr>
    	<Td colspan="2" align="center">
        <input type="submit" name="Save" value="Save">
        <input type="reset" name="reset" value="Reset">
        <input type="hidden" name="skey" id="skey" value="<?php echo $key;?>">
        </Td>
    </Tr>
</table>