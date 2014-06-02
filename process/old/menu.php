<?php
session_start(); 
if($_SESSION['login'] != "true")
{
	header("location:index.php");
}
?>
<table align="center"  border="2">
	<tr>
    	<td class="menu">
        	<a href="home.php">
            	HOME
            </a>
        </td>	
        <td>
        	||
        </td>
        <td class="menu">
        	<a href="new.php">
            	New
            </a>
        </td>	
        <td>
        	||
        </td>
        <td class="menu">
        	<a href="today.php">
            	Today
            </a>
        </td>
        <td>
        	||
        </td>	
        <td class="menu">
        	<a href="view.php">
            	View
            </a>
        </td>	
        <td>
        	||
        </td>
        <td class="menu">
        	<a href="search.php">
            	Search
            </a>
        </td>	
        <td>
        	||
        </td>		
        <td class="menu">
        	<a href="logout.php">
            	Log Out
            </a>
        </td>	
        <td>
        	||
        </td>	
    </tr>
</table>