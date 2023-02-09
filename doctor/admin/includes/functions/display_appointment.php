<?php


  function displayappintment(){
      $user=$_SESSION['id'];
      $status=$_SESSION['status'];
      $type = $_SESSION['type'];
      if($type==0){
   $sql ="SELECT * FROM book_appointment  Where u_id=$user ORDER BY id DESC ";
          include ("../../connection/conection.php");
   $qrun = mysqli_query($conn, $sql);

   if(mysqli_num_rows($qrun) >0 ){

      while ($data = mysqli_fetch_array($qrun)){
          ?>
          <tr>
              <td>
                  <h2 class="table-avatar">
                        <a href="#"><?php
                            $doctor = $data['p_doctor'];
                            $sql = "SELECT * FROM user  WHERE u_id ='$doctor'";
                            include("../../connection/conection.php");
                            $qrun = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($qrun) > 0) {
                                $row = mysqli_fetch_array($qrun);
                                $dname = $row['u_name'];
                            }
                            echo $dname ; ?></a>
                  </h2>
              </td>
              <td>Eye Specialist</td>
              <td>
                  <h2 class="table-avatar">
                      <a href="#"><p style="text"> <?php  echo $data['p_name'] ;?> <?php  echo $data['p_lname'] ;?> </p></a>
                  </h2>
              </td>
              <td><?php  echo $data['p_adate'] ;?> <span class="text-primary d-block"><?php  echo $data['p_atime'] ;?></span></td>

              <?php
              if($data['p_status']==0){
                  ?>
                  <td class="text-left">
                      <span class="badge badge-pill bg-danger inv-badge">Pending</span>
                  </td>
                  <?php
              }
              if($data['p_status']==1){
                  ?>
                  <td class="text-left">
                      <span class="badge badge-pill bg-success inv-badge">Accepted</span>
                  </td>
                  <?php
              }


              ?>

              <td class="text-right">
                  $200.00
                  <span class="text-primary d-block">Unpaid</span>
              </td>

              <td class="text-right">
                  <div class="actions">
                      <a class="btn btn-sm bg-danger-light" data-toggle="" href="?delete=<?php echo $data['id']; ?>">
                          <i class="fe fe-trash"></i> Delete
                      </a>
                      <?php  del_post();  ?>
                  </div>
              </td>
          </tr>

          <?php


      }
   }
      }
      //admin display
              if($status==1) {
                    $sql ="SELECT * FROM book_appointment  ORDER BY id DESC ";

                  include ("../../connection/conection.php");
                  $qrun = mysqli_query($conn, $sql);
                  if(mysqli_num_rows($qrun) >0 ){


                      while ($data = mysqli_fetch_array($qrun)){
                          ?>

                          <tr>
                              <td>
                                  <h2 class="table-avatar">

                                        <a href="#">

                                        <?php
                                        $doctor = $data['p_doctor'];
                                        $sql = "SELECT * FROM user  WHERE u_id ='$doctor'";
                                        include("../../connection/conection.php");
                                        $qrun = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($qrun) > 0) {
                                            $row = mysqli_fetch_array($qrun);
                                            $dname = $row['u_name'];
                                        }
                                          echo $dname ; ?>

                                        </a>
                                  </h2>
                              </td>
                              <td>Eye Specialist</td>
                              <td>
                                  <h2 class="table-avatar">
                                        <a href="#"><p style="text"> <?php  echo $data['p_name'] ;?> <?php  echo $data['p_lname'] ;?> </p></a>
                                  </h2>
                              </td>
                              <td><?php  echo $data['p_adate'] ;?> <span class="text-primary d-block"><?php  echo $data['p_atime'] ;?></span></td>

                              <?php
                              if($data['p_status']==0){
                                  ?>
                                  <td class="text-left">
                                      <span class="badge badge-pill bg-danger inv-badge">Pending</span>
                                  </td>
                                  <?php
                              }
                              if($data['p_status']==1){
                                  ?>
                                  <td class="text-left">
                                      <span class="badge badge-pill bg-success inv-badge">Accepted</span>
                                  </td>
                                  <?php
                              }


                              ?>

                              <td class="text-right">
                                  $200.00
                                  <span class="text-primary d-block">Unpaid</span>
                              </td>

                              <td class="text-right">
                                  <div class="actions">
                                      <a class="btn btn-sm bg-primary-light" data-toggle="" href="?approve=<?php echo $data['id']; ?>">
                                          <i class="fe fe-edit"></i> Approve
                                      </a>
                                      <?php  approve();  ?>
                                      <a class="btn btn-sm bg-danger-light" data-toggle="" href="?delete=<?php echo $data['id']; ?>">
                                          <i class="fe fe-trash"></i> Delete
                                      </a>
                                      <?php  del_post();  ?>
                                  </div>
                              </td>
                          </tr>

                          <?php


                      }
                  }

                    }
      //doctor display
      if($type==1) {
          $sql ="SELECT * FROM book_appointment Where p_doctor =$user ORDER BY id DESC ";
          include ("../../connection/conection.php");
          $qrun = mysqli_query($conn, $sql);
          if(mysqli_num_rows($qrun) >0 ){

              while ($data = mysqli_fetch_array($qrun)){
                  ?>

                  <tr>
                      <td>
                          <h2 class="table-avatar">
                              <a href="#"><?php
                                  $doctor = $data['p_doctor'];
                                  $sql = "SELECT * FROM user  WHERE u_id ='$doctor'";
                                  include("../../connection/conection.php");
                                  $qrun = mysqli_query($conn, $sql);
                                  if (mysqli_num_rows($qrun) > 0) {
                                      $row = mysqli_fetch_array($qrun);
                                      $dname = $row['u_name'];
                                  }
                                  echo $dname ; ?></a>
                          </h2>
                      </td>
                      <td>Eye Specialist</td>
                      <td>
                          <h2 class="table-avatar">
                              <a href="#"><p style="text"> <?php  echo $data['p_name'] ;?> <?php  echo $data['p_lname'] ;?> </p></a>
                          </h2>
                      </td>
                      <td><?php  echo $data['p_adate'] ;?> <span class="text-primary d-block"><?php  echo $data['p_atime'] ;?></span></td>

                      <?php
                      if($data['p_status']==0){
                          ?>
                          <td class="text-left">
                              <span class="badge badge-pill bg-danger inv-badge">Pending</span>
                          </td>
                          <?php
                      }
                      if($data['p_status']==1){
                          ?>
                          <td class="text-left">
                              <span class="badge badge-pill bg-success inv-badge">Approved</span>
                          </td>
                          <?php
                      }


                      ?>

                      <td class="text-right">
                          $200.00
                          <span class="text-primary d-block">Unpaid</span>
                      </td>

                      <?php if($data['p_status']==0){?>

                          <td class="text-right">
                              <div class="actions">
                                  <a class="btn btn-sm bg-primary-light" data-toggle="" href="?approve=<?php echo $data['id']; ?>">
                                      <i class="fe fe-edit"></i> Approve
                                  </a>
                                  <?php approve();?>


                                  <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="?delete=<?php echo $data['id']; ?>">
                                      <i class="fe fe-trash"></i> Delete
                                  </a>
                                  <?php  del_post();  ?>
                              </div>
                          </td>
                      <?php }?>
                   <?php if($data['p_status']==1){?>
                      <td class="text-right">
                          <div class="actions">
                              <a class="btn btn-sm bg-danger-light" data-toggle="" href="?delete=<?php echo $data['id']; ?>">
                                  <i class="fe fe-trash"></i> Delete
                              </a>
                              <?php  del_post();  ?>
                          </div>
                      </td>
                   <?php }?>
                  </tr>

                  <?php


              }
          }

      }


  }
?>


<?php
function approve()
{
    if (isset($_REQUEST['approve'])) {
        $id = $_REQUEST['approve'];
        $s=1;
        include ("../../connection/conection.php");
        $q = "UPDATE book_appointment SET p_status='$s' WHERE id='$id'";
        include ("../../connection/conection.php");
        $er = mysqli_error($conn);
        echo $er;
        $q_run=mysqli_query($conn, $q);
        if($q_run){

            ?>

            <script type="text/javascript">
                swal("Your Post", "is Published Now", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="appointment-list.php"; }, 3000);
            </script>
            <?php
        }
    }


}



//====================== post delete function==================================
function del_post()
{
    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['delete'];
        $q = "DELETE FROM book_appointment WHERE id='$id'";
        include ("../../connection/conection.php");
        $er = mysqli_error($conn);
        $q_run=mysqli_query($conn, $q);
        if($q_run){
            ?>
            <script type="text/javascript">
                swal("Your Appoinment", ",is Deleted!", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="appointment-list.php"; }, 2000);
            </script>
            <?php
        }
    }
}
//====================== post delete function end==================================
?>


<!--accept-->
<?php
if (isset($_REQUEST['approve']))
{      //Email information
    include ("../../connection/conection.php");
    $acc = $_REQUEST['approve'];
    $sql ="SELECT * FROM book_appointment WHERE id='$acc'";
    $qrun = mysqli_query($conn, $sql);
    if(mysqli_num_rows($qrun) >0 ){
        while ($data = mysqli_fetch_array($qrun)){
            $name =$data['p_name'];
            $to = $data['p_email'];
            $from ='usamaehsan956@gmail.com';
            $fromName = 'Ainak.Online';
            $mainmessage = 'Appointment Conf0rmation';
            $subject = "Email from Ainak.online";
            $htmlContent ='
<!DOCTYPE html>
<html>


<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
	<center style="width: 100%; background-color: #f1f1f1;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">
    	<!-- BEGIN BODY -->
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
          	<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
          		<tr>
          			<td class="logo" style="text-align: center;">
			            <h1><a href="#">e-Verify</a></h1>
			          </td>
          		</tr>
          	</table>
          </td>
	      </tr><!-- end tr -->
	      <tr>
          <td valign="middle" class="hero bg_white" style="padding: 3em 0 2em 0;">
             </td>
	      </tr><!-- end tr -->
				<tr>
          <td valign="middle" class="hero bg_white" style="padding: 2em 0 4em 0;">
            <table>
            	<tr>
            		<td>
            			<div class="text" style="padding: 0 2.5em; text-align: center;">
            				<h2>Your Appointment is booked</h2>
            				<h3>Amazing deals, updates, interesting news right in your inbox</h3>
            				<p><a href="#" class="btn btn-primary">Yes! Subscribe Me</a></p>
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr><!-- end tr -->
      <!-- 1 Column Text + Button : END -->
      </table>
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="middle" class="bg_light footer email-section">
            <table>
            	<tr>
                <td valign="top" width="33.333%" style="padding-top: 20px;">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style="text-align: left; padding-right: 10px;">
                      	<h3 class="heading">About</h3>
                      	<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      </td>
                    </tr>
                  </table>
                </td>
                <td valign="top" width="33.333%" style="padding-top: 20px;">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style="text-align: left; padding-left: 5px; padding-right: 5px;">
                      	<h3 class="heading">Contact Info</h3>
                      	<ul>
					                <li><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
					                <li><span class="text">+2 392 3929 210</span></a></li>
					              </ul>
                      </td>
                    </tr>
                  </table>
                </td>
                <td valign="top" width="33.333%" style="padding-top: 20px;">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style="text-align: left; padding-left: 10px;">
                      	<h3 class="heading">Useful Links</h3>
                      	<ul>
					                <li><a href="#">Home</a></li>
					                <li><a href="#">About</a></li>
					                <li><a href="#">Services</a></li>
					                <li><a href="#">Work</a></li>
					              </ul>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr><!-- end: tr -->
        <tr>
          <td class="bg_light" style="text-align: center;">
          	<p>No longer want to receive these email? You can <a href="#" style="color: rgba(0,0,0,.8);">Unsubscribe here</a></p>
          </td>
        </tr>
      </table>

    </div>
  </center>
</body>
</html>
';
// Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
            $headers .= 'From: '.$from. "\r\n";
            /*
            $headers .= 'Cc: welcome@example.com' . "\r\n";
            $headers .= 'Bcc: welcome2@example.com' . "\r\n";
            */
// Send email
            if(mail($to, $subject, $htmlContent, $headers)){
                echo 'Email has sent successfully.';
            }else{
                echo 'Email sending failed.';
            }

        }


    }


}
?>
<!---->