<!---------- featured posts------------------->

<?php
include ("../connection/conection.php");

?>

<?php
function displayproductsummary(){

    if (isset($_REQUEST['summary'])) {

        $id = $_REQUEST['summary'];
        include ("../connection/conection.php");

        $sql ="SELECT * FROM glasses_details WHERE g_id='$id' ORDER BY g_id DESC ";

        $qrun = mysqli_query($conn, $sql);
        if(mysqli_num_rows($qrun) >0 ){

            while ($data = mysqli_fetch_array($qrun)){
                ?>


                <div class="booking-summary">
                    <div class="booking-item-wrap">
                        <ul class="booking-date">
                            <li>Product Code <span><?php echo $data['g_code'] ?></span></li>
                        </ul>
                        <ul class="booking-date">
                            <li>Product Name <span><?php echo $data['g_name'] ?></span></li>
                        </ul>
                        <ul class="booking-fee">
                            <li>Color <span><?php echo $data['g_fcolor'] ?></span></li>
                            <li>Frame Size <span><?php echo $data['g_fsize'] ?></span></li>
                        </ul>
                        <div class="booking-total">
                            <ul class="booking-total-list">
                                <li>
                                    <span>Price</span>
                                    <span class="total-cost">$<?php echo $data['g_price'] ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php


            }
        }


    }

}
?>

<?php

function checkout($id){
    date_default_timezone_set("Asia/Karachi");
if(isset($_REQUEST['checkout'])){
    $name = $_REQUEST['o_fname'];
    $lname = $_REQUEST['o_lname'];
    $email = $_REQUEST['o_email'];
    $phone = $_REQUEST['o_phone'];
    $city = $_REQUEST['o_city'];
    $adress = $_REQUEST['o_adress'];
    $productcode = $_REQUEST['product_code'];
    $quan=   $_REQUEST['o_quantity'];
    $f =rand(10,10000);
    $g = "INV-".$f;
    $date_time= date("d-m-Y")."  ".date("h:i-a") ;

    // $status=1;
    // $date=$date_time;
    include ("../connection/conection.php");


    if($name!="" && $lname!="" && $email!="" && $phone!="" && $city!="" && $adress!="" && $productcode!="" && $quan!="" && $id!="" ){
        include ("../connection/conection.php");
        $sqal ="SELECT * FROM glasses_details WHERE g_code='$productcode'";
        $qanr= mysqli_query($conn,$sqal);
        $data = mysqli_fetch_array($qanr);
        $quantity = $data['g_quan'];
        $qun= $quantity-$quan;
        echo $quan ;

        echo $quantity;
        if($quan < $quantity){
        $q = "INSERT INTO frame_oder (o_fname,o_lname,o_email, o_phone,o_city,o_adress,product_code,o_quantity,user_id,invice_no,date)
                                 VALUES('$name','$lname','$email','$phone','$city','$adress','$productcode','$quan','$id','$g','$date_time')";
        include ("../connection/conection.php");
            $q_run= mysqli_query($conn,$q);
            $error= mysqli_error($conn);
            echo $error;
            if($q_run) {
                $q="UPDATE glasses_details SET g_quan='$qun' WHERE g_code='$productcode'";
                include ("../connection/conection.php");
                mysqli_query($conn,$q);
                $er = mysqli_error($conn);
                echo $er;
                ?>
                <script>

                    alert("Your Order Is placed");
                </script>
                <?php



            }

        }else
        {
            ?>
            <script>
                     var quant =  <?php  echo $data['g_quan'];?> ;
                alert( "Out Of stock Our Available Quantity is : "+    quant );
            </script>
            <?php
        }


    }//if not empty
    else{
        ?>

        <script>

            alert("Don't Leave Any Field Empty Or login First");
        </script>
        <?php
    }
}
}







?>
<?php

function cartdisplay(){
    $user=$_SESSION['id'];
    include ("../connection/conection.php");
    $sql ="SELECT * FROM frame_oder where user_id = $user ORDER BY o_id DESC ";
    $qrun = mysqli_query($conn, $sql);
    $er =mysqli_errno($conn);
    //echo $er;
    if(mysqli_num_rows($qrun) >0 ){
        while ($data = mysqli_fetch_array($qrun)){
            ?>

            <tr>
                <td>
                    <a href="#"><?php  echo $data['invice_no'] ;?></a>
                </td>
                <td>
                    <a href="#"><?php  echo $data['product_code'] ;?></a>
                </td>
                <td>
                    <h2 class="table-avatar">

                        <?php  echo $data['o_fname'] ;?>
                    </h2>
                </td>

                <?php
                if($data['o_status']==0){
                    ?>
                    <td class="text-left">
                        <span class="badge badge-pill bg-danger inv-badge">Pending</span>
                    </td>
                    <?php
                }
                if($data['o_status']==1){
                    ?>
                    <td class="text-left">
                        <span class="badge badge-pill bg-primary inv-badge">Accepted</span>
                    </td>
                    <?php
                }
                if($data['o_status']==2){
                    ?>
                    <td class="text-left">
                        <span class="badge badge-pill bg-success inv-badge">Delivered</span>
                    </td>
                    <?php
                }
                if($data['o_status']==3){
                    ?>
                    <td class="text-left">
                        <span class="badge badge-pill bg-danger-light inv-badge">Rejected</span>
                    </td>
                    <?php
                }

                ?>
                <td>
                    <p class="table-avatar">

                        <?php  echo $data['o_tracking'] ;?>
                    </p>
                </td>
                <td class="">
                    <div class="table-action">
                        <a href="" class="btn btn-sm bg-danger-light">
                            <i class="fas fa-delete"></i> Delete
                        </a>
                    </div>
                </td>
            </tr>

            <?php


        }
    }


}

?>





<?php

function cartadd(){
if(isset($_REQUEST['cartadd'])){
    $user=$_REQUEST['cartadd'];
    include ("../connection/conection.php");
    $sql ="SELECT * FROM glasses_details where g_id = $user ORDER BY g_id DESC ";
    $qrun = mysqli_query($conn, $sql);
    $er =mysqli_errno($conn);
    //echo $er;
    if(mysqli_num_rows($qrun) >0 ){
        while ($data = mysqli_fetch_array($qrun)){
            ?>

            <tr>
                <td>
                    <a href="#"></a>
                </td>
                <td>
                    <a href="#"><?php  echo $data['g_code'] ;?></a>
                </td>
                <td>
                    <h2 class="table-avatar">

                    </h2>
                </td>

                    <td class="text-left">
                        <span class="badge badge-pill bg-danger-light inv-badge">Pending</span>
                    </td>

                <td class="">
                    <div class="table-action">
                        <a href="checkout.php?summary=<?php echo $data['g_id'] ?>" class="btn btn-sm bg-primary">
                            <i class="fas fa-shopping-cart"></i> Buy Now
                        </a>
                        <a href="" class="btn btn-sm bg-danger-light">
                            <i class="fas fa-delete"></i> Delete
                        </a>
                    </div>
                </td>
            </tr>

            <?php


        }
    }

}
}

?>





<?php
function logout(){
    if(isset($_GET['logout'])){
        if(session_destroy()){
            ?>
            <script>
                setTimeout(function(){ window.location.href="../index.php"; }, 2000);
            </script>
            <?php
        }
    }
}
?>
