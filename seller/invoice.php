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
          <h3 class="content-header-title mb-0 d-inline-block">Invoice</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Invoice</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
	  <?php 
			$invoice_id = $_GET['order_id'];
			$invoce = $order->invoice($invoice_id);
			$row = $invoce->fetch_array(MYSQLI_BOTH);
	  ?>
      <div class="content-body">
        <section class="card">
          <div id="invoice-template" class="card-body">
            <!-- Invoice Company Details -->
            <div id="invoice-company-details" class="row">
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <div class="media">
                  <img src="../app-assets/images/logo/logo-80x80.png" alt="company logo" class=""
                  />
                  <div class="media-body">
                    <ul class="ml-2 px-0 list-unstyled">
                      <li class="text-bold-800">Modern Creative Studio</li>
                      <li><?php echo $row['seller_name']; ?></li>
                      <li>Melbourne,</li>
                      <li>Florida 32940,</li>
                      <li>USA</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <h2>INVOICE</h2>
                <p class="pb-3"># INV-<?php echo $row['order_id']; ?></p>
                <ul class="px-0 list-unstyled">
                  <li>Balance Due</li>
                  <li class="lead text-bold-800">$ <?php echo $row['total_price']; ?>.00</li>
                </ul>
              </div>
            </div>
            <!--/ Invoice Company Details -->
            <!-- Invoice Customer Details -->
            <div id="invoice-customer-details" class="row pt-2">
              <div class="col-sm-12 text-center text-md-left">
                <p class="text-muted">Bill To</p>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <ul class="px-0 list-unstyled">
                  <li class="text-bold-800"><?php echo $row['name']; ?></li>
                  <li>4879 Westfall Avenue,</li>
                  <li>Albuquerque,</li>
                  <li>New Mexico-87102.</li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <p>
                  <span class="text-muted">Invoice Date :</span> 06/05/2017</p>
                <p>
                  <span class="text-muted">Terms :</span> Due on Receipt</p>
                <p>
                  <span class="text-muted">Due Date :</span> 10/05/2017</p>
              </div>
            </div>
            <!--/ Invoice Customer Details -->
            <!-- Invoice Items Details -->
            <div id="invoice-items-details" class="pt-2">
              <div class="row">
                <div class="table-responsive col-sm-12">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Item & Description</th>
                        <th class="text-right">Rate</th>
                        <th class="text-right">Quantity</th>
                        <th class="text-right">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>
                          <p><?php echo $row['product_brands']; ?></p>
                          <p class="text-muted"><?php echo $row['product_name']; ?></p>
                        </td>
                        <td class="text-right"><?php echo $row['offer_price']; ?></td>
                        <td class="text-right"><?php echo $row['quantity']; ?></td>
                        <td class="text-right"><?php echo $row['total_price']; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 col-sm-12 text-center text-md-left">
                  <p class="lead">Payment Methods:</p>
                  <div class="row">
                    <div class="col-md-8">
                      <table class="table table-borderless table-sm">
                        <tbody>
                          <tr>
                            <td>Bank name:</td>
                            <td class="text-right">ABC Bank, USA</td>
                          </tr>
                          <tr>
                            <td>Acc name:</td>
                            <td class="text-right">Amanda Orton</td>
                          </tr>
                          <tr>
                            <td>IBAN:</td>
                            <td class="text-right">FGS165461646546AA</td>
                          </tr>
                          <tr>
                            <td>SWIFT code:</td>
                            <td class="text-right">BTNPP34</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-sm-12">
                  <p class="lead">Total due</p>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Sub Total</td>
                          <td class="text-right">$ 14,900.00</td>
                        </tr>
                        <tr>
                          <td>TAX (12%)</td>
                          <td class="text-right">$ 1,788.00</td>
                        </tr>
                        <tr>
                          <td class="text-bold-800">Total</td>
                          <td class="text-bold-800 text-right"> $ 16,688.00</td>
                        </tr>
                        <tr>
                          <td>Payment Made</td>
                          <td class="pink text-right">(-) $ 4,688.00</td>
                        </tr>
                        <tr class="bg-grey bg-lighten-4">
                          <td class="text-bold-800">Balance Due</td>
                          <td class="text-bold-800 text-right">$ 12,000.00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="text-center">
                    <p>Authorized person</p>
                    <img src="../app-assets/images/pages/signature-scan.png" alt="signature" class="height-100"
                    />
                    <h6>Amanda Orton</h6>
                    <p class="text-muted">Managing Director</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Invoice Footer -->
            <div id="invoice-footer">
              <div class="row">
                <div class="col-md-7 col-sm-12">
                  <h6>Terms & Condition</h6>
                  <p>You know, being a test pilot isn't always the healthiest business
                    in the world. We predict too much for the next year and yet far
                    too little for the next 10.</p>
                </div>
                <div class="col-md-5 col-sm-12 text-center">
                  <button type="button" class="btn btn-info btn-lg my-1"><i class="la la-paper-plane-o"></i> Send Invoice</button>
                </div>
              </div>
            </div>
            <!--/ Invoice Footer -->
          </div>
        </section>
      </div>
    </div>
  </div>
	<!-- footer-->
  <?php include('inc/footer.php') ?>