<?php
$search_value = $_REQUEST["search"];
include ("../connection/conection.php");
$sql= "SELECT * FROM frame_oder WHERE o_fname LIKE'%{$search_value}%' OR  o_lname LIKE'%{$search_value}%' OR  o_tracking LIKE'%{$search_value}%' OR  invice_no LIKE'%{$search_value}%' ORDER BY o_id DESC  ";
$result=mysqli_query($conn,$sql)or die("SQL Query Failed.");
$output="";
if(mysqli_num_rows($result)>0) {
    $output = '<table class="datatable table table-hover table-center mb-0">
                                           <thead>
                                            <tr>
                                                <th>Invoice No</th>
                                                <th>Product Code</th>
                                                 <th>Name</th>
                                                 <th>Email</th>
                                                 <th>Phone</th>
                                                 <th>Status</th>
                                                 <th>Quantity</th>
                                                <th>Tracking Id</th>
                                            </tr>
                                           </thead >';
           while ($row = mysqli_fetch_assoc($result)) {
                    $output.= "
                      <tr>
                <td>
                {$row['st_name'] }  {$row['st_lname'] }
                </td>
                <td>
                    <h2 class='table-avatar' >
                        {$row['product_code'] }
                    </h2>
                    
                </td>
                <td>
                    <h2 class='table-avatar'>
                    <p style='text-transform: capitalize'> {$row['o_fname'] }     {$row['o_lname'] }</p>
                        
                    </h2>
                </td>
               
                    
                <td>
                    <h2 class='table-avatar'>
                        {$row['o_email'] }
                    </h2>
                </td>
                <td>
                    <h2 class='table-avatar'>
                        {$row['o_phone'] }
                    </h2>
                </td>
                
          
               ";
                if($row['o_status']==0){
                    $output.='
                    <td class="text-left">
                        <span class="badge badge-pill bg-danger inv-badge">Pending</span>
                    </td>
                    
                    ';

                }
               if($row['o_status']==1){
                   $output.='
                    <td class="text-left">
                        <span class="badge badge-pill bg-primary inv-badge">Accepted</span>
                    </td>
                    
                    ';

               }
               if($row['o_status']==2){
                   $output.='
                    <td class="text-left">
                        <span class="badge badge-pill bg-success inv-badge">Delivered</span>
                    </td>
                    
                    ';
               }
               if($row['o_status']==3){
                   $output.='
                    <td class="text-left">
                        <span class="badge badge-pill bg-danger-light inv-badge">Rejected</span>
                    </td>
                    ';
               }

               $output.= " 
                <td>
                <h2 class='table-avatar'>
                        {$row['o_quantity'] }
                    </h2> 
                </td>
                <td>
                <h2 class='table-avatar'>
                        {$row['o_tracking'] }
                    </h2> 
                </td>
            </tr> 
                    ";

       }

       $output.="</table>";
       echo  $output;
}
else{
    echo "No Data Found";
}
?>
