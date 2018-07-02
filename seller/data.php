<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '','infi');
if(isset($_POST['login'])){
    $seller_name = trim($_POST['seller_name']);
    $pass = trim($_POST['seller_password']);
   $p = "SELECT * FROM seller WHERE seller_name = '$seller_name' AND password = '".md5($pass)."' ";
         	    $res = mysqli_query($mysqli,$p);  
                $seller_data = mysqli_fetch_array($res);
				//print_r($seller_name_data);  exit();
		       $no_rows = mysqli_num_rows($res);  
				     
                if ($no_rows == 1)   
                {  
						echo "ok";
						$_SESSION['seller_id'] = $seller_data['seller_id'];
						$_SESSION['seller_name'] = $seller_data['seller_name'];

				}  
                else  
                {  
                    echo "not";  
                }
}
?>