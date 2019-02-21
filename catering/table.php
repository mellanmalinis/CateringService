<!DOCTYPE html>
<html lang="en">
<head>
	<title>Catering Service</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/cat.jpg);
			color: black;
			width: 100%;
		}
	</style>
</head>
<?php
	if(isset($_SESSION['valid'])) {
			header('Location: view.php');				
		}
?>
<body>
	<nav class="navbar navbar-expand-lg navbar-success bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php"><img src="img/house.jpg" width="30" height="30" alt="img/house.jpg"/><span class="sr-only">(current)</span></a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="img/settings.jpg" width="30" height="30" alt="img/settings.jpg"/>
							</a>
							
						</li>
					</ul>
				</form>
				
			</div>
	</nav>
<br/>
			<center><img src="img/image.jpg"><br><br><br>
					<a href="view.php" class="btn btn-primary btn-lg btn-block">Customer Table</a>
					<a href="product.php" class="btn btn-primary btn-lg btn-block">Product Table</a>
					<a  class="btn btn-primary btn-lg btn-block">Sales Invoice</a>
</div>
</div>
</br>
</body>
</html>
