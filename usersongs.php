<?php
include('config.php');
$data = mysqli_query($con,"SELECT * FROM songs") or
		die(mysqli_error("No records found"));
		$image = $row['song_pic'];
		while($row = mysqli_fetch_assoc($data)){
		echo "<div class = 'home d-flex flex-column align-items-left justify-content-left'><img src='images/".$row['song_pic']."' alt='my image' width = 200px height = 200px><p>".$row['Song_name']."</p><audio id='audio' src='Songs/".$row['song_file']."' controls></audio></div>";
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
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="userProfile.php">Home</a></li>
					<li><a href="useralbums.php">Albums</a></li>
					<li><a href="userartists.php">Artists</a></li>
					<li><a href="usersongs.php">Songs</a></li>
					<li><a href="playlist.php">Playlists</a></li>
					<li><a href="download.php">Downloads</a></li>
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
					<li><a href="logout.php">Logout</a></li>
				</ul>
				</div>
				<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="userProfile.php">Home</a></li>
					<li><a href="useralbums.php">Albums</a></li>
					<li><a href="userartists.php">Artists</a></li>
					<li><a href="usersongs.php">Songs</a></li>
					<li><a href="playlist.php">Playlists</a></li>
					<li><a href="download.php">Dowloads</a></li>
					<li><a href="help.php">Help</a></li>
				</ul>
			</nav>
			</div>
		</div>
	</div>

    
</div>
</body>
</html>

