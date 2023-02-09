<?php  include ("login/function.php");

if(isset($_SESSION['em']  )){

?>



<?php  include ("function/glasses_creation.php");?>
    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from dreamguys.co.in/demo/doccure/admin/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:55 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Cart</title>

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

        <script src="assets/js/swl.js"></script>

        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- header -->
        <?php  include ("section/header.php");?>
        <!-- header end -->

        <!-- Sidebar -->
        <?php  include ("section/sidebar.php");?>
        <!-- header -->

        <!-- header end -->
        <!-- /Sidebar -->
        <!-- Page Header -->

        <!-- /Page Header -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Glasses Panel</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="page-header">
                    <div class="row" >
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="datatable table table-hover table-center mb-0">
                                            <thead>
                                            <tr>
                                                <th>Product Code</th>
                                                <th>Name</th>
                                                <th>Brand</th>
                                                <th>Price</th>
                                                <th>Type</th>
                                                <th>Gender</th>
                                                <th class="">Actions</th>
                                            </tr>
                                            </thead >

                                            <tbody id="" >
                                              <?php displayglasses(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Appointment Form -->
            </div>
            <!-- Appointment Form -->



            <!-- Appointment display -->

            <!-- Appointment display -->
        </div>
    </div>
    <!-- /Page Wrapper -->
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Datatables JS -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <!-- Custom JS -->
    <script  src="assets/js/script.js"></script>

    <!-- Custom JS book appointment  -->

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
        setTimeout(function(){ window.location.href="login/login.php"; });
    </script>
    <?php
}



?>