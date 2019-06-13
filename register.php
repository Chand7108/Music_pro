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
	<div class="super_container" style="background-image: url(images/music3.jpg);">
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
</div>
	<div class="container" style="width: 450px;">
		<?php 
		//pre_r($_POST);
		if(isset($_POST['submit'])){
			$name = mysqli_real_escape_string($con,$_POST['name']);
			$email = mysqli_real_escape_string($con,$_POST['email']);
			$username = mysqli_real_escape_string($con,$_POST['uname']);
			$password = mysqli_real_escape_string($con,md5($_POST['password']));
			$confirmpassword = mysqli_real_escape_string($con,$_POST['confirmpassword']);
			$bool = true;
			$query = mysqli_query($con,"SELECT * FROM users");
			while($row = mysqli_fetch_array($query))
			{
				$table_users = $row['user_name'];
				if($username == $table_users)
				{
					$bool = false;
				 	Print '<script>alert("Username is already taken!");</script>';
				 	Print '<script>window.location.assign("register.php");</script>';
				}
			}
			if($bool)
			{
				mysqli_query($con,"INSERT INTO users(user_name,user_email,user_password,name) VALUES ('$username','$email','$password','$name')") or die(mysqli_error($con));
				Print '<script>alert("Sucessfully registered");</script>';
				Print '<script>window.location.assign("register.php");</script>';
			}
		}
		?>
	<form method="post" name="register" action="register.php" onSubmit="return validate(this)">
		Name :<input type="text" name="name" placeholder="Enter your name" required>
		Email : <input type="text" name="email" placeholder="Enter your email id" required>
		User ID :<input type="text" name="uname" placeholder="Enter your user id" required>
		Password :<input type="password" name="password" placeholder="Enter your password" required>
		Confirm Password :<input type="password" name="confirmpassword" placeholder="Please confirm password" required>
		<button type="submit" value="Register" name="submit">Register</button>
	</form>
		<script type="text/javascript">
			function validate(form)
			{
				password = form.password.value;
				confirm = form.confirmpassword.value;
				if(password != confirm)
				{
					alert("Passwords do not match");
					return false;
				}
				return true;
			}
		</script>
</body>
</html>

<?php
//var_dump($_POST);
function pre_r($array)
{
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}