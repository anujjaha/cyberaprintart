<?php
include('menu.php');
include('function.php');
error_reporting(0);
$value = $_REQUEST['j_id'];
$param = 'j_id';
$sendSMS = single_record($param,$value);
$mob = $sendSMS['mob'];
$msg = 'Dear '.$sendSMS['cusname'].' Your Job Num '.$sendSMS['j_id'].' completed and ready for delivery thank you for business with Cybera.';
$msg = str_replace(" ","+",$msg);
	//$url = "http://ip.infisms.com/smsserver/SMS10N.aspx?Userid=aabrothers1&UserPassword=54321&PhoneNumber=$mob&Text=$msg&GSM=aabros";
	$url = "http://ip.infisms.com/smsserver/SMS10N.aspx?Userid=cyberabill&UserPassword=cyb123&PhoneNumber=$mob&Text=$msg&GSM=CYBERA";
	$url = urlencode($url);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, urldecode($url));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
	$response = curl_exec($ch);
	curl_close($ch);
?>
<script type="text/javascript">
window.location.assign("home.php");
</script>