<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: product.php');
}
?>

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
			background-image: url(img/cat1.jpg);
			color: white;
			width: 100%;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-success bg-danger">
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
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="logout.php">logout</a>
							</div>
						</li>
					</ul>
				</form>
			</div>
	</nav>
<br/>
	<center><div class="container">
		<nav aria-label="breadcrumb" role="navigation">
			<div class="col-sm-5">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="product.php">View Product </a></li>
					<li class="breadcrumb-item active" aria-current="page">Add product</li><center>
				</ol>
			</div>
		</nav>
	</div>
<br/>
<?php

include_once("connection.php");

if(isset($_POST['Submit'])) {
	$product_code = $_POST['product_code'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$unit = $_POST['unit'];
	$loginId = $_SESSION['id'];
	
		
	$result = mysqli_query($db, "INSERT INTO product(product_code, description, price, unit, login_id) VALUES('$product_code', '$description', '$price', '$unit', '$loginId')");
		header('location: product.php');
	} 
?>
<div class="container">
	<form action="productadd.php" method="post" name="form1">
		<center><div class="form-group center">
			<label for="colFormLabel" class="col-sm-2 col-form-label">product_code</label>
				<div class="col-sm-5">
					<input type="number" name="product_code" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<center><div class="form-group center">
			<label for="colFormLabel" class="col-sm-2 col-form-label">description</label>
				<div class="col-sm-5">
					<input type="text" name="description" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group center">
			<label for="colFormLabel" class="col-sm-2 col-form-label">price</label>
				<div class="col-sm-5">
					<input type="number" name="price" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group center">
			<label for="colFormLabel" class="col-sm-2 col-form-label">unit</label>
				<div class="col-sm-5">
					<input type="number" name="unit" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group center">
			<label for="colFormLabel" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<button class="btn btn-outline-warning" type="submit" name="Submit" value="product">Product Table View</button>
				</div>
		</div>
	</form>
</div>
</br>
</body>
</html>
