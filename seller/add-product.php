<!-- head-->
<?php 
include_once('../header_function.php');
include('inc/head.php'); 
include_once('../function/query.php'); 
?>
<link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert.css">
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
          <h3 class="content-header-title mb-0 d-inline-block">Add Product</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Add Product</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="horizontal-form-layouts">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="horz-layout-basic">Project Info</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                    <form class="form form-horizontal" id="add-products" enctype="multipart/form-data">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
						<input type="hidden" name="seller_id" name="seller_id" value="<?php echo $seller_id;  ?>">
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput1">Product Name</label>
                          <div class="col-md-9">
                            <input type="text" id="product_name" class="form-control" placeholder="Product Name"
                            name="product_name">
                          </div>
                        </div>                        
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput6">Brand</label>
                          <div class="col-md-9">
                            <select id="projectinput6" name="brand" class="form-control">
                              <?php 
									$brands = $data->brands();
						while($rows_brands = $brands->fetch_array(MYSQLI_BOTH)){		
						echo '<option value="'.strtolower($rows_brands[1]).'">'.$rows_brands[1].'</option>' ; }?>
                            </select>
                          </div>
                        </div>
						
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput6">Category</label>
                          <div class="col-md-9">
                            <select id="projectinput6" name="category" class="form-control">
							<?php 
									$cate_add = $data->cate_add();
						while($rows_cate_add = $cate_add->fetch_array(MYSQLI_BOTH)){		
						echo '<option value="'.strtolower($rows_cate_add[1]).'">'.$rows_cate_add[1].'</option>' ; }?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput4">Price</label>
                          <div class="col-md-9">
                            <input type="text" id="price" class="form-control" placeholder="price" name="price">
                          </div>
                        </div>
						 <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput9">Product Description</label>
                          <div class="col-md-9">
                            <textarea id="desc" rows="5" class="form-control" name="desc" placeholder="Product Description"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control">Select File</label>
                          <div class="col-md-9">
                            <label id="projectinput8" class="file center-block">
                              <input type="file" id="file" name="file">
                              <span class="file-custom"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary" id="add" name="add">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
	<!-- footer-->
  <?php include('inc/footer.php') ?>
  <!-- BEGIN VENDOR JS-->
  <script src="../app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
 <script src="ajax/ajax.js" type="text/javascript"></script> 
  
