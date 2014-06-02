<?php
include('menu.php');
include('function.php');
include('cn.php');
error_reporting(0);
$cusname = $_POST['cusname'];
$mob = $_POST['mob'];

$query = "INSERT INTO new_customers
	 values
	 ('',
	 '$cusname',
	 '$mob',
	 'Y'
	 )
	 ";
	 
if(mysql_query($query))
{
?>
<script> 
window.location.assign('customer.php');
</script>
<?php
}
else
{
	echo "<h1> Error Occured </h1>";
}
?>
