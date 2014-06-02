<?php
include('menu.php');
?>
<center>
	<h2> View By Details </h2>
</center>
<table align="center" border="2">
	<form action="view_details.php" method="post">
	<tr>
    	<td align="right">
        	Job Number : 
        </td>
        <td>
        	<input type="text" name="j_id" />
        </td>
    </tr>
    <tr>
    	<td align="right">
        	Job Name : 
        </td>
        <td>
        	<input type="text" name="jname" />
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        	<input type="submit" name="View" value="View" />
        </td>
    </tr>
    </form>
</table>