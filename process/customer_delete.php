<?php
include('menu.php');
include('function.php');
?>
<?php
$c_id = $_REQUEST['c_id'];
$bQuery = "INSERT INTO delete_customer SELECT * FROM new_customers WHERE c_id = '$c_id'";

mysql_query($bQuery);
$query = "DELETE from new_customers  WHERE c_id = '$c_id'";

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
	echo "<h1>Error Occured</h1>";
}
?>
