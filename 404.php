<?php
  header("HTTP/1.0 404 Not Found");
?>
<?php 
include_once('header_function.php');
include_once('inc/head.php'); 
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
					<h1>404</h1>
					<p>We are sorry, the page you've requested is not available. </p>
					<form role="form" class="outer-top-vs outer-bottom-xs">
                        <input placeholder="Search" autocomplete="off">
                        <button class="  btn-default le-button">Go</button>
                    </form>
					<a href="home.html"><i class="fa fa-home"></i> Go To Homepage</a>
				</div>
			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
	</div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->
<?php include_once('inc/footer.php'); ?>
