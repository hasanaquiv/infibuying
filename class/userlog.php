<?php
	class userlog extends database {
			
			 public function userLogin($email,$password){  
			//echo md5($user_password);
				$p = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
         	    $res = $this->mysqli->query($p);  
                $user_data = $res->fetch_array(MYSQLI_BOTH);
				//print_r($user_data);  exit();
		        $no_rows = $res->num_rows;  
				     
                if ($no_rows == 1)   
                {  
               			$_SESSION['login'] = true;  
						$_SESSION['id'] = $user_data['id'];
						$_SESSION['name'] = $user_data['name'];
						$_SESSION['email'] = $user_data['email'];
						return TRUE;  

				}  
                else  
                {  
                    return FALSE;  
                }  
            }
		}
?>