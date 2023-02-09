<?php
//==================================logout function====================================
function logout(){
    if(isset($_GET['logout'])){
        if(session_destroy()){
            ?>
            <script>
                setTimeout(function(){ window.location.href="../admin/login.php"; }, 2000);
            </script>
            <?php
        }
    }
}
?>