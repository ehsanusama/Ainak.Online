<?php include ("function.php");             ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title> Register</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

            <script src="assets/js/swl.js"></script>

		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">

                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<!-- Form -->
								<form  method="post" enctype="multipart/form-data">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="First Name" id="name" name="fname">
									</div>

                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Last Name" id="lname" name="lname">
                                    </div>
									<div class="form-group">
										<input class="form-control" type="email" placeholder="Email" id="email" name="email">
									</div>
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input class="form-control" type="file" placeholder="Image" id="" name="gu_pic">
                                    </div>
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Password" id="password" name="password">
									</div>

									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="submit" name="register" id="register">Register</button>
									</div>
								</form>

                                <?php  signup_user();?>
								<!-- /Form -->
								

								
								<!-- Social Login -->

								<!-- /Social Login -->
								
								<div class="text-center dont-have">Already have an account? <a href="login.php">Login</a></div>
                                <div class="text-center dont-have"> <a href="../../index.php"><i class="fa fa-arrow-left"></i>Return To Home</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
        <!-- Custom JS register  -->
        <!-- Custom JS register  -->
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
</html>