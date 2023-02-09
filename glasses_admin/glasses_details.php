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
    <title>Glasses Detail</title>

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
    <!-- header -->
    <?php  include ("section/sidebar.php");?>
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
                            <li class="breadcrumb-item active">Add Glasses</li>

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
                            <h4 class="card-title">Glasses Information</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Item Name</label>
                                            <input type="text" class="form-control" name="g_name" id="g_name" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="form-control" name="g_price" id="g_price" required>
                                        </div>
                                        <div class="form-group" >
                                            <label>Latest</label>
                                            <select class="select" id="p_gender" name="g_latest" required >
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Featured</label>
                                            <select class="select" id="g_fea" name="g_featured"  required>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Frame Size</label>
                                            <input type="text" class="form-control" name="g_fsize" id="g_fsize" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Frame Color</label>
                                            <input type="text" class="form-control" name="g_color" id="g_pic2" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Frame Shape</label>
                                            <select class="select" id="g_fshape" name="g_fshape"  required>
                                                <option value="Full-Rimmed Frame">Full-Rimmed Frame</option>
                                                <option value="Rimless Frame">Rimless Frame</option>
                                                <option value="Semi-Rimless Frame">Semi-Rimless Frame</option>
                                                <option value=" Low Bridge Frame"> Low Bridge Frame</option>
                                                <option value="Full-Rimmed Frame">Full-Rimmed Frame</option>
                                                <option value=" Wire Frame"> Wire Frame</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Lenses Color</label>
                                            <input type="text" class="form-control" name="g_lcolor" id="g_lcolor" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Video Frame</label>
                                            <select class="select" id="video_frame" name="video_frame"  >
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <select class="select" id="g_brand" name="g_brand"  required>
                                                <option value="ARMANI EXCHANGE">ARMANI EXCHANGE</option>
                                                <option value="ARNETTE">ARNETTE</option>
                                                <option value="BURBERRY">BURBERRY</option>
                                                <option value="COACH">COACH</option>
                                                <option value="DOLCE & GABBANA">DOLCE & GABBANA</option>
                                                <option value="GUCCI">GUCCI</option>
                                                <option value="RAY-BAN">RAY-BAN</option>
                                                <option value=" OAKLEY">OAKLEY</option>
                                                <option value="POLO">POLO</option>
                                                <option value=" PARADA">PARADA</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Product Code</label>
                                            <input type="text" class="form-control" name="g_pcode" id="g_pcode" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="select" id="g_type" name="g_type"  required>
                                                <option value="sunglasses">Sunglasses</option>
                                                <option value="eyeglasses">Eyeglasses</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="select" id="g_gender" name="g_gender"  required>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Image 1</label>
                                            <input type="file" class="form-control" name="g_pic1" id="g_pic1" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Image 2</label>
                                            <input type="file" class="form-control" name="g_pic2" id="g_pic2" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Image 3</label>
                                            <input type="file" class="form-control" name="g_pic3" id="g_pic3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Frame Material</label>
                                            <input type="text" class="form-control" name="g_material" id="g_material" required>
                                        </div>
                                        <div class="form-group">
                                            <label>SKU Number</label>
                                            <input type="text" class="form-control" name="sku_number" id="sku" >
                                        </div>
                                        <div class="form-group">
                                            <label>Product Quantity</label>
                                            <input type="text" class="form-control" name="g_quan"  >
                                        </div>
                                    </div>



                                    </div>
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label for="dec">Description</label>
                                            <textarea name="g_dec" id="dec" rows="5" class="form-control"></textarea>

                                        </div>

                                    </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary" name="add" id="add">Add</button>

                                </div>
                                </div>


                            </form>

                        <?php  create_glasses();?>
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