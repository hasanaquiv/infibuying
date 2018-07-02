<?php
	class adminLogin extends database {
			
			 public function admin($user,$password){  
			//echo md5($user_password);
				$p = "SELECT * FROM admin WHERE user = '$user' AND password = '".md5($password)."' ";
         	    $res = $this->mysqli->query($p);  
                $admin_data = $res->fetch_array(MYSQLI_BOTH);
				//print_r($user_data);  exit();
		        $no_rows = $res->num_rows;  
				     
                if ($no_rows == 1)   
                {  
               			$_SESSION['login'] = true;  
						$_SESSION['admin_id'] = $admin_data['id'];
						$_SESSION['name'] = $admin_data['name'];
						$_SESSION['user'] = $admin_data['user'];
						return TRUE;  

				}  
                else  
                {  
                    return FALSE;  
                }  
            }
		}
?>