<?php
include"conf.php"; 
$brand="";
$brand = isset($_REQUEST['brand'])?$_REQUEST['brand']:"";

	    $query = "select * from products";
		 
		           //filter query start 
					 
					   if(!empty($brand)){
						  $branddata =implode("','",$brand);
						 $query  .= " where product_brands in('$branddata')"; 
					  }
					  
				     $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
					 
					 while($product_data = mysqli_fetch_assoc($rs)){
				  ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="image/<?php echo $product_data['product_image']; ?>" alt="">
                            <div class="caption">
                               
                                <p><strong><a href="#"><?php echo $product_data['product_name']; ?></a>
                                </strong></p>
								 <h4 style="text-align:center;" >$ <?php echo $product_data['product_price']; ?></h4>
                                
                            </div>
                           
                        </div>
                    </div>
					 <?php  } ?>