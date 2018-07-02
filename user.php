<?php 
include_once('header_function.php');
include_once('inc/head.php'); 
include_once('function/query.php'); 
include_once('function/var.php');
?>
<body>
		<!-- ============================================== HEADER ============================================== -->
<?php include_once('inc/header.php'); ?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="<?php echo $url; ?>">Home</a></li>
        <li><a class="active" href="search?search=<?php echo $search; ?>"><?php echo ucfirst($name); ?></a></li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 sidebar'> 
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i><?php echo $name; ?></div>
          <nav class="yamm megamenu-horizontal">
				<ul class="nav">
					<li class="dropdown menu-item">
						<a href="user">
						<i class="icon fa 2" aria-hidden="true"></i>Profile</a>
					</li>
					<li class="dropdown menu-item">
						<a href="user-update">
						<i class="icon fa 2" aria-hidden="true"></i>Update</a>
					</li>
					<li class="dropdown menu-item">
						<a href="orders">
						<i class="icon fa 2" aria-hidden="true"></i>Orders</a>
					</li>
				</ul>
			</nav>
		  </div>
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== -->
      </div>
      <!-- /.sidebar -->
      <div class='col-md-9'> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
			<h3 class="section-title">User Profile</h3>
				<div class="form-group">
					<label class="info-title" for="exampleInputEmail1">Name</label>
					<input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="<?php echo $name; ?>" disabled>
				</div>
				<div class="form-group">
					<label class="info-title" for="exampleInputPassword1">Email</label>
					<input type="text" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" value="<?php echo $email; ?>" disabled>
				</div>
				<div class="form-group">
					<label class="info-title" for="exampleInputEmail1">Mobile</label>
					<input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="<?php echo $mobile; ?>" disabled>
				</div>
				<div class="form-group">
					<label class="info-title" for="exampleInputPassword1">Address</label>
					<input type="text" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" value="<?php echo $address.','.$area.','.$city.','.$pincode; ?>" disabled>
				</div>
			</div>
			<!-- /.tab-content -->
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content --> 
<!-- ============================================================= FOOTER ============================================================= -->
<?php include_once('inc/footer.php'); ?>