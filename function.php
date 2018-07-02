<?php
	session_start();  
	function __autoload($class){ 
		include("class/$class.php");
	}
	$data = new data();
	$add = new add();
	$userlog = new userlog();
	$userdetail = new userdetail();
	$products = new products();
	$single = new single();
	$cart = new Cart;
	$sellerlog = new sellerlog();
	$order = new order();
	$url = 'index';
?>

