<?php

$con = mysqli_connect("localhost","root","","music_pro");

if(mysqli_connect_errno()){
	
	echo"Failed to connect : " . mysqli_connect_error(); 
	
}

?>