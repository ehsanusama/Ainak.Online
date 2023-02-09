

<?php

session_start();
function login(){
    if(isset($_POST['login'])){
        include ("../../connection/conection.php");
        $email= mysqli_real_escape_string($conn,$_POST['login_email']);
        $pass= mysqli_real_escape_string($conn,$_POST['login_pass']);
        if($email!="" && $pass!="")
        { //if  not empty check
            $q = "Select * From glasses_user WHERE gu_email='$email' and gu_password='$pass' ";
            include ("../../connection/conection.php");
            $q_run = mysqli_query($conn,$q);
            $data = mysqli_fetch_array($q_run);
            if (mysqli_num_rows($q_run)>0)
            {
                if($data['gu_email']==$email && $data['gu_password']==$pass){
                $_SESSION['id'] = $data['gu_id'];
                $_SESSION['em']=$data['gu_email'];
                $_SESSION['name']=$data['gu_name'];
                $_SESSION['ame']=$data['gu_lname'];
                $_SESSION['type']=$data['gu_type'];
                    ?>
                    <div class="card-panel green">
                        <p class="white-text"><strong class="white-text">Login Success </strong>Please Wait</p>
                    </div>

                    <?php   if($data['gu_type']==1){ ?>
                    <script>
                        setTimeout(function(){ window.location.href="../../index.php"; });
                    </script>
                        <?php   }     ?>
                    <?php   if($data['gu_type']==2){      ?>
                        <script>
                            setTimeout(function(){ window.location.href="../glasses_details.php"; });
                        </script>
                    <?php   }     ?>
                    <?php

                }
                else
                {
                    ?>
                    <div class="card-panel red">
                        <p class="white-text" style="margin-top: -1%"><strong class="white-text"><strong>Error!</strong>Please Login First Or Enter Correct Email Or Password</p>
                        <script>
                            $("#Outer").show();
                            setTimeout(function(){ window.location="login.php"; });
                        </script>
                    </div>

                    <?php
                }

            }
           else
            {

                ?>
                <div class="card-panel red">
                    <p class="white-text"><strong class="white-text">Attention!</strong>Please Login First Or Enter Correct Email Or Password!</p>
                </div>
                    <script>

                        setTimeout(function(){ window.location="login.php"; }, 1000);
                    </script>


                <?php
            }
        }
        else
        {
            ?>
            <div class="card-panel red">
                <p class="white-text"><strong class="white-text">Attention!</strong>Don't leave any Field Empty</p>
            </div>
            <script>
                setTimeout(function(){ window.location.href="login.php"; }, 1000);
            </script>
            <?php
        }

}

}
//==================================create user function=======================================
function signup_user(){
    if(isset($_REQUEST['register'])){
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email= $_REQUEST['email'];
        $password= $_REQUEST['password'];
        $type= 1;//1 for normal users : 2 for admin

//        //file uploading code below
//        $file = $_FILES['gu_pic']['name'];
//        $folder="user_images/";
//        $path=$folder.$file;


       // $user_activation_code = md5(rand());

        $qa="SELECT * FROM glasses_user  WHERE gu_email='$email'";
        include ("../../connection/conection.php");
        $query_run = mysqli_query($conn, $qa);
        if(!(mysqli_num_rows($query_run)>0)){
        if($fname!="" && $lname!="" && $email!="" && $password!=""){
                $q = "INSERT INTO glasses_user (gu_name,gu_lname, gu_email,gu_password,gu_type)
                                 VALUES('$fname','$lname','$email','$password','$type')";
                include ("../../connection/conection.php");
            $q_run= mysqli_query($conn,$q);
                $error= mysqli_error($conn);
                echo $error;
                if($q_run) {
                    ?>
                    <script type="text/javascript">
                        swal("Congrats!", ", Your account is created!", "success");
                    </script>
                    <script>
                        setTimeout(function(){ window.location.href="../../index.php"; });
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
                setTimeout(function(){ window.location.href="register.php"; }, 2000);
            </script>
            <?php
        }
        }
        else{

            ?>
            <script type="text/javascript">
                swal("Attention!", ", User Already Existed!", "error");
                setTimeout(function(){ window.location.href="register.php"; }, 2000);
            </script>
            <?php

        }
    }
    //if isset
}
//==================================create user function end====================================
?>


