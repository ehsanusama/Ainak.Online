<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Appointment Register</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body  style="background: radial-gradient(97.4% 237.07% at 0 50%,#f7e7ff 0,rgba(195,214,255,.67) 65.58%,#e0f0ff 91.96%),#fff;">

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
								<form action="" id="register_form">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Name" id="name" name="name">
									</div>
									<div class="form-group">
										<input class="form-control" type="email" placeholder="Email" id="email" name="email">
									</div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Phone No" id="phone" name="phone">
                                    </div>
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Password" id="password" name="password">
									</div>

									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="button" name="register" id="register">Register</button>
									</div>
								</form>
								<!-- /Form -->
								

								
								<!-- Social Login -->

								<!-- /Social Login -->
								
								<div class="text-center dont-have">Already have an account? <a href="login.php">Login</a>
                                </div>
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
        <script>
            $(document).ready(function(){
                $("#register").click(function(){
                    var name = $("#name").val();
                    var phone = $("#phone").val();
                    var email = $("#email").val();
                    var pass = $("#password").val();


                    if(name == ""  || phone == "" || email=="" || pass=="" ){
                        alert("All fields requried");
                    }else{
                        // $('#response').html($('#submit_form').serialize());
                        $.ajax({
                            url: "includes/functions/register_user.php",
                            type: "POST",
                            data : $('#register_form').serialize(),
                            success: function(data){
                                if(data==1)

                                {
                                    alert("User Registered");
                                        setTimeout(function(){ window.location.href="login.php"; }, 1000);

                                }
                                if(data==3)
                                {
                                    alert("This user already exist");
                                }
                                $('#register_form').trigger("reset");

                            }
                        });
                    }
                });
            });
        </script>
        <!-- Custom JS register  -->
    </body>

</html>