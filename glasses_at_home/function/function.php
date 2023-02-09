<?php

//==================================display glasses function====================================

function displayvideoglasses(){
    $sql ="SELECT * FROM video_frame  order by id DESC LIMIT 50
                          ";
    include ("../connection/conection.php");
    $qrun = mysqli_query($conn, $sql);
    $er =mysqli_errno($conn);
    //echo $er;
    if(mysqli_num_rows($qrun) >0 ){
        while ($data = mysqli_fetch_array($qrun)){

            ?>

            <div class="col-md-3">
                <div class="card h-100">
                     <div class="card-body">
                        <h5 class="card-title"><?php  echo $data['label (US)'];

                            ?>
                        </h5>
                         <p>
                             <?php  echo $data['SKU'] ?>
                         </p>
                        <br>

                        <button class="btn btn-primary" onclick="JEELIZVTOWIDGET.load('<?php  echo $data['SKU'] ?>')">Try Now</button>
                        <a href="../portfolio-details.php?single_display=<?php echo $data['SKU'] ?>" class="btn btn-primary">Buy Now</a>

                    </div>
                </div>
            </div>

            <?php


        }
    }


}


function displayvideoglassesname(){
    $sql ="SELECT * FROM video_frame  order by id DESC LIMIT 20
                          ";
    include ("../connection/conection.php");
    $qrun = mysqli_query($conn, $sql);
    $er =mysqli_errno($conn);
    //echo $er;
    if(mysqli_num_rows($qrun) >0 ){
        while ($data = mysqli_fetch_array($qrun)){

            ?>

            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?php  echo $data['label (US)'];

                            ?>
                        </h5>
                        <p>
                            <?php  echo $data['SKU'] ?>
                        </p>
                        <br>

                        <button class="btn btn-primary" onclick="JEELIZVTOWIDGET.load('<?php  echo $data['SKU'] ?>')">Try Now</button>
                        <a href="../shop.php?displayall" class="btn btn-primary">Buy Now</a>

                    </div>
                </div>
            </div>

            <?php


        }
    }


}

?>
