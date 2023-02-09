<?php
include ("../connection/conection.php");

?>

<?php

function create_glasses(){
    $date_time= date("Y-m-d") ;
    if(isset($_REQUEST['add'])){
        $name = $_REQUEST['g_name'];
        $code= $_REQUEST['g_pcode'];
        $gpcode ="Gla_".$code;
        $type = $_REQUEST['g_type'];
        $price = $_REQUEST['g_price'];
        $gender= $_REQUEST['g_gender'];
        $latest= $_REQUEST['g_latest'];
        $featured= $_REQUEST['g_featured'];
        $fsize = $_REQUEST['g_fsize'];
        $fcolor = $_REQUEST['g_color'];
        $lcolor = $_REQUEST['g_lcolor'];
        $dec = $_REQUEST['g_dec'];
        $brand = $_REQUEST['g_brand'];
        $matrial = $_REQUEST['g_material'];
        $shape = $_REQUEST['g_fshape'];
        $video_frame = $_REQUEST['video_frame'];
        $sku = $_REQUEST['sku_number'];
        $quan = $_REQUEST['g_quan'];

        //file uploading code below
        $file = $_FILES['g_pic1']['name'];
        $folder1="glasses_images/";
        $path1=$folder1.$file;

        $file2 = $_FILES['g_pic2']['name'];
        $folder2="glasses_images/";
        $path2=$folder2.$file2;

        $file3 = $_FILES['g_pic3']['name'];
        $folder3="glasses_images/";
        $path3=$folder3.$file3;

        // $status=1;
        // $date=$date_time;
        include ("../connection/conection.php");
        if($name!="" && $type!="" && $price!="" && $gender!="" && $fsize!="" && $fcolor!="" && $dec!=""  && $file!="" && $lcolor!="" && $brand!="" && $matrial!=""  && $shape!="" && $quan!=""){
            if(move_uploaded_file($_FILES['g_pic1']['tmp_name'] ,$path1) && move_uploaded_file($_FILES['g_pic2']['tmp_name'] ,$path2) && move_uploaded_file($_FILES['g_pic3']['tmp_name'] ,$path3) ){
            $con = mysqli_connect("localhost","root","","frame_trial");
            $q = "INSERT INTO glasses_details (g_name,g_type,g_price, g_gender,g_latest,g_fea,g_fsize,g_fcolor,g_dec,g_pic1,g_pic2,g_pic3,g_code,g_lcolor,g_fshape,g_brand,g_matrial,video_frame,sku_number,g_quan)
                                 VALUES('$name','$type','$price','$gender','$latest','$featured','$fsize','$fcolor','$dec','$file','$file2','$file3','$gpcode','$lcolor','$shape','$brand','$matrial','$video_frame','$sku','$quan')";
                include ("../connection/conection.php");
                $q_run= mysqli_query($con,$q);
            $error= mysqli_error($con);
            echo $error;
            if($q_run) {
                ?>
                <script type="text/javascript">
                    swal("Success!", ", Item Created!", "success");
                </script>
                <script>
                    setTimeout(function(){ window.location.href="glasses_details.php"; }, 1000);
                </script>
                <?php
            }
            }
            else{
                ?>
                <script type="text/javascript">
                    swal("Error!", ", File Uploading Error!", "error");
                </script>
                <script>
                    setTimeout(function(){ window.location.href="#"; }, 2000);
                </script>
                <?php

            }
        }//if not empty
        else{
            ?>
            <script type="text/javascript">
                swal("Attention!", ", Don't Leave any Field Empty!", "error");
            </script>
            <script>
                setTimeout(function(){ window.location.href="#"; }, 2000);
            </script>
            <?php
        }
    }


    //if isset
}




?>

<?php

function displaycart(){

    include ("emails.php");
    $user=$_SESSION['id'];
    $sql ="SELECT * FROM frame_oder ORDER BY o_id DESC ";
    include ("../connection/conection.php");
    $qrun = mysqli_query($conn, $sql);
    $er =mysqli_errno($conn);
    //echo $er;
    if(mysqli_num_rows($qrun) >0 ){
        while ($data = mysqli_fetch_array($qrun)){
            ?>

            <tr>
                <td>
                    <h2 class="table-avatar">
                        <a href="invoice.php?inovice=<?php  echo $data['o_id'] ;?>"><?php  echo $data['invice_no'] ;?></a>
                    </h2>
                </td>
                <td>
                    <h2 class="table-avatar">
                        <a href=""><?php  echo $data['product_code'] ;?></a>
                    </h2>
                </td>
                <td>
                    <h2 class="table-avatar">
                        <a href="#"><p style="text-transform: capitalize"> <?php  echo $data['o_fname'] ;?> <?php  echo $data['o_lname'] ;?> </p></a>
                    </h2>
                </td>
                <td>
                    <h2 class="table-avatar">
                        <a href="#"><p style="text"> <?php  echo $data['o_email'] ;?>  </p></a>
                    </h2>
                </td>
                <td>
                    <h2 class="table-avatar">
                        <a href="#"><p style="text"> <?php  echo $data['o_phone'] ;?>  </p></a>
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
                    <h2 class="table-avatar">
                        <a href="#"><p style="text"> <?php  echo $data['o_quantity'] ;?>  </p></a>
                    </h2>
                </td>
                <td>
                    <h2 class="table-avatar">
                        <a href="#"><p style="text"> <?php  echo $data['o_tracking'] ;?>  </p></a>
                    </h2>
                </td>
                <td class="">
                    <div class="actions">

                        <?php if($data['o_status']==0) {      ?>
                        <a class="btn btn-sm bg-primary-light" data-toggle="" href="?accept=<?php echo $data['o_id']; ?>">
                            <i class="fe fe-check"></i> Accept
                        </a>
                        <?php accept();
                        }
                        ?>
                        <?php if($data['o_tracking']=="") {      ?>
                            <a class="btn btn-sm bg-primary-light" data-toggle="" href="update.php?edit=<?php echo $data['o_id']; ?>">
                                <i class="fe fe-edit"></i> Add Tracking Id#
                            </a>
                        <?php }?>
                     <?php if($data['o_status']==1 && $data['o_tracking']!="") {      ?>
                        <a class="btn btn-sm bg-success-light" data-toggle="" href="?deliver=<?php echo $data['o_id']; ?>">
                            <i class="fe fe-check"></i> Delivered
                        </a>
                        <?php delivered();}?>
                   <?php if($data['o_status']==0) {      ?>
                        <a class="btn btn-sm bg-danger-light" data-toggle="" href="?rejected=<?php echo $data['o_id']; ?>">
                            <i class="fe fe-activity"></i> Rejected
                        </a>
                        <?php reject();}?>

                        <a class="btn btn-sm bg-danger-light" data-toggle="" href="?delete=<?php echo $data['o_id']; ?>">
                            <i class="fe fe-trash"></i> Delete
                        </a>
                        <?php del_oder();?>


                    </div>

                </td>
            </tr>

            <?php


        }
    }


}

?>

<?php
function accept()
{
    if (isset($_REQUEST['accept'])) {
        $id = $_REQUEST['accept'];
        $s=1;
        $q = "UPDATE frame_oder SET o_status='$s' WHERE o_id='$id'";
        include ("../connection/conection.php");
        $er = mysqli_error($conn);
        echo $er;
        $q_run=mysqli_query($conn, $q);
        if($q_run){

            ?>

            <script type="text/javascript">
                swal("Oder", "Accepted", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="cart.php"; }, 1000);
            </script>
            <?php
        }
    }


}
?>
<?php
function delivered()
{
    if (isset($_REQUEST['deliver'])) {
        $id = $_REQUEST['deliver'];
        $s=2;
        $q = "UPDATE frame_oder SET o_status='$s' WHERE o_id='$id'";
        include ("../connection/conection.php");
        $er = mysqli_error($conn);
        echo $er;
        $q_run=mysqli_query($conn, $q);
        if($q_run){

            ?>

            <script type="text/javascript">
                swal("Oder", "Delivered", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="cart.php"; }, 1000);
            </script>
            <?php
        }
    }


}

?>
<?php
function reject()
{
    if (isset($_REQUEST['rejected'])) {
        $id = $_REQUEST['rejected'];
        $s=3;
        $q = "UPDATE frame_oder SET o_status='$s' WHERE o_id='$id'";
        include ("../connection/conection.php");
        $er = mysqli_error($conn);
        echo $er;
        $q_run=mysqli_query($conn, $q);
        if($q_run){

            ?>

            <script type="text/javascript">
                swal("Oder", "Reject", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="cart.php"; }, 1000);
            </script>
            <?php
        }
    }


}
?>
<?php

function del_oder()
{
    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['delete'];
        $q = "DELETE FROM frame_oder WHERE o_id='$id'";
        include ("../connection/conection.php");
        $er = mysqli_error($conn);
        $q_run=mysqli_query($conn, $q);
        if($q_run){
            ?>
            <script type="text/javascript">
                swal("Oder", ",is Deleted!", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="cart.php"; }, 1000);
            </script>
            <?php
        }
    }
}

?>

<?php

//==================================logout function====================================
function logout(){
    if(isset($_GET['logout'])){
        if(session_destroy()){
            ?>
            <script>
                setTimeout(function(){ window.location.href="login/login.php"; });
            </script>
            <?php
        }
    }
}
//==================================logout function====================================
?>


<?php

//==================================display glasses function====================================

function displayglasses(){
    $sql ="SELECT * FROM glasses_details ORDER BY g_id DESC ";
    include ("../connection/conection.php");
    $qrun = mysqli_query($conn, $sql);
    $er =mysqli_errno($conn);
    //echo $er;
    if(mysqli_num_rows($qrun) >0 ){
        while ($data = mysqli_fetch_array($qrun)){
            ?>

            <tr>
                <td>
                    <h2 class="table-avatar">
                        <a href=""><?php  echo $data['g_code'] ;?></a>
                    </h2>
                </td>
                <td>
                    <h2 class="table-avatar">
                        <a href=""><?php  echo $data['g_name'] ;?></a>
                    </h2>
                </td>
                <td>
                    <h2 class="table-avatar">
                        <a href="<?php  echo $data['g_brand'] ;?>"> <?php  echo $data['g_brand'] ;?> </a>
                    </h2>
                </td>
                <td>
                    <h2 class="table-avatar">
                        PKR <?php  echo $data['g_price'] ;?>
                    </h2>
                </td>
                <td>
                    <h2 class="table-avatar">
                        <?php  echo $data['g_type'] ;?>
                    </h2>
                </td>
                <td>
                    <h2 class="table-avatar">
                        <?php  echo $data['g_gender'] ;?>
                    </h2>
                </td>


                <td class="">
                    <div class="actions">

                        <a class="btn btn-sm bg-danger-light" data-toggle="" href="?delete=<?php echo $data['g_id']; ?>">
                            <i class="fe fe-trash"></i> Delete
                        </a>
                            <?php del_glasses(); ?>
                    </div>

                </td>
            </tr>

            <?php


        }
    }


}

?>



<?php
//====================== delete glasses function==================================
function del_glasses()
{
    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['delete'];
        $q = "DELETE FROM glasses_details WHERE g_id='$id'";
        include ("../connection/conection.php");
        $er = mysqli_error($conn);
        $q_run=mysqli_query($conn, $q);
        if($q_run){
            ?>
            <script type="text/javascript">
                swal("Item", ",Deleted!", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="displayglasses.php"; },1000);
            </script>
            <?php
        }
    }
}

?>



<?php

//display users
function displayuser(){
    $user=$_SESSION['id'];
    $type = $_SESSION['type'];
    //admin display
    if($type==2) {
        $sql ="SELECT * FROM glasses_user  WHERE img_id='0' ORDER BY gu_id DESC ";
        include ("../connection/conection.php");
        $qrun = mysqli_query($conn, $sql);
        if(mysqli_num_rows($qrun) >0 ){

            while ($data = mysqli_fetch_array($qrun)){
                ?>

                <tr>
                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><?php  echo $data['gu_id'] ;?></a>
                        </h2>
                    </td>
                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><?php  echo $data['gu_name'] ;?></a>
                        </h2>
                    </td>
                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><p style="text"> <?php  echo $data['gu_email'] ;?>  </p></a>
                        </h2>
                    </td>


                    <td class="text-right">
                        <div class="actions">
                            <a class="btn btn-sm bg-danger-light" data-toggle="" href="?delete=<?php echo $data['gu_id']; ?>">
                                <i class="fe fe-trash"></i> Delete
                            </a>
                            <?php  del_user();  ?>
                        </div>
                    </td>
                </tr>

                <?php


            }
        }

    }



}
//display users end
?>


<?php




//====================== user delete function==================================
function del_user()
{
    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['delete'];
        $q = "DELETE FROM glasses_user WHERE gu_id='$id'";
        include ("../connection/conection.php");
        $er = mysqli_error($conn);
        $q_run=mysqli_query($conn, $q);
        if($q_run){
            ?>
            <script type="text/javascript">
                swal("User", ",is Deleted!", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="users-list.php"; }, 2000);
            </script>
            <?php
        }
    }
}
//====================== user delete function end==================================
?>

<?php
//==================================update post function=======================================
function update()
{
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        if(isset($_REQUEST['update'])){
            $track = $_REQUEST['o_track'];
            include ("../connection/conection.php");
            $q="UPDATE frame_oder SET o_tracking='$track' WHERE o_id='$id'";
            $q_run= mysqli_query($conn,$q);
            $er = mysqli_errno($conn);
            //echo $er;
            if($q_run){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Tracking Id added.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <script>
                    setTimeout(function(){ window.location.href="cart.php"; }, 2000);
                </script>
                <?php
            }
        }
    }

}

//==================================update post function end=======================================
?>