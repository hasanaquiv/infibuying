<?php
	class sellerlog extends database {
			
			 public function seller($seller_name,$seller_password){  
			//echo md5($seller_name_seller_password);
				$p = "SELECT * FROM seller WHERE seller_name = '$seller_name' AND password = '".md5($seller_password)."' ";
         	    $res = $this->mysqli->query($p);  
                $seller_data = $res->fetch_array(MYSQLI_BOTH);
				//print_r($seller_name_data);  exit();
		        $no_rows = $res->num_rows;  
				     
                if ($no_rows == 1)   
                {  
               			$_SESSION['login'] = true;  
						$_SESSION['seller_id'] = $seller_data['seller_id'];
						$_SESSION['seller_name'] = $seller_data['seller_name'];
						return TRUE;  

				}  
                else  
                {  
                    return FALSE;  
                }  
            }
			
			public function sellerDetals(){
				$query = $this->mysqli->query("select * from seller where seller_id='1'");
			}
		}
?>