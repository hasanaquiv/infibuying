<?php include_once('../header_function.php');
	//include("../session.php");
 ?>
<?php 

	$user_name = trim($_POST['user_name']); 
	$user_mobile = trim($_POST['user_mobile']); 
	$user_email = trim($_POST['user_email']); 
	$password = trim($_POST['user_password']);
	$user_password = md5($password);
	$user_enc = md5($user_mobile);
	$user_wallet_address = md5($user_mobile);
	$user_sponsor = trim($_POST['user_sponsor']);
	$user_position = trim($_POST['user_position']);
	$verification_check = $registration->verification($user_sponsor);
	$no_verification = $verification_check->num_rows;
	$mobile_check = $registration->mobile($user_mobile);
	$no_mobile = $mobile_check->num_rows;
	$left_check = $registration->left($user_sponsor,$user_position);
	$no_left = $left_check->num_rows;
	$right_check = $registration->right($user_sponsor,$user_position);
	$no_right = $right_check->num_rows;
	if ($no_verification != 1){
		echo "this Sponsor Is not available";
	} else if ($no_mobile == 1){
		echo "Mobile Number Already Register";
	} else {
	$user = $registration->register($user_name,$user_mobile,$user_email,$user_password,$user_enc,$user_wallet_address,$user_sponsor,$user_position);
	echo ($user)? 'successful register check your mail for userid' : 'Not register';
	}
?>