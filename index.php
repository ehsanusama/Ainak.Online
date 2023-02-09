<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


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
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
</head>

<body>


<?php
include ("includes/functions/display1.php");
include ("includes/sections/header.php");        ?>


  <!-- ======= Hero Section ======= -->
<?php include ("includes/sections/hero.php");        ?>

  <!-- End Hero -->

  <main id="main">

      <!-- ======= New Arival======= -->
      <section class="portfolio">
          <div class="container">
              <div class="section-title">
                  <h2>NEW ARRIVAL</h2>
              </div>
              <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="100">

                  <?php

                  displaylatest();
                  ?>

              </div>

              <div class=" explore-button">
                  <a href="shop.php?displayall">Explore More</a>
              </div>
          </div>
      </section>
      <!-- End New Arival -->

      <!-- ======= Virtual TRy On ======= -->

      <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
          <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
              <div class="row ">
                  <div class="col-xl-8">
                      <h4>Try out our Virtual Mirror</h4>
                      <p>Start your style journey and see your style picks to look your best.
                          Click the ‘Try Them On’ button on a product page to begin.</p>
                      <a href="glasses_at_home/index.php" class="btn-get-started ">Take A Look</a>
                  </div>
              </div>
          </div>
      </section><!-- End Why Us Section -->

      <!-- Virtual TRy On -->
    <!-- ======= Service Details Section ======= -->
    <section class="service-details bg-light">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/men.webp" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">For Men </a></h5>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Explore More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/men.webp" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="shop.php?display=Male">For Men</a></h5>
                <div class="read-more"><a href="shop.php?display=Male"><i class="bi bi-arrow-right"></i> Explore More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/women.webp" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="shop.php?display=Female">For Women</a></h5>
                <div class="read-more"><a href="shop.php?display=Female"><i class="bi bi-arrow-right"></i>Explore More</a></div>
              </div>
            </div>

          </div>


        </div>

      </div>
    </section><!-- End Service Details Section -->


    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxs-truck"></i></div>
              <h4 class="title"><a href="">Free Shipping </a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-time"></i></div>
              <h4 class="title"><a href="">24/7 Online Support</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-money"></i></div>
              <h4 class="title"><a href="">Money Back Gaurantee </a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">100% Secure Checkout </a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- End Services Section -->
    <!-- ======= Slider======= -->
    <div class="container-fluid">
    <div class="section-title">
      <h2>LATEST EYE GLASSES</h2>
      <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
    </div>


    <div class="slider-custom bg-light" style="width: 100%">

      <input type="radio" name="position" checked />
      <input type="radio" name="position" />
      <input type="radio" name="position" />
      <input type="radio" name="position" />
      <input type="radio" name="position" />
      <div id="carousel">
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
      </div>

    </div>
    </div>
    <!-- ======= Slider ======= -->
    <!-- ======= Featured Itemns======= -->
    <section class="portfolio">
      <div class="container">
        <div class="section-title">
          <h2>Choose yours from over 300 frames.</h2>
          <p>Many of happy customers have found their perfect pair.</p>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="section-title">
                <h2>Features</h2>
            </div>
       <?php

       display1();
       ?>

        </div>

        <div class=" explore-button">
          <a href="shop.php?displayall">More</a>
        </div>
      </div>
    </section>
    <!-- End Featured Items -->



      <section class="about" data-aos="fade-up">

              <div class="section-title">
                  <h2>Enjoy our premium brands.</h2>

              </div>
              <div class="container">
                  <section class="customer-logos slider">
                      <div class="slide"><img src="assets/img/ray-ban.svg"></div>
                      <div class="slide"><img src="assets/img/armani.svg"></div>
                      <div class="slide"><img src="assets/img/arnette-2.svg"></div>
                      <div class="slide"><img src="assets/img/burberry-logo.svg"></div>
                      <div class="slide"><img src="assets/img/coach-3.svg"></div>
                      <div class="slide"><img src="assets/img/gucci-logo-1.svg"></div>
                      <div class="slide"><img src="assets/img/prada.svg"></div>
                      <div class="slide"><img src="assets/img/dolce-gabbana-1.svg"></div>
                      <div class="slide"><img src="assets/img/oakley-1.svg"></div>
                      <div class="slide"><img src="assets/img/polo-1.svg"></div>

                  </section>
              </div>

      </section>



    <!-- BOOK -->
    <section class="section-bg  book-appoinment  " data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="section-title">
          <h1 class="book-text">Make an appointment <br> with an ophthalmologist</h1>
          <a href="doctor/index-2.html" class="  btn-group-1">Book an appointment</a>
        </div>

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/image-02-560x560.webp" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center pt-4">
                <div>
                  <img  src="assets/img/image-02-560x280.webp" class=" book-img img-fluid" alt="">
                </div>
            <div>
              <img src="assets/img/image-05-560x420.webp" class=" book-img img-fluid" alt="">
            </div>
          </div>
          </div>


        </div>

      </div>
    </section><!-- BOOK -->



    <!-- ======= Why Us Section ======= -->
    <section class="why-us " data-aos="fade-up" date-aos-delay="200">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 p-0">
            <img src="assets/img/shop.webp" class="img-fluid" alt="" style="border-radius: 10px;width: 538px;height: 422px">
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <h4 class="title"><a href="">Find your perfect frame virtually</a></h4>
              <p class="description">Discover the best frames using the Virtual Mirror to try on as many
                  styles as you like from top brands.</p>

            </div>

            <div class="icon-box">
              <h4 class="title"><a href="">A realistic try-on</a></h4>
              <p class="description">Once you’ve selected your frame from the product page, you can
                  you can visualize your perfect pair seeing exactly how they look on you.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
    <!-- ======= Features Section ======= -->
      <section class="why-us " data-aos="fade-up" date-aos-delay="200" style=" background: radial-gradient(97.4% 237.07% at 0 50%,#f7e7ff 0,rgba(195,214,255,.67) 65.58%,#e0f0ff 91.96%),#fff;">
          <div class="container-fluid">
              <div class="row">


                  <div class="col-lg-7 d-flex flex-column justify-content-center p-5">

                      <div class="icon-box">
                          <h1 class="title"><a href="">The Ainak.Online Collection</a></h1>
                          <p class="description">
                              Get the best for less, with a premium frame + lenses starting at 1000 PKR.
                              A making in the balance between style and price.</p>

                      </div>


                  </div>
                  <div class="col-lg-5 p-0">
                      <img src="assets/img/shop.webp" class="img-fluid" alt="shop" style="border-radius: 10px;width: 538px;height: 422px">
                  </div>
              </div>

          </div>
      </section><!-- End Why Us Section -->

      <!-- ======= Tetstimonials Section ======= -->
      <section class=" testimonials" data-aos="fade-up">
          <div class="container">

              <div class="section-title">
                  <h2>Our Happy Customers</h2>
                   </div>

              <div class="testimonials-carousel swiper">
                  <div class="swiper-wrapper">
                      <div class="testimonial-item swiper-slide">
                          <h3>Saul Goodman</h3>
                          <h4>Ceo &amp; Founder</h4>
                          <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                      </div>
                  </div>
                  <div class="swiper-pagination"></div>
              </div>

          </div>
      </section><!-- End Ttstimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include ("includes/sections/footer.php");        ?>
  <!-- Vendor JS Files -->

  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>

</body>

</html>