<?php
if (isset($_REQUEST['try'])) {

    $refresh = $_REQUEST['try'];
}


function tryglasses(){

    if (isset($_REQUEST['try'])) {

        $id = $_REQUEST['try'];

        $sql ="SELECT * FROM glasses_details WHERE g_id='$id' ORDER BY g_id DESC ";
        include ("connection/conection.php");
        $qrun = mysqli_query($conn, $sql);
        if(mysqli_num_rows($qrun) >0 ){

            while ($data = mysqli_fetch_array($qrun)){
                $id= $_SESSION['id'];
                $qu ="SELECT * FROM glasses_user WHERE img_id= '$id' ORDER BY img_id DESC";
                include ("connection/conection.php");
                $qn = mysqli_query($conn, $qu);
                $row = mysqli_fetch_array($qn);

                ?>
                <div class=" tryglasses">
                    <img id="" src="glasses_admin\login\user_images/<?php echo $row['gu_pic'] ?>" class="img-fluid imge" alt="upload image" >
                    <img id="myImg" class="top-img" src="glasses_admin/glasses_images/<?php echo $data['g_pic1'] ?>"  width="250">
                </div>

                <?php


            }
        }





    }

}
?>

<?php

function del_img()
{
    if (isset($_REQUEST['try'])) {

        $refresh = $_REQUEST['try'];
    }

    if (isset($_REQUEST['delete'])) {

        $id = $_REQUEST['delete'];
        $q = "DELETE FROM glasses_user WHERE img_id='$id'";
        include ("connection/conection.php");
        $er = mysqli_error($conn);
        $q_run=mysqli_query($conn, $q);
        if($q_run){

            ?>
            <script>
                setTimeout(function(){ window.location.href="shop.php?displayall" });
            </script>
            <?php
        }
    }
}

?>





