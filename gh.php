<?php include ("dbConfig.php"); ?>
<?php 
include_once('header_function.php');
include_once('inc/head.php'); 
include_once('function/query.php'); 
?>
 <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
 
   <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<body>
		<!-- ============================================== HEADER ============================================== -->
<?php include_once('inc/header.php'); ?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="<?php echo $url; ?>">Home</a></li>
        <li><a class="active" href="search?search=<?php echo $search; ?>"><?php echo ucfirst($search); ?></a></li>
        <li><a class="active" href="search?cat=<?php echo $cat; ?>"><?php echo ucfirst($cat); ?></a></li>
        <li><a class="active" href="search?brand=<?php echo $brand; ?>"><?php echo ucfirst($brand); ?></a></li>
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
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <?php $data->categories(); ?>
		  </div>
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== -->
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <!-- ============================================== PRICE SILDER============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <div class="widget-header">
                <h4 class="widget-title">Price</h4>
              </div>
              <div class="sidebar-widget-body m-t-10">
                <ul class="list">		
                   <li class="dropdown"> <a href="javascript:void(0);"> <input type="checkbox" class="item_filter brand" value="500" >&nbsp;&nbsp; 100 and Below</a></li>
                   <li class="dropdown"> <a href="javascript:void(0);"> <input type="checkbox" class="item_filter brand" value="500" >&nbsp;&nbsp; 200 and 300</a></li>
                   <li class="dropdown"> <a href="javascript:void(0);"> <input type="checkbox" class="item_filter brand" value="500" >&nbsp;&nbsp; 300 and 500</a></li>
                   <li class="dropdown"> <a href="javascript:void(0);"> <input type="checkbox" class="item_filter brand" value="500" >&nbsp;&nbsp; 500 and 1000</a></li>
                   <li class="dropdown"> <a href="javascript:void(0);"> <input type="checkbox" class="item_filter brand" value="500" >&nbsp;&nbsp; 1000 and 2000</a></li>
                   <li class="dropdown"> <a href="javascript:void(0);"> <input type="checkbox" class="item_filter brand" value="500" >&nbsp;&nbsp; 2000 and Above</a></li>
                </ul>
                </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== PRICE SILDER : END ============================================== --> 
            <!-- ============================================== MANUFACTURES============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <div class="widget-header">
                <h4 class="widget-title">Brands</h4>
              </div>
              <div class="sidebar-widget-body">
                <ul class="list">
                  <?php 
			  $brands = $data->brands();
while($rows_brands = $brands->fetch_array(MYSQLI_BOTH)){?>		
           <li class="dropdown"> <a href="javascript:void(0);"> 
					<input type="checkbox" class="item_filter brand" value="<?php echo $rows_brands['brands_name']; ?>" >
					&nbsp;&nbsp; <?php echo $rows_brands['brands_name']; ?></a></li>
<?php 		   }?>
                </ul>
                <!--<a href="#" class="lnk btn btn-primary">Show Now</a>--> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== MANUFACTURES: END ============================================== --> 
            <!-- ============================================== COMPARE============================================== -->
            <div class="sidebar-widget wow fadeInUp outer-top-vs">
              <h3 class="section-title">Compare products</h3>
              <div class="sidebar-widget-body">
                <div class="compare-report">
                  <p>You have no <span>item(s)</span> to compare</p>
                </div>
                <!-- /.compare-report --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== COMPARE: END ============================================== --> 
       
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class='col-md-9'> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">position</a></li>
                        <li role="presentation"><a href="#">Price:Lowest first</a></li>
                        <li role="presentation"><a href="#">Price:HIghest first</a></li>
                        <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">1</a></li>
                        <li role="presentation"><a href="#">2</a></li>
                        <li role="presentation"><a href="#">3</a></li>
                        <li role="presentation"><a href="#">4</a></li>
                        <li role="presentation"><a href="#">5</a></li>
                        <li role="presentation"><a href="#">6</a></li>
                        <li role="presentation"><a href="#">7</a></li>
                        <li role="presentation"><a href="#">8</a></li>
                        <li role="presentation"><a href="#">9</a></li>
                        <li role="presentation"><a href="#">10</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row product-data"  >
                  
				  <?php 
				    $query = "select * from products"; 
                      
				     $rs = mysqli_query($db,$query) or die("Error : ".mysqli_error());
					 
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
            <!-- /.tab-pane --> 
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
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