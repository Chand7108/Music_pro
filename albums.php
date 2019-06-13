<?php
session_start();
include('config.php');
	if(isset($_GET['album'])){
		
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MUSIC PRO</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Mixtape template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/elements.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->
	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-center">
			<div class="logo"><a href="#">MUSIC PRO</a></div>
			<div class="log_reg">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
				</ul>
			</div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="albums.php">Albums</a></li>
					<li><a href="artists.php">Artists</a></li>
					<li><a href="songs.php">Songs</a></li>
					<li><a href="help.php">Help</a></li>
				</ul>
			</nav>
			<div class="hamburger ml-auto">
				<div class="d-flex flex-column align-items-end justify-content-between">
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div>
			<div class="menu_overlay"></div>
			<div class="menu_container d-flex flex-column align-items-start justify-content-center">
				<div class="menu_log_reg">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
					</ul>
				</div>
				<nav class="menu_nav">
					<ul class="d-flex flex-column align-items-start justify-content-start">
						<li><a href="index.php">Home</a></li>
						<li><a href="albums.php">Albums</a></li>
						<li><a href="artists.php">Artists</a></li>
						<li><a href="songs.php">Songs</a></li>
						<li><a href="help.php">Help</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

    <div class = "elements">
    	<?php while($row = mysqli_fetch_array($data))
    	{ ?>
    		<img src="source.php?id=1" alt="img" />
    		<p><?php echo $row['album_name']; ?></p>

    	<?php } ?>
</div>
</div>
</body>
</html>

