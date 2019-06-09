
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
		<div class="background_image" style="background-image:url(images/music2.jpg); height:fill" ></div>
	
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
	<form>
	<div class="container">
	<label for="uname"><b>Username</b></label>
	<input type="text" name="uname" placeholder="Enter Username" required>
	<label for="password"><b>Password</b></label>
	<input type="password" name="password" placeholder="Enter Password" required>
	<button type="submit">Login</button>
	<button type="button" class="cancelbtn">Cancel</button>
	<span class="password"><a href="#">Forgot password?   </a><a href="register.php">Don't have an account?</a></span></div></form>
	
</body>
</html>