<?php
include ("../../connection/conection.php");
    $name = $_POST['p_name'];
    $lname = $_POST['p_lname'];
    $phone = $_POST['p_phone'];
    $email = $_POST['p_email'];
    $gender = $_POST['p_gender'];
    $doctor = $_POST['p_doctor'];
    $city = $_POST['p_city'];
    $date= $_POST['p_adate'];
    $time = $_POST['p_atime'];
    $uid = $_POST['u_id'];
    $status= 0;

    $sql = "INSERT INTO book_appointment(p_name,p_lname,p_phone,p_email,p_gender,p_doctor,p_city,p_adate,p_atime,p_status,u_id)
                                 VALUES ('$name','$lname','$phone','$email','$gender','$doctor','$city','$date','$time','$status','$uid')";
    if(mysqli_query($conn, $sql)){
        $er= mysqli_error($conn);
        echo $er;
        echo 1;
    }else{
        echo 0;
    }
?>


