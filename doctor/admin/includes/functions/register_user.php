

<?php
include ("../../connection/conection.php");
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['password'];
$status= 0;// 0 for normal users 1 for admin

$qa="SELECT * FROM user  WHERE u_email='$email'";
include ("../../connection/conection.php");
$query_run = mysqli_query($conn, $qa);
if(!(mysqli_num_rows($query_run)>0)) {
    $sql = "INSERT INTO user(u_name,u_phone,u_email,u_password,u_status)
                                 VALUES ('$name','$phone','$email','$pass','$status')";
    include ("../../connection/conection.php");
    if (mysqli_query($conn, $sql)) {
        include ("../../connection/conection.php");
        $er = mysqli_error($conn);
        echo $er;
        echo 1;
    } else {
        echo 0;
    }
}  else{
    echo 3;//user exist
}


?>
