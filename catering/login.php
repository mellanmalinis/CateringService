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
			background-image: url("img/cat1.jpg");
			color: white;
			width: 100%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-success bg-red">
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
	<div class="container"><br/>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($db, $_POST['username']);
	$pass = mysqli_real_escape_string($db, $_POST['password']);


	if($user == "" || $pass == "") {
		echo "<br/>";
	} else {
		$result = mysqli_query($db, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			header('Location: login.php');
		}

		if(isset($_SESSION['valid'])) {
			header('Location: table.php');			
		}
	}
} else {
?>

	<main class="bd-masthead" id="content" role="main">
  				<center><div class="container">
    					<div class="row align-items-center">
      						<div class="col-2 mx-auto col-md-4 text-md-left order-md-4">
      						</div>
							<div class="col-md-8 order-md-2 text-center text-md-left pr-md-2">
								<form name="form1" method="post" action=""><br/></center>
									<div class="container">
										<center><h2>Log In</h2></center>
									</div><br/><br/>
										<center><div class="center">
											<div class="col-md-3 mb-6">
												<label for="validationServer01">username</label>
													<input type="text" name="username" class="form-control is-valid" id="validationServer01"  required>
											</div>
										</div>
										<div class="center">
											<div class="col-md-3 mb-6">
												<label for="validationServer01">password</label>
													<input type="password" name="password" class="form-control is-valid" id="validationServer01"  required>
											</div>
										</div>
										<button class="btn btn-danger" type="submit" name="submit" value="Submit">log in</button><br/><br/>
											<p>
												Already have an account ? &nbsp; <a class="btn btn-sm btn-warning" href="register.php" role="button">sign up</a>
											</p>
								</form>
      					</div>
    				</div>

<?php
}
?>
</body>
</html>
