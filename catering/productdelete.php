<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include("connection.php");


$product_code = $_GET['product_code'];


$result=mysqli_query($db, "DELETE FROM product WHERE product_code=$product_code");

header("Location:product.php");
?>