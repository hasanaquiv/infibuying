<?php
	class products extends database{
	
		public function  new_products(){  
			$query = $this->mysqli->query("select * from products where product_type='new_products' limit 6");
			while($rows = $query->fetch_array(MYSQLI_BOTH)){ 
			echo ' 
			<div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="product?p_id='.strtolower(str_replace(' ', '_', $rows['product_name'])).'"><img  src="upload/'.$rows['product_image'].'" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>'.$rows['product_tag'].'</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="product?p_id='.strtolower(str_replace(' ', '_', $rows['product_name'])).'">'.$rows['product_name'].'</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> ₹'.$rows['offer_price'].' </span> <span class="price-before-discount">₹'.$rows['product_price'].'</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <form id="form-cart">
							<input type="hidden" id="p_id" name="p_id" value="'.$rows[0].'">
                          <button class="btn btn-primary icon" id="cart" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                         </form>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="product?p_id='.$rows[0].'" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="product?p_id='.$rows[0].'" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
			
			' ; }
			return true;
		}
		
		public function  featured_products(){  
			$query = $this->mysqli->query("select * from products where product_type='featured_products' limit 6");
			while($rows = $query->fetch_array(MYSQLI_BOTH)){ 
			echo ' 
			<div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="product?p_id='.strtolower(str_replace(' ', '_', $rows['product_name'])).'"><img  src="upload/'.$rows['product_image'].'" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>'.$rows['product_tag'].'</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="product?p_id='.strtolower(str_replace(' ', '_', $rows['product_name'])).'">'.$rows['product_name'].'</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> ₹'.$rows['offer_price'].' </span> <span class="price-before-discount">₹'.$rows['product_price'].'</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <form id="form-cart">
							<input type="hidden" id="p_id" name="p_id" value="'.$rows[0].'">
                          <button class="btn btn-primary icon" id="cart" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                         </form>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="product?p_id='.$rows[0].'" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="product?p_id='.$rows[0].'" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
			
			' ; }
			return true;
		}
		
		public function  new_arrivals(){  
			$query = $this->mysqli->query("select * from products where product_type='new_arrivals' limit 6");
			while($rows = $query->fetch_array(MYSQLI_BOTH)){ 
			echo ' 
			<div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="product?p_id='.strtolower(str_replace(' ', '_', $rows['product_name'])).'"><img  src="upload/'.$rows['product_image'].'" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>'.$rows['product_tag'].'</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="product?p_id='.strtolower(str_replace(' ', '_', $rows['product_name'])).'">'.$rows['product_name'].'</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> ₹'.$rows['offer_price'].' </span> <span class="price-before-discount">₹'.$rows['product_price'].'</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <form id="form-cart">
							<input type="hidden" id="p_id" name="p_id" value="'.$rows[0].'">
                          <button class="btn btn-primary icon" id="cart" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                         </form>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="product?p_id='.$rows[0].'" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="product?p_id='.$rows[0].'" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
			
			
			' ; }
			return true;
		}
		
		public function  related_products(){  
			$query = $this->mysqli->query("select * from products where product_type='new_arrivals' limit 6");
			while($rows = $query->fetch_array(MYSQLI_BOTH)){ 
			echo ' 
			<div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="product?p_id='.strtolower(str_replace(' ', '_', $rows['product_name'])).'"><img  src="upload/'.$rows['product_image'].'" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>'.$rows['product_tag'].'</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="product?p_id='.strtolower(str_replace(' ', '_', $rows['product_name'])).'">'.$rows['product_name'].'</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> ₹'.$rows['offer_price'].' </span> <span class="price-before-discount">₹'.$rows['product_price'].'</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <form id="form-cart">
							<input type="hidden" id="p_id" name="p_id" value="'.$rows[0].'">
                          <button class="btn btn-primary icon" id="cart" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                         </form>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="product?p_id='.$rows[0].'" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="product?p_id='.$rows[0].'" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
			
			
			' ; }
			return true;
		}
	}
?>