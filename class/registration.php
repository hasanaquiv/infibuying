<?php
	class registration extends database {
			
			public function registration($name,$email,$password,$mobile){  
				$query = $this->mysqli->query("insert into user(name,email,password,mobile) values('$name','$email','$password','$mobile')");
				return $query;			
		    }
			
			public function  email($email){  
		   		$query = $this->mysqli->query("select * from user where email='$email'");
				return $query;
			}
		}

?>