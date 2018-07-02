<?php include ("conf.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product filter in php</title>

    <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

  

    <!-- Page Content -->
    <div class="container" style="padding-top:2%;" >

        <div class="row">
            <div class="col-md-3">
                <p class="lead">Product filter</p>
				
               
				<div class="list-group">
				<h3>Brand</h3>
				<?php 
					$query = "select * from brands";  
					$rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
					while($brand_data = mysqli_fetch_assoc($rs)){
				 
				?>
                    <a href="javascript:void(0);" class="list-group-item"> 
					<input type="checkbox" class="item_filter brand" value="<?php echo $brand_data['brands_name']; ?>" >
					&nbsp;&nbsp; <?php echo $brand_data['brands_name']; ?></a>
				<?php } ?>	
                </div>
				
				
				
            </div>

            <div class="col-md-9">

                
                <div class="row product-data"  >
                  
				  <?php 
				    $query = "select * from products"; 
                      
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
                    
                    
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
    <!-- /.container -->

    <!-- jQuery -->
	<script>
	var colour,brand,size;
	$(function(){
		$('.item_filter').click(function(){		
			 brand  = multiple_values('brand');
			
            $.ajax({
				url:"ajax.php",
				type:'post',
				data:{brand:brand},
				success:function(result){
					$('.product-data').html(result);
				}
			});
		});
		
	});
	
	
	function multiple_values(inputclass){
		var val = new Array();
		$("."+inputclass+":checked").each(function() {
		    val.push($(this).val());
		});
		return val;
	}
</script>
	
	
    <!-- Bootstrap Core JavaScript -->

</body>

</html>
