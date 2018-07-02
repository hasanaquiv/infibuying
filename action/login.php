<?php include_once('../header_function.php');
	//include("../session.php");
 ?>
<?php 

	$seller_name = trim($_POST['seller_name']); 
	$seller_password = trim($_POST['seller_password']);
	$seller = $sellerlog->seller($seller_name,$seller_password);
	echo ($seller)? "ok" : 'Not register';
	//echo $image;
?>