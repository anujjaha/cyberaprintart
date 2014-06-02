<?php
error_reporting(0);
include('menu.php');
include('function.php');
$j_id = $_REQUEST['j_id'];
change_status('status','Delievered','j_id',$j_id);
?>
<script>
window.location.assign('home.php');
</script>