<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Catering Service</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url("img/cat.jpg");
			color: black;
			width: 100%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-success bg-dark">
		<center>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php"><img src="img/house.jpg" width="30" height="30" alt="img/house.jpg"/><span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
	</nav>
	<div class="container"><br/><br/><br/>
		<div class="header">
			<center><h1>Catering Service</h1></center>
		</div><br/>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($db, "SELECT * FROM login");
	?>
	
	<?php	
	}
	?>
	<main class="bd-masthead" id="content" role="main">
  				<div class="container">
    					<div class="row align-items-center">
      						<div class="col-2 mx-auto col-md-4 text-md-left order-md-4">
      						</div>
							<div class="col-md-12 order-md-10 text-center text-md-left pr-md-15">
								<br/><br/><br/>
								<center><img src="img/image.jpg"><br><br><br>
									<a class="btn btn-warning" href="register.php" role="button">register</a>&nbsp;&nbsp;&nbsp;
									<a class="btn btn-danger" href="login.php" role="button">log in</a></center>
									
							</div>
    							</div>
</div><br/><br/>
</body>
</html>
