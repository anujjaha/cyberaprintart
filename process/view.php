<?php
include('menu.php');
?>

<br>
<br>
<center>
	<h2>View By Details </h2>
</center>
<table align="center" border="1"  bgcolor="#E9F7FC">
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
        	<input type="submit" name="View" value="View" id="sub" />
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
