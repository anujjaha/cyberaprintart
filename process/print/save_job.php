<?php
include('menu.php');
include('function.php');
$j_id = $_POST['j_id'];
$status = $_POST['status'];
$bnum = $_POST['bnum'];
$vnum = $_POST['vnum'];
$receipt = $_POST['receipt'];
$total = $_POST['total'];
$query = "UPDATE job_details
		  SET
		  status = '$status',
		  b_num = '$bnum',
		  v_num = '$vnum',
		  receipt = '$receipt'
		  WHERE
		  j_id = '$j_id'
		 ";
mysql_query($query);
$date = date('d-m-y');
$query1 = "INSERT INTO job_doing
			VALUES(
			'',
			'$j_id',
			'$total',
			'$status',
			'$date',
			NOW()
			)
		 ";
mysql_query($query1);
 if($status == "Completed")
 {
        $value = $_REQUEST['j_id'];
	$param = 'j_id';
$sendSMS = single_record($param,$value);
$mob = $sendSMS['mob'];
$msg = 'Dear '.$sendSMS['cusname'].' Your Job Num '.$sendSMS['j_id'].' completed and ready for delivery thank you for business with Cybera.';
$msg = str_replace(" ","+",$msg);
	//$url = "http://ip.infisms.com/smsserver/SMS10N.aspx?Userid=aabrothers1&UserPassword=54321&PhoneNumber=$mob&Text=$msg&GSM=aabros";
	$url = "http://ip.infisms.com/smsserver/SMS10N.aspx?Userid=cyberabill&UserPassword=cyb123&PhoneNumber=$mob&Text=$msg&GSM=CYBERA";
	
	?>
	<script>
	window.open("<?php echo $url;?>",'Send SMS','width=200,height=200');
	</script>
	<?php
	
	$url = urlencode($url);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, urldecode($url));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
	$response = curl_exec($ch);
	
	/*print_r($response);
	echo $url;
	die;*/
	curl_close($ch);
	
	
}

?>
<center>
<script>
	window.location.assign('home.php');
</script>