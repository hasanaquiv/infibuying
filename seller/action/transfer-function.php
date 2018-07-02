<?php include_once('../header_function.php');
	include("../session.php");
 ?>
<?php 

	echo $wallet_coin = trim($_POST['wallet_coin']); 
	echo $coin = trim($_POST['coin']); 
	echo $t_pin = trim($_POST['t_pin']); 
	/*$user = $coin->addCoin($user_id,$wallet_coin,$coin,$t_pin);
	if($user)	{				
		echo "suscessfull transfer";						
	}	else 	{
		echo "something may be wrong";
	}*/
?>