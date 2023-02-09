<?php


  function displayuser(){
      $user=$_SESSION['id'];
      $status=$_SESSION['status'];
      $type = $_SESSION['type'];
      //admin display
              if($status==1) {
                    $sql ="SELECT * FROM user  ORDER BY u_id DESC ";
                  include ("../../connection/conection.php");
                  $qrun = mysqli_query($conn, $sql);
                  if(mysqli_num_rows($qrun) >0 ){

                      while ($data = mysqli_fetch_array($qrun)){
                          ?>

                          <tr>
                              <td>
                                  <h2 class="table-avatar">
                                       <a href="#"><?php  echo $data['u_name'] ;?></a>
                                  </h2>
                              </td>
                              <td>
                                  <h2 class="table-avatar">
                                      <a href="#"><p style="text"> <?php  echo $data['u_email'] ;?>  </p></a>
                                  </h2>
                              </td>
                              <td>
                                  <h2 class="table-avatar">
                                      <a href="#"><p style="text"> <?php  echo $data['u_phone'] ;?>  </p></a>
                                  </h2>
                              </td>


                              <td class="text-right">
                                  <div class="actions">
                                      <a class="btn btn-sm bg-danger-light" data-toggle="" href="?delete=<?php echo $data['u_id']; ?>">
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
?>


<?php




//====================== post delete function==================================
function del_user()
{
    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['delete'];
        $q = "DELETE FROM user WHERE u_id='$id'";
        include ("../../connection/conection.php");
        $er = mysqli_error($conn);
        $q_run=mysqli_query($conn, $q);
        if($q_run){
            ?>
            <script type="text/javascript">
                swal("User", ",is Deleted!", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="patient-list.php"; }, 2000);
            </script>
            <?php
        }
    }
}
//====================== post delete function end==================================
?>
