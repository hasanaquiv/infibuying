<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'infi');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$id = 1;
if (!empty($_FILES)) {
 $filename = rand()."_".$_FILES['file']['name'];
 $move = move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$filename);
 if($move){
	 mysqli_query($db,"update products set product_image='$filename' where product_id='$id'");
	 echo '<script>alert("done")</script>';
 } else {
	 echo 'nnot';
 }
}

?>