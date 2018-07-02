<?php
session_start();
$seller_id = $_SESSION['seller_id'];
$conn = new mysqli("localhost","root","","infi");

$sql="UPDATE  notification SET status=1 WHERE status=0 and seller_id = '$seller_id'";	
$result=mysqli_query($conn, $sql);

$sql="select * from notification where seller_id = '$seller_id' order by notification_id desc limit 2";
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response . '<li class="scrollable-container media-list w-100">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">'.$row["notification_title"].'</h6>
                        <p class="notification-text font-small-3 text-muted">'.$row["notification_msg"].'</p>
                      </div>
                    </div>
                  </a>
                </li>';
}
if(!empty($response)) {
	print $response;
}


?>