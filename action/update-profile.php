<?php include_once('../header_function.php');
	include("../session.php");
?>
 
<?php

$address = trim($_POST['address']);
$user_area = trim($_POST['user_area']);
$city = trim($_POST['city']);
$state = trim($_POST['state']);
$pincode = trim($_POST['pincode']);
$query = $userdetail->profileupdate($address,$user_area,$city,$state,$pincode,$user_id);
if($query){echo ('Profile Update');} else { echo ('not');}
?>