<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><?php if(!empty(@$_SESSION['name'])){ echo '<a href="user"><i class="icon fa fa-user"></i>
					'.@$_SESSION['name'].'</a>';
				} else { echo '<a href="login"><i class="icon fa fa-user"></i>
					My Account</a>' ; }?></a></li>
            <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a href="cart"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
					<li><a href="checkout"><i class="icon fa fa-check"></i>Checkout</a></li>
          </ul>
        </div>
        <!-- /.cnt-account -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="index"> <img src="assets/images/logo.png" alt="logo" width="200px"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form action="search" method="get">
			<div class="control-group">
			<input type="search" name="search" class="search-field" placeholder="Search here..." />
			<button class="search-button" type="submit"></button></div>
			</form>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          <div class="dropdown dropdown-cart">
		  <span id="a"></span>
		  <a href="cart" class="lnk-cart">
			
            <div class="items-cart-inner" id="d">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count"><span class="count"><?php echo $cart->total_items(); ?></span></div>
              <div class="total-price-basket">cart</div>
            </div>
            </a>
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <?php include_once('nav.php'); ?>
</header>
