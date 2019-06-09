<?php
$db_handle = mysqli_connect('localhost','root','');
 if(!db_handle)
 	die("Unable to connect to database" . mysqli_error());
 if(!mysqli_select_db($db_handle,'music_pro'))
 	die("Unable to select database" . mysqli_error());
 ?>