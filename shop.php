<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shop</title>
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

  <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<?php include ("includes/sections/header.php");        ?>

<!-- End Header -->
  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->


      <!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio blog">
        <?php
        include ("includes/functions/display1.php");
        displayglasses();
        displaygenderglasses();
        displayall();
        ?>
    </section><!-- End Portfolio Section -->


      <section id="blog" class="blog">
          <div class="container" data-aos="fade-up">

              <div class="row">

                  <div class="col-lg-8 entries">


                      <div class="blog-comments">

                          <div class="reply-form">
                              <h4>Leave a Reply</h4>
                              <p>Your email address will not be published. Required fields are marked * </p>
                              <form action="" method="post">
                                  <div class="row">
                                      <div class="col-md-6 form-group">
                                          <input name="name" type="text" class="form-control" placeholder="Your Name*" required>
                                      </div>
                                      <div class="col-md-6 form-group">
                                          <input name="email" type="text" class="form-control" placeholder="Your Email*" required>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col form-group">
                                          <textarea name="message" class="form-control" placeholder="Your Comment*" required></textarea>
                                      </div>
                                  </div>
                                  <button  class="btn btn-primary" name="contact" >Post Comment</button>

                              </form>





                              <?php //if "email" variable is filled out, send email
                              if (isset($_REQUEST['contact']))
                              {      //Email information
                                  $sender = $_REQUEST['email'];
                                  $recipient = 'usamaehsan956@gmail.com';
                                  $subject = 'Feedback';
                                  $message = $_REQUEST['message'];
                                  $headers = 'From:' . $sender;

                                  if (mail($recipient, $subject, $message, $headers))
                                  {
                                      echo "Message accepted";
                                  }
                                  else
                                  {
                                      echo "Error: Message not accepted";
                                  }


                              }
                              ?>
                          </div>

                      </div><!-- End blog comments -->

                  </div><!-- End blog entries list -->


              </div>

          </div>
      </section>
      <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include ("includes/sections/footer.php"); ?>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>