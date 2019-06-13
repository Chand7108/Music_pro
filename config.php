<?php
ini_set('display_errors',1);
ini_set('log_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$con = mysqli_connect("localhost","root","","music_pro");

if(mysqli_connect_errno()){
	
	echo"Failed to connect : " . mysqli_connect_error(); 
	
}

?>