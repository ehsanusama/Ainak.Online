<?php
include ("connection/conection.php");

?>

<!---------- featured posts------------------->
<?php

function display1(){

        $sql ="SELECT * FROM glasses_details where g_fea='1' ORDER BY g_id DESC  limit 8   ";
    include ("connection/conection.php");
        $qrun = mysqli_query($conn, $sql);
        if(mysqli_num_rows($qrun) >0 ){

            while ($data = mysqli_fetch_array($qrun)){
                ?>

                <div class="col-lg-3 col-md-6 portfolio-wrap">
                    <div class="portfolio-item">
                        <img src="glasses_admin/glasses_images/<?php echo $data['g_pic1'] ?> " class="glasses-image img-fluid" alt="">
                        <p style="margin-top: 30% ;margin-left: 10px;text-transform: capitalize"> <?php echo $data['g_brand'] ?>
                            <br><?php echo $data['g_name'] ?>
                            <br><?php echo $data['g_fshape'] ?>
                            <br> PKR <?php echo $data['g_price'] ?>
                        </p>
                        <p style=" margin-left: 10px;text-transform: capitalize"> </p>
                        <p style="margin-left: 10px;text-transform: capitalize"> </p>

                        <div class="portfolio-info">
                            <div>
                                <a href="glasses_admin/glasses_images/<?php echo $data['g_pic2'] ?>" class="portfolio-lightbox" title="<?php echo $data['g_name'] ?>"><i class="bx bx-zoom-in" ></i></a>
                                <a href="portfolio-details.php?single_display=<?php echo $data['g_id'] ?>" title="Portfolio Details"><i class="bx bx-cart"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <?php


            }
        }


}
?>


<!---------- featured posts------------------->
<!---------- latest posts------------------->
<?php

function displaylatest(){

    $sql ="SELECT * FROM glasses_details where g_latest='1' ORDER BY g_id DESC limit 4  ";
    include ("connection/conection.php");
    $qrun = mysqli_query($conn, $sql);
    if(mysqli_num_rows($qrun) >0 ){

        while ($data = mysqli_fetch_array($qrun)){
            ?>

            <div class="col-lg-3 col-md- portfolio-wrap">
                <div class="portfolio-item">
                    <img src="glasses_admin/glasses_images/<?php echo $data['g_pic1'] ?> " class="glasses-image img-fluid" alt="">
                    <p style="margin-top: 30% ;margin-left: 10px;text-transform: capitalize"> <?php echo $data['g_brand'] ?>
                        <br><?php echo $data['g_name'] ?>
                        <br><?php echo $data['g_fshape'] ?>
                        <br> PKR <?php echo $data['g_price'] ?>
                    </p>
                    <p style=" margin-left: 10px;text-transform: capitalize"> </p>
                    <p style="margin-left: 10px;text-transform: capitalize"> </p>

                    <div class="portfolio-info">
                        <div>
                            <a href="glasses_admin/glasses_images/<?php echo $data['g_pic2'] ?>" class="portfolio-lightbox" title="<?php echo $data['g_name'] ?>"><i class="bx bx-zoom-in" ></i></a>
                            <a href="portfolio-details.php?single_display=<?php echo $data['g_id'] ?>" title="Portfolio Details"><i class="bx bx-cart"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <?php


        }
    }


}
?>


<!---------- latest posts------------------->
<?php
function displayall(){
    if (isset($_REQUEST['displayall'])) {

        include ("connection/conection.php");
        $sql ="SELECT * FROM glasses_details ORDER BY g_id DESC ";
        include ("connection/conection.php");
        $qrun = mysqli_query($conn, $sql);
        ?>
        <div class="container-fluid ">

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
                            <img src="assets/img/shop.webp" class="img-fluid" alt="" style="border-radius: 10px;width: 538px;height: 422px">
                        </div>
                    </div>

                </div>
            </section><!-- End Why Us Section -->

            <div class="row mt-5">
                <div class="col-lg-10 ">
                    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                        <?php



                        if(mysqli_num_rows($qrun) >0 ){

                            while ($data = mysqli_fetch_array($qrun)){
                                ?>


                                <div class="col-lg-4 col-md-6 portfolio-wrap " >
                                    <div class="portfolio-item">
                                        <img src="glasses_admin/glasses_images/<?php echo $data['g_pic1'] ?>" class="img-fluid" alt="" ">
                                        <p style="margin-top: 30% ;margin-left: 10px;text-transform: capitalize"> <?php echo $data['g_brand'] ?>
                                            <br><?php echo $data['g_name'] ?>
                                            <br><?php echo $data['g_fshape'] ?>
                                            <br> PKR <?php echo $data['g_price'] ?>
                                        </p>
                                        <div class="portfolio-info">

                                            <div>
                                                <a href="glasses_admin/glasses_images/<?php echo $data['g_pic2'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $data['g_name'] ?>"><i class="bx bx-zoom-in"></i></a>
                                                <a href="portfolio-details.php?single_display=<?php echo $data['g_id'] ?>" title="Portfolio Details"><i class="bx bx-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php


                            }
                        }?>



                    </div>

                </div>
                <div class="col-lg-2 ent">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="shop.php?display=sunglasses">Sunglasses</a></li>
                                <li><a href="shop.php?display=eyeglasses">Eyeglasses</a></li>
                                <li><a href="shop.php?display=Male">Male</a></li>
                                <li><a href="shop.php?display=Female">Female</a></li>

                            </ul>
                        </div><!-- End sidebar categories-->

                        <!-- End sidebar recent posts-->

                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
        <?php



    }

}
?>
<!---------- featured posts------------------->

<!----------type glasses display------------------->
<?php
function displayglasses(){


    if (isset($_REQUEST['display'])) {

        $id = $_REQUEST['display'];
        include ("connection/conection.php");
        $sql ="SELECT * FROM glasses_details WHERE g_type='$id' ORDER BY g_id DESC ";
        include ("connection/conection.php");
        $qrun = mysqli_query($conn, $sql);
        ?>
        <div class="section-title">
            <?php if($id=='sunglasses') { ?>
                <h2>Prescription Sunglasses</h2>
                <p>
                    Check out the best sunglasses brands: from cat eye to the most iconic shapes, also in your prescription.
                </p>

            <?php } ?>

            <?php if($id=='eyeglasses') { ?>
                <h2>Prescription Eyeglasses</h2>
                <p>
                    Check out the best eyeglasses brands: from cat eye to the most iconic shapes, also in your prescription.
                </p>
            <?php } ?>
        </div>

        <?php if($id=='sunglasses') { ?>
            <section class="why-us coverimage " data-aos="fade-up" date-aos-delay="200" style=" background: radial-gradient(97.4% 237.07% at 0 50%,#f7e7ff 0,rgba(195,214,255,.67) 65.58%,#e0f0ff 91.96%),#fff;">
                    <div class="container-fluid">
                        <img src="assets/img/canva1.jpg" class="img-fluid imf" alt="">
                    </div>

            </section><!-- End Why Us Section -->

        <?php } ?>
        <?php if($id=='eyeglasses') { ?>
            <section class="why-us coverimage " data-aos="fade-up" date-aos-delay="200" style=" background: radial-gradient(97.4% 237.07% at 0 50%,#f7e7ff 0,rgba(195,214,255,.67) 65.58%,#e0f0ff 91.96%),#fff;">
                <div style="position: absolute; margin: 10% 0 0 8% ;color: black;text-transform: capitalize;">
                    <h5 class=""  >
                        Back to the office with essential style
                    </h5>
                    <p>
                        Classic frames offer a unique and protective style with 50% off lenses + treatments
                    </p>
                </div>
                <div class="container-fluid">
                    <img src="assets/img/eye.jpg" class="img-fluid imf" alt="">
                </div>
            </section><!-- End Why Us Section -->

        <?php } ?>

        <div class="container">




            <div class="row portfolio-container mt-5" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                <?php



        if(mysqli_num_rows($qrun) >0 ){

            while ($data = mysqli_fetch_array($qrun)){
                ?>


                <div class="col-lg-3 col-md-6 portfolio-wrap " >
                    <div class="portfolio-item">
                        <img src="glasses_admin/glasses_images/<?php echo $data['g_pic1'] ?>" class="img-fluid" alt="" ">
                        <p style="margin-top: 30% ;margin-left: 10px;text-transform: capitalize"> <?php echo $data['g_brand'] ?>
                            <br><?php echo $data['g_name'] ?>
                            <br><?php echo $data['g_fshape'] ?>
                            <br> PKR <?php echo $data['g_price'] ?>
                        </p>
                        <div class="portfolio-info">

                            <div>
                                <a href="glasses_admin/glasses_images/<?php echo $data['g_pic2'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $data['g_name'] ?>"><i class="bx bx-zoom-in"></i></a>
                                <a href="portfolio-details.php?single_display=<?php echo $data['g_id'] ?>" title="Portfolio Details"><i class="bx bx-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php


            }
        }?>
           </div>
        </div>


        <?php



    }

}
?>
<!---------- type glasses display------------------->
<!----------type glasses display------------------->
<?php
function displaygenderglasses(){


    if (isset($_REQUEST['display'])) {

        $id = $_REQUEST['display'];
        include ("connection/conection.php");
        $sql ="SELECT * FROM glasses_details WHERE g_gender='$id' ORDER BY g_id DESC ";
        include ("connection/conection.php");
        $qrun = mysqli_query($conn, $sql);
        ?>
        <div class="container">

            <div class="section-title">
                <?php if($id=='Male') { ?>
                    <h2>For Men</h2>
                <?php } ?>

                <?php if($id=='Female') { ?>
                    <h2>For Female</h2>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-lg-8">

                </div>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                <?php



                if(mysqli_num_rows($qrun) >0 ){

                    while ($data = mysqli_fetch_array($qrun)){
                        ?>


                        <div class="col-lg-3 col-md-6 portfolio-wrap " >
                            <div class="portfolio-item">
                                <img src="glasses_admin/glasses_images/<?php echo $data['g_pic1'] ?>" class="img-fluid" alt="" ">
                                <p style="margin-top: 30% ;margin-left: 10px;text-transform: capitalize"> <?php echo $data['g_brand'] ?>
                                    <br><?php echo $data['g_name'] ?>
                                    <br><?php echo $data['g_fshape'] ?>
                                    <br> PKR <?php echo $data['g_price'] ?>
                                </p>
                                <div class="portfolio-info">

                                    <div>
                                        <a href="glasses_admin/glasses_images/<?php echo $data['g_pic2'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $data['g_name'] ?>"><i class="bx bx-zoom-in"></i></a>
                                        <a href="portfolio-details.php?single_display=<?php echo $data['g_id'] ?>" title="Portfolio Details"><i class="bx bx-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php


                    }
                }?>



            </div>

        </div>
        <?php



    }

}
?>
<!---------- type glasses display------------------->

<!---------- glasses single display------------------->
<?php
    function displaysinglglasses(){


    if (isset($_REQUEST['single_display'])) {

    $id = $_REQUEST['single_display'];

        $sql ="SELECT * FROM glasses_details WHERE g_id='$id' ORDER BY g_id DESC ";
        include ("connection/conection.php");
    $qrun = mysqli_query($conn, $sql);
    if(mysqli_num_rows($qrun) >0 ){

    while ($data = mysqli_fetch_array($qrun)){
    ?>


        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src=" glasses_admin/glasses_images/<?php echo $data['g_pic1'] ?>" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="glasses_admin/glasses_images/<?php echo $data['g_pic2'] ?>" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="glasses_admin/glasses_images/<?php echo $data['g_pic3'] ?>" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3><?php echo $data['g_brand'] ?></h3>
                    <h5><?php echo $data['g_name'] ?></h5>
                    <ul>

                        <li><strong>Category</strong>: <?php echo $data['g_gender'] ?></li>
                        <li><strong>Frame shape</strong>: <?php echo $data['g_fshape'] ?></li>
                        <li><strong>Frame Color</strong>: <?php echo $data['g_fcolor'] ?></li>
                        <li><strong>Lenses</strong>: <?php echo $data['g_lcolor'] ?></li>
                        <li><strong>Frame Material</strong>: <?php echo $data['g_matrial'] ?></li>
                        <li><strong>Frame Size</strong>: <?php echo $data['g_fsize'] ?></li>
                        <li><strong>Product Code</strong>: <?php echo $data['g_code'] ?></li>
                        <li><strong>Price</strong>: PKR <?php echo $data['g_price'] ?></li>

                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>Description</h2>
                    <p>
                        <?php echo $data['g_dec'] ?>
                    </p>
                </div>
                <div class=" explore-button" style="margin:0 0 0 1%">
                    <a href="tryglasses.php?try=<?php echo $data['g_id'] ?>"  >Try Now</a>
                </div>
                <?php if($data['g_quan']>=0){ ?>
                <div class=" explore-button" style="margin:0 0 0 1%">
                    <a href="payment/checkout.php?summary=<?php echo $data['g_id'] ?>" >Buy Now</a>
                </div>
                <?php }
                else{
                    ?>
                    <div class=" explore-button" style="margin:0 0 0 1%">
                        <a href="" >OUT OF STOCK</a>
                    </div>
                    <script type="text/javascript">
                        alert("Out Of Stock");

                    </script>


                    <?php


                }


                    ?>
                <div class=" explore-button">
                    <a href="payment/cart.php?cartadd=<?php echo $data['g_id'] ?>" ><i class="bx bxs-cart-add" style="font-size: 20px"></i></a>
                 </div>
            </div>

        </div>

<?php


}
}


}

}
?>

<!---------- glasses single display------------------->


