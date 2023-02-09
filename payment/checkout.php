<?php

include ("../glasses_admin/login/function.php");

if(isset($_SESSION['em']  )){
include ("function.php");

?>


<!DOCTYPE html>
<html lang="en">
	
<!-- doccure/checkout.html  30 Nov 2019 04:12:16 GMT -->
<head>
		<meta charset="utf-8">
		<title>Checkout</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
            <!-- Header -->
            <header class="header">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
                        </a>


                            <a href="../shop.php" class="navbar-brand logo">
                                <i class="fa fa-home" style="font-size: 22px"></i>
                            </a>

                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="../index.php" class="menu-logo">
                                <img src="" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">
                            <li class="login-link">
                                <a href="checkout.php">Checkout</a>
                            </li>
                            <li class="login-link">
                                <a href="cart.php">Cart</a>
                            </li>
                            <li class="login-link">
                                <a href="?logout">Logout</a>
                            </li>
                        </ul>
                    </div>
<!--------------------cart------------------->
                    <ul class="nav header-navbar-rht">
                        <li class="nav-item dropdown has-arrow logged-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <i class="fa fa-shopping-cart" style="font-size: 22px" ></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-item ">
                                            <div class="card card-table">
                                                <div class="card-body">

                                                    <!-- Invoice Table -->
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-center mb-0">
                                                            <thead>
                                                            <tr>
                                                                <th>Invoice No</th>
                                                                <th>Product Code</th>
                                                                <th>Name</th>
                                                                <th>Oder Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php cartdisplay(); ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /Invoice Table -->

                                                </div>
                                            </div>
                                    </div>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-login" href="?logout">Logout</a>
                            <?php logout(); ?>
                        </li>
                    </ul>
   <!--------------------cart------------------->
                </nav>
            </header>
            <!-- /Header -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<div class="row">
						<div class="col-md-7 col-lg-8">
							<div class="card">
								<div class="card-body">
								
									<!-- Checkout Form -->
									<form action="#" method="post" enctype="multipart/form-data">
									
										<!-- Personal Information -->
										<div class="info-widget">
											<h4 class="card-title">Personal Information</h4>
											<div class="row">
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>First Name</label>
														<input class="form-control" type="text" name="o_fname">
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Last Name</label>
														<input class="form-control" type="text" name="o_lname">
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Email</label>
														<input class="form-control" type="email" name="o_email">
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Phone</label>
														<input class="form-control" type="text" name="o_phone">
													</div>
												</div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group card-label">
                                                        <label>City</label>
                                                        <input class="form-control" type="text" name="o_city">
                                                    </div>
                                                </div>
											</div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group card-label">
                                                        <label for="ade">Address</label>
                                                        <textarea class="form-control" name="o_adress" id="ade" cols="" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="exist-customer">Existing Customer? <a href="../glasses_admin/login/login.php">Click here to login</a></div>

                                        </div>
										<!-- /Personal Information -->
										
										<div class="payment-widget">
											<h4 class="card-title">Product Details</h4>
											
											<!-- Credit Card Payment -->
											<div class="payment-list">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group card-label">
															<label for="card_name">Glasses Code</label>
															<input class="form-control" id="card_name" type="text" name="product_code">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group card-label">
															<label for="card_number">Quantity</label>
															<input class="form-control" id="card_number" placeholder="" type="number" name="o_quantity">
														</div>
													</div>

												</div>
											</div>
											<!-- /Credit Card Payment -->
											
											<!-- Paypal Payment -->

											<!-- /Paypal Payment -->
											
											<!-- Terms Accept -->
											<div class="terms-accept">
												<div class="custom-checkbox">
												   <p></p>
												</div>
											</div>
											<!-- /Terms Accept -->
											
											<!-- Submit Section -->
											<div class="submit-section mt-4">
												<button type="submit" class="btn btn-primary submit-btn" name="checkout">Confirm and Pay</button>
											</div>
											<!-- /Submit Section -->
											
										</div>
									</form>

                                    <?php

                                    checkout($_SESSION['id']);      ?>
									<!-- /Checkout Form -->
									
								</div>
							</div>
							
						</div>
						
						<div class="col-md-5 col-lg-4 theiaStickySidebar">
						
							<!-- Booking Summary -->
							<div class="card booking-card">
								<div class="card-header">
									<h4 class="card-title">Booking Summary</h4>
								</div>
								<div class="card-body">
								
									<!-- Booking Doctor Info -->

									<!-- Booking Doctor Info -->

                                    <?php

                                    displayproductsummary();
                                    ?>

								</div>
							</div>
							<!-- /Booking Summary -->
							
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->

		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/checkout.html  30 Nov 2019 04:12:16 GMT -->
</html>
<?php }
else{

    ?>
    <script>
        setTimeout(function(){ window.location.href="../glasses_admin/login/login.php"; });
    </script>
    <?php
}



?>