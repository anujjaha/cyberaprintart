<?php
//	session_start();
?>
 <?php
    $dbhost = "localhost";
    $dbuser = "cyberapr_voucher";
    $dbpass = "voucher@321";
    $dbname = "cyberapr_voucher";
    //Connect to MySQL Server
    mysql_connect($dbhost, $dbuser, $dbpass);
    //Select Database
    mysql_select_db($dbname) or die(mysql_error());
    
    /*
    
    $dbhost = "localhost";
    $dbuser = "cyberapr_voucher";
    $dbpass = "voucher@123";
    $dbname = "cyberapr_voucher";
    //Connect to MySQL Server
    mysql_connect($dbhost, $dbuser, $dbpass);
    //Select Database
    mysql_select_db($dbname) or die(mysql_error());
    
    */
	?>