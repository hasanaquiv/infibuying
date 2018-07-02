<?php include_once('../header_function.php');
	include("../session.php");
 ?>

<?php
//$user_id = $_SESSION['user_id'];
$old_password = $_POST['old_password'];
$new_password = md5($_POST['new_password']);
//$retype_password = $_POST['retype_password'];
/*$query = $userdetail->profileupdate($user_id)
$query = mysql_query("select user_id,user_password from user where user_id='$user_id'") or die(mysql_error());
$row = mysql_fetch_array($query);
 $password = $row['user_password']; */
 //echo $user_password;
if(md5($old_password)!=$user_password){
	echo ('old password not match');
} else {
	$query = $userdetail->passwordupdate($new_password,$user_id);	
	//$query=mysql_query("update user set user_password='$new_password' where user_id='$user_id'") or die(mysql_error());
	if($query){echo ('Password Update');}
}
?>