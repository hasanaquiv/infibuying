<!-- head-->
<?php 
include_once('../header_function.php');
include('inc/head.php'); 
include_once('../function/query.php'); 
?>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
   <!-- nav-->
  <?php include('inc/nav.php') ?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
   <!-- nav-->
  <?php include('inc/sidebar.php') ?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">View Products</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">View Products</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
	  <?php $counts = $data->counts($search);
			$count = $counts->num_rows;
			$limit = 5;
			@$page = $_REQUEST['p'];
			$page = $page-1;
			$p = $page * $limit;
			if(empty($_REQUEST['p'])){
	echo '<script>window.location = "complete-orders?p=1&search=";
 </script>';
}
	  ?>
      <div class="content-body">
        <!-- Both borders end-->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-content">
                <div class="table-responsive">
					<form action="" method="get">
					<div class="input-group">
					  <input type="hidden" name="p" value="1">
                      <input type="search" class="form-control" name="search" placeholder="Product Name Search">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit"><i class="la la-search"></i></button>
                      </div>
                    </div>
					</form>
                  <table class="table table-bordered mb-0">
                    <thead>
                      <tr>
                        <th>Product Name</th>
                        <th>Brand</th>
                        <th>Stock</th>
                        <th>Action</th>
                        <th>Inventory</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                        <?php
						$brands = $data->product($search,$p,$limit);						
						while($rows_brands = $brands->fetch_array(MYSQLI_BOTH)){		
						echo '          <tr> 
						<td>'.$rows_brands[3].'</td> 
						<td>'.$rows_brands[2].'</td> 
						<td>'.$rows_brands[9].'</td> 
						<td><a href="javascript:delete_data('.$rows_brands[0].')"><i class="la la-remove"></i></a></td> 
						<td><a href="#myModal'.$rows_brands[0].'" data-id="1" data-toggle="modal" data-target="#myModal'.$rows_brands[0].'"><i class="la la-edit fa-2x"></i></a></td> 
						
						</tr>
						<div id="myModal'.$rows_brands[0].'" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  <h4 class="modal-title">Inventory Manage</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>        
      </div>
      <div class="modal-body">
        <form id="update-form">
			<input type="hidden" id="id" name="id" value="'.$rows_brands[0].'">
            <div class="row">			                                    
                <div class="form-group col-md-3">
                    <label>In Stock</label>
                </div>
                <div class="form-group col-md-9">
                    <input id="availability" name="availability" type="text" placeholder="Enter Stock Item" value="'.$rows_brands['availability'].'" class="form-control input-md" required>
                </div>
				<div class="form-group col-md-3">
                    <label>Sale Price</label>
                </div>
                <div class="form-group col-md-9">
                    <input id="offer_price" name="offer_price" type="text" placeholder="Enter Sale Price" value="'.$rows_brands['offer_price'].'" class="form-control input-md" required>
                </div>
				<div class="form-group col-md-3">
                    <label>Product Tag</label>
                </div>
                <div class="form-group col-md-9">
                    <input id="product_tag" name="product_tag" type="text" placeholder="Enter Product Tag Like Sale, Hot, New" value="'.$rows_brands['product_tag'].'" class="form-control input-md" required>
                </div>				
                <div class="form-group col-md-12">
                    <button type="submit" id="save" class="btn btn-primary btn-lg btn-block">Save</button>
                </div>
			</div>
        </form>
      </div>
    </div>

  </div>
</div>
						' ; 					
						}?>
                     
                    </tbody>
                  </table>
				  <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
					<?php 
                     echo ' <li class="page-item"><a class="page-link" href="complete-orders?p=1&search='.$search.'">First</a></li>';
                      if($_REQUEST['p']>1){$prev_page = $_REQUEST['p']-1;
						echo '<li class="page-item"><a class="page-link" href="complete-orders?p='.$prev_page.'&search='.$search.'">Prev</a></li>';} else {echo '<li class="page-item"><a class="page-link" href="#">Prev</a></li>';}
						$link = $count/$limit;
						$link = ceil($link);
						$check = $p + $limit;
						$_REQUEST['p']+'3'."<br>";
						
						($link>6) ? $l=6 : $l=$link;
						
						($_REQUEST['p']+3>=$link)?$p=$link : $p = $l+$_REQUEST['p']-3;
						if($check>15){
							for($a=$_REQUEST['p']-2 ; $a<=$p; $a++){
							echo ($a==$_REQUEST['p']) ? '<li class="page-item active"><a class="page-link" href="#">'.$a.'</a></li>' : '<li class="page-item"><a class="page-link" href="complete-orders?p='.$a.'&search='.$search.'">&nbsp;'.$a.'</a></li>';
						} }  else {
							for($a=1 ; $a<=$l; $a++){
							echo ($a==$_REQUEST['p']) ? '<li class="page-item active"><a class="page-link" href="#">'.$a.'</a></li>' : '<li class="page-item"><a class="page-link" href="complete-orders?p='.$a.'&search='.$search.'">&nbsp;'.$a.'</a></li>';
						}
						}
						if($count > $check){
						$next_page = $_REQUEST['p']+1;
						echo '<li class="page-item"><a class="page-link" href="complete-orders?p='.$next_page.'&search='.$search.'">Next</a></li>';} else {echo '<li class="page-item"><a class="page-link" href="#">Next</a></li>';}
					  echo ' <li class="page-item"><a class="page-link" href="complete-orders?p='.$link.'&search='.$search.'">Last</a></li>';
                     
					  ?>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Both borders end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
	<!-- footer-->
  <?php include('inc/footer.php') ?>
  <!-- BEGIN VENDOR JS-->