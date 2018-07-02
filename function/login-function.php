<?php 

	if(isset($_POST['login']))
	{
		echo $email = $_POST['email']; 
		echo $password = $_POST['password'];
		
		if(empty($email) || empty($password))
		{
			echo "<script>alert('Please enter Usermobile or Password');</script>";
		}
		else
		{
			$user = $userlog->userLogin($email,$password);
			if($user) {				
				header("location: checkout");						
			}
			else {
				echo "<script>alert('Usermobile or Password may be wrong');</script>";
			}
		}
	}

?>