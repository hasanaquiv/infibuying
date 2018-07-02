<?php include_once('../header_function.php');
	//include("../session.php");
 ?>
<?php 

	$product_name = trim($_POST['product_name']); 
	$brand = trim($_POST['brand']); 
	$category = trim($_POST['category']); 
	$price = trim($_POST['price']);
	$desc = trim($_POST['desc']);
	$seller_id = trim($_POST['seller_id']);
		$file = $_FILES['file'];
		//$image = $file['name'];
		$image = $file['name'];
		$type = $file['type'];
		$size = $file['size'];
		$tmppath = $file['tmp_name']; 
		if($image!="")
		{
			move_uploaded_file ($tmppath, '../upload/'.$image);
			$file = $image;
		}
	$add = $add->addd($product_name,$brand,$category,$price,$desc,$seller_id,$image);
	echo ($add)? 'save' : 'Not register';
	//echo $image;
?>