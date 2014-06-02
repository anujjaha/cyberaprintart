<?php
include('menu.php');
include('function.php');
?>
<?php
$cusname = $_REQUEST['cusname'];
$mob = $_REQUEST['mob'];
$c_id = $_REQUEST['c_id'];

$query = "UPDATE new_customers 
	 SET
	 cusname = '$cusname',
	 mob = '$mob'
	 WHERE
	 c_id = '$c_id'
	 ";
if(mysql_query($query))
{
?>
<script>
window.location.assign("customer.php");
</script>
<?php
}
else
{
	echo "<h1>Error Occured </h1>";
}
?>