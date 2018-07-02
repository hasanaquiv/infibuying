<?php
	class database {  
		 public $mysqli;
                
            function __construct() {  
                  
				  
                // connecting to database  
                date_default_timezone_set("Asia/kolkata");
				/*define("DB_HOST", 'localhost');  
				define("DB_USER", 'root');  
				define("DB_PASSWORD", '');  
				define("DB_DATABSE", 'infi'); */ 
				$this->mysqli = new mysqli('localhost', 'root', '','infi');                     
            }  
            // destructor  
            function __destruct() {  
                  
            }
		}
?>