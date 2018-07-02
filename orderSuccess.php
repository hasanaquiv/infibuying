<?php 
include_once('header_function.php');
include_once('inc/head.php'); 
?>
<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<body class="cnt-home">
		<!-- ============================================== HEADER ============================================== -->
<?php include_once('inc/header.php'); ?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-bd">
	<div class="container">
		<div class="x-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12 x-text text-center">
					<h2>Order Status</h2>
					<p>Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>
					<a href="index"><i class="fa fa-home"></i> Go To Homepage</a>
				</div>
			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
	</div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->
<?php include_once('inc/footer.php'); ?>
