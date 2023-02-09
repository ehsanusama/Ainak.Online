<?php

include ("../glasses_admin/login/function.php");

if(isset($_SESSION['em']  )){
include ("function.php");

?>



<!DOCTYPE html>
<html lang="en">
	
<!-- doccure/invoices.html  30 Nov 2019 04:12:14 GMT -->
<head>
		<meta charset="utf-8">
		<title>Cart</title>
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
                        <a href="../shop.php?displayall" class="navbar-brand logo">
                           <i class="fa fa-home" style="font-size: 22px"></i>
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">

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
                                                        <th>Tracking ID</th>
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
			
			<!-- Breadcrumb -->

			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content ml-5">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-7 col-lg-8 col-xl-9">
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
                                                    <th>Tracking Id</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
                                            <?php cartadd(); ?>
                                            <?php cartdisplay(); ?>
											</tbody>
										</table>
									</div>
									<!-- /Invoice Table -->
									
								</div>
							</div>
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

<!-- doccure/invoices.html  30 Nov 2019 04:12:14 GMT -->
</html>
<?php }
else{
    echo "please login first";
    ?>
    <script>
        setTimeout(function(){ window.location.href="../glasses_admin/login/login.php"; });
    </script>
    <?php
}



?>