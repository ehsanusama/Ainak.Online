<?php

session_start();
function login(){
    if(isset($_POST['login'])){
        include ("../../connection/conection.php");
        $email= mysqli_real_escape_string($conn,$_POST['login_email']);
        $pass= mysqli_real_escape_string($conn,$_POST['login_pass']);
        if($email!="" && $pass!="")
        { //if  not empty check
            $q = "Select * From user WHERE u_email='$email' and u_password='$pass' ";
            include ("../../connection/conection.php");
            $q_run = mysqli_query($conn,$q);
            $data = mysqli_fetch_array($q_run);
            if (mysqli_num_rows($q_run)>0)
            {
                if($data['u_email']==$email && $data['u_password']==$pass){
                    $_SESSION['id'] = $data['u_id'];
                    $_SESSION['name'] = $data['u_name'];
                    $_SESSION['em']=$data['u_email'];
                    $_SESSION['status']=$data['u_status'];
                    $_SESSION['type']=$data['u_type'];
                    ?>
                    <p class="white-text"><strong class="white-text">congrats</strong></p>
                    <script>

                        setTimeout(function(){ window.location.href="index.php"; }, 1000);
                    </script>
                    <?php

                }
                else
                {
                    echo "Please Login First Or Enter Correct Email Or Password";
                    ?>


                    <?php
                }

            }
            else
            {
                echo "Please Login First Or Enter Correct Email Or Password!";
                ?>


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
                setTimeout(function(){ window.location.href="login.php"; }, 2000);
            </script>
            <?php
        }

    }

}
?>




