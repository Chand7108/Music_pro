<?php
include('config.php'); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP DOC</title>
</head>
<body>
	<?php
	$query = mysqli_query($con,"SELECT * FROM images") or die(mysqli_error($con));
	while($row = mysqli_fetcg_assoc($query))
	{
		echo "<img src='images/".$row['image']."'";
	}
	?>
</body></html>