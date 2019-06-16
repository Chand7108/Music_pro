<?php
session_start();
if(session_destroy())
{
	$message = "Incorrect username or password";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header("Location: index.php");

}
?>