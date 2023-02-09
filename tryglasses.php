<?php include ("glasses_admin/login/function.php");

if(isset($_SESSION['em']  )){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Try Glasses</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
<?php include ("includes/sections/header.php");        ?>

<!-- End Header -->
  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Try Glasses</h2>
          <ol>
            <li><a href="#">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li>Try Glasses</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Details Section ======= -->
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
          <div class="container">

              <div class="row gy-4">

                  <div class="col-lg-3 col-md-6 portfolio-wrap " style="margin: 0 auto" >
                      <?php
                      include ("glasses_try/function/function.php");
                      tryglasses();

                      ?>
                  </div>

                  <div class="col-lg-4">
                      <div class="portfolio-info">
                          <form id="submit_form" >
                              <div class="row">
                                  <div class="col">
                                      <input type="number" class="form-control" placeholder="Adjust Width"  id="width">
                                  </div>
                                  <div class="col">
                                      <button class="form-control btn btn-primary" id="set-width">Adjust</button>
                                  </div>
                              </div>
                              <br>
                              <div class="row">
                                  <div class="col">
                                      <input type="number" class="form-control" placeholder="Adjust Height" id="height">
                                  </div>
                                  <div class="col">
                                      <button class="form-control btn btn-primary" id="set-height">Adjust</button>
                                  </div>
                              </div>
                              <br>
                              <div class="row">
                                  <div class="col">
                                      <input type="number" class="form-control" placeholder="Margin Top" id="mtop">
                                  </div>
                                  <div class="col">
                                      <button class="form-control btn btn-primary" id="set-mtop">Adjust</button>
                                  </div>
                              </div>

                              <br>
                              <div class="row">
                                  <div class="col">
                                      <input type="number" class="form-control" placeholder="Margin Left" id="mleft">
                                  </div>
                                  <div class="col">
                                      <button class="form-control btn btn-primary" id="set-mleft">Adjust</button>
                                  </div>
                              </div>
                              <br>

                          </form>
                          <form action="" method="post" enctype="multipart/form-data">
                          <div class="row">
                              <div class="col">
                                  <input type="file" class="form-control" placeholder="Upload New image" name="imgnew">
                              </div>
                              <div class="col">
                                  <button class="form-control btn btn-primary" name="upload">Upload</button>
                              </div>

                          </div>
                          </form>
                          <div class="row">

                              <div class="col mt-5">
                                  <a href="?delete=<?php  echo $_SESSION['id'] ;?>" class="form-control btn btn-primary" name="">Delete Image</a>
                              </div>

                          </div>

                          <?php
                          del_img();

                          ?>


                          <?php
                          $id = $_SESSION['id'];
                          echo $id;
                          if(isset($_REQUEST['upload'])){
                              $id = $_SESSION['id'];
                              //file uploading code below
                          $file = $_FILES['imgnew']['name'];
                          $folder="glasses_admin/login/user_images/";
                          $path=$folder.$file;
                          if (move_uploaded_file($_FILES['imgnew']['tmp_name'] ,$path)) {
                              $q = "INSERT INTO glasses_user (gu_pic,img_id)
                                    VALUES('$file','$id')";
                              include ("connection/conection.php");
                              $q_run= mysqli_query($conn,$q);
                              $error= mysqli_error($conn);
                              if($q_run) {
                                  echo "image upload";
                                  ?>
                                  <script>
                                      setTimeout(function(){ window.location.href="tryglasses.php?try=<?php echo $refresh; ?>" });
                                  </script>
                                  <?php
                              }
                          }}







                          ?>


                      </div>

                  </div>

              </div>

          </div>
      </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

<!-- ======= Footer ======= -->


  <!-- Template Main JS File -->
  <script src="glasses_try/assets/js/main.js"></script>

<script src="glasses_try/assets/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="glasses_try/assets/js/popper.min.js"></script>
<script src="glasses_try/assets/js/bootstrap.min.js"></script>

<!-- Slimscroll JS -->
<script src="glasses_try/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Select2 JS -->
<script src="glasses_try/assets/js/select2.min.js"></script>

<!-- Custom JS -->
<script  src="glasses_try/assets/js/script.js"></script>
<script>
    $(document).ready(function(){
        $("#set-width").click(function(e){
            e.preventDefault();
            var width = $("#width").val();
            document.getElementById("myImg").width = width;
        });
    });
    $(document).ready(function(){
        $("#set-height").click(function(e){
            e.preventDefault();
            var height = $("#height").val();
            document.getElementById("myImg").height = height;
        });
    });

    $(document).ready(function(){
        $("#set-mleft").click(function(e){
            e.preventDefault();
            var margin = $("#mleft").val();
            document.getElementById("myImg").style.marginLeft = margin.concat('px');
        });
    });

    $(document).ready(function(){

        $("#set-mtop").click(function(e){
            e.preventDefault();
            var margin = $("#mtop").val();
            document.getElementById("myImg").style.marginTop = margin.concat('px');
        });
    });
    $(document).ready(function(){
        $("#set-mright").click(function(e){
            e.preventDefault();
            var margin = $("#mright").val();
            document.getElementById("myImg").style.marginRight = margin.concat('px');
        });
    });


</script>
</body>

</html>
<?php }
else{
    echo "please login first";
    ?>
    <script>
        setTimeout(function(){ window.location.href="glasses_admin/login/login.php"; });
    </script>
    <?php
}



?>