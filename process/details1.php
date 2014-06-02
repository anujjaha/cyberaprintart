<?php
	include("cn.php");
$q = $_GET['q'];
$query = "SELECT * FROM new_customers WHERE cusname ='$q' LIMIT 0,1";
?>
<?php
$run = mysql_query($query);
while($row = mysql_fetch_assoc($run))
{
$mob =  $row['mob'];
}
echo $mob;
?>
