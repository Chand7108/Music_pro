<?php 
include('config.php'); 

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content = "width= device-width, initial-scale = 1, maximum-scale=1" />
	<title>Music-Pro </title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
	<div class="super_container">
		<div class="background_image" style="background-image:url(images/music3.jpg); height:fill" ></div>
	
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
	<div class="container" style="width: 450px;">
		<?php
	//var_dump($_POST);
	session_start();
	if(isset($_POST['submit']))
	{
		$username = mysqli_real_escape_string($con,$_POST['uname']) or die(mysqli_error($con));
		$password = mysqli_real_escape_string($con,md5($_POST['password'])) or die(mysqli_error($con));
		$query = mysqli_query($con,"SELECT * FROM users WHERE user_name = '$username' AND user_password='$password'") or die(mysqli_error($con));
				
		if($query->num_rows == 1)
		{
			    $_SESSION['user'] = $username;
			    header("location: userProfile.php");
		}
		else
		{
			$message = "Incorrect username or password";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
		
	}
	?>
	<form method="post" name="login" action="">
	<label for="uname"><b>Username</b></label>
	<input type="text" name="uname" placeholder="Enter Username" required>
	<label for="password"><b>Password</b></label>
	<input type="password" name="password" placeholder="Enter Password" required>
	<button type="submit" name="submit" value="submit">Login</button>
	<button type="button" class="cancelbtn" onclick="window.location.href='index.php'">Cancel</button>
	<span class="password"><a href="#"><b>Forgot password?   </b></a><a href="register.php"><b>Don't have an account?</b></a></span></div>
</form>
	
</body>
</html>