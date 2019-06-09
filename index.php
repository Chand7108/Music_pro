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
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
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

	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/7rings.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_subtitle">7 Rings</div>
								<div class="home_title"><h1>Ariana Grande</h1></div>
								<div class="home_link"><a href="songs.php">Listen</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/shawn.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_subtitle">If I can't have you</div>
								<div class="home_title"><h1>Shawn Mendes</h1></div>
								<div class="home_link"><a href="songs.php">Listen</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/zayn.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_subtitle">A whole new world</div>
								<div class="home_title"><h1>Zayn Malik</h1></div>
								<div class="home_link"><a href="songs.php">Listen</a></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

			<div class="footer_lists d-flex  flex-column align-items-start justify-content-start ml-xl-auto">
        <!--    <div class = "MyMusic" >
 	<img src="images/music.jpg" alt="music" width="200px" height="200px">
          </div> -->
				<!-- Useful Links -->
				<div class="footer_list">
					<div class="footer_list_title">Useful Links</div>
				<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="songs.php">Songs</a></li>
						<li><a href="albums.php">Albums</a></li>
						<li><a href="artists.php">Artist</a></li>
						<li><a href="help.php">About us</a></li>
					</ul>
				</div>

				<!-- Mixtape -->
				<div class="footer_list">
					<div class="footer_list_title">Connect with Us</div>
					<ul>
						<li><a href="https://www.facebook.com/chand.cinchu">Facebook</a></li>
						<li><a href="https://www.instagram.com/_b_l_u_e_b_i_r_d/">Instagram</a></li>
						<li><a href="https://twitter.com/Chandana_jram">Twitter</a></li>
						<li><a href="#">Snapchat</a></li>
						<li><a href="#">Gmail</a></li>
					</ul>
				</div>
				
			</div>
		</div>
 <!-- bottom picture -->
 
		

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>