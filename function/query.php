<?php

@$p_idr = $_GET['p_id'];
@$p_idn = ucwords(str_replace('_', ' ', $p_idr));
$qsingle = $single->single_product($p_idn);

@$cat = $_GET['cat'];
@$brand = $_GET['brand'];
@$search = $_GET['search'];
@$id =  base64_decode(base64_decode(base64_decode(base64_decode($_GET['id']))));
$rsingle = $qsingle->fetch_array(MYSQLI_BOTH);

@$query_product = $single->product($id);
$rows_product = $query_product->fetch_array(MYSQLI_BOTH);

@$id = $_SESSION['id']; 

@$query_userDetails = $userdetail->userdetails($id);
$rows_userDetails = $query_userDetails->fetch_array(MYSQLI_BOTH);


@$seller_id = $_SESSION['seller_id'];



?>