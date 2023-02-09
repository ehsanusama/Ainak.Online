<?php  include ("includes/functions/login.php");

if(isset($_SESSION['id']  )){


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Book Appointment</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feathericon.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/css/select2.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- header -->
    <?php  include ("includes/section/header.php");?>
    <!-- header end -->

    <!-- Sidebar -->
    <!-- header -->
    <?php  include ("includes/section/sidebar.php");?>
    <!-- header end -->
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Book Appointment</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Book Appointment</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->


            <!-- Appointment Form -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Personal Information</h4>
                        </div>
                        <div class="card-body">
                            <form id="submit_form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="p_name" id="p_name" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Phone#<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="p_phone" id="p_phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="p_lname" id="p_lname" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="p_email" id="p_email" required>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="select" id="p_gender" name="p_gender" >
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title">Select Doctor</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Doctors</label>
                                            <select class="select" id="p_doctor" name="p_doctor">
                                                <option value="1">Dr-Asif Raza</option>
                                                <option value="2">Dr-Sadaf Nasir</option>
                                                <option value="3">Dr-Afaan Qasir</option>
                                                <option value="4">Dr-Ijaz Hassan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Appointment Date<span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="p_adate" name="p_adate" required>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" id="p_city" name="p_city" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Appointment Time<span class="text-danger">*</span></label>
                                            <input type="time" class="form-control" id="p_atime" name="p_atime" required>
                                        </div>
                                        <div class="form-group" style="display: none">
                                            <label>User Id</label>
                                            <input type="text" class="form-control" id="uid" name="u_id" value="<?php echo $_SESSION['id']; ?>">
                                        </div>
                                    </div>
                                </div>


                                <div class="text-right">
                                    <button type="button" class="btn btn-primary" name="submit" id="submit">Submit</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Appointment Form -->

            <!-- Appointment display -->

            <!-- Appointment display -->
        </div>
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Slimscroll JS -->
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Select2 JS -->
<script src="assets/js/select2.min.js"></script>

<!-- Custom JS -->
<script  src="assets/js/script.js"></script>
<script src="includes/custom_js_functions/display_appointment.js" type="text/javascript"></script>
<script language="javascript">
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;
    $('#p_adate').attr('min',today);
</script>
<!-- Custom JS book appointment  -->
<script>
    $(document).ready(function(){
        $("#submit").click(function(){
            var name = $("#p_name").val();
            var lname = $("#p_lname").val();
            var phone = $("#p_phone").val();
            var email = $("#p_email").val();
            var gender = $("#p_gender").val();
            var pdoctor = $("#p_doctor").val();
            var city = $("#p_city").val();
            var padate = $("#p_adate").val();
            var patime = $("#p_atime").val();
            var uid    = $("#uid").val();

            if(name == "" || lname == "" || phone == "" || email=="" || gender=="" || pdoctor=="" || city=="" || padate=="" || patime==""){
                alert("All fields requried");
            }else{
                // $('#response').html($('#submit_form').serialize());
                $.ajax({
                    url: "includes/functions/book_appointment.php",
                    type: "POST",
                    data : $('#submit_form').serialize(),
                    success: function(data){
                        if(data==1)

                        {
                            alert("Appointment Booked Wait for Approval");
                            setTimeout(function(){ window.location.href="book-appoinment.php"; }, 1000);
                        }
                        $('#submit_form').trigger("reset");

                    }
                });
            }
        });
    });
</script>
<!-- Custom JS book appointment  -->

<!-- Custom JS show appointment  -->





<!-- Custom JS show appointment  -->
















</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:55 GMT -->
</html>
<?php }
else{
    echo "please login first";

?>
    <script>
        setTimeout(function(){ window.location.href="login.php"; });
    </script>
<?php

}
?>