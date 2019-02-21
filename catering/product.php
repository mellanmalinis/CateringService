<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: productadd.php');
}
?>

<?php	
include_once("connection.php");

$result = mysqli_query($db, "SELECT * FROM product WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

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
			background-image: url(img/cat1.jpg);
			color: white;
			width: 100%;
		}
	</style>
</head>
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
					<li class="breadcrumb-item active" aria-current="page">Product Table</li></center>
				</ol>
			</div>
		</nav>
	</div>
<br/><br/>
	<div class="container">
		<table class="table">
			<tr bgcolor='brown'>
			<td>product_code</td>
			<td>description</td>
			<td>price</td>
			<td>unit</td>
			
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['product_code']."</td>";
			echo "<td>".$res['description']."</td>";
			echo "<td>".$res['price']."</td>";
			echo "<td>".$res['unit']."</td>";
			echo "<td><a href=\"productedit.php?product_code=$res[product_code]\">Edit</a> | <a href=\"productdelete.php?product_code=$res[product_code]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
  <body>
</table>
<br/>
<a class="btn btn-sm btn-danger" href="productadd.php">product add</a>
</div>
</body>
</html>