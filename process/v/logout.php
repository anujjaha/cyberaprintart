<?php
session_start();
error_reporting(0);
?>

<?php
$_SESSION['login'] = "false";
session_destroy();
?>
<script>
window.location.assign("http://www.process.shivamtoursandtravels.com");
</script>