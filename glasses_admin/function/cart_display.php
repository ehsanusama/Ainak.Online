<?php
include ("../connection/conection.php");

?>

<?php
function displayinovice(){

if (isset($_REQUEST['inovice'])) {

    $code = $_REQUEST['inovice'];
    $sql ="SELECT * FROM frame_oder  where o_id ='$code' ORDER BY o_id DESC ";
    include ("../connection/conection.php");
    $qrun = mysqli_query($conn, $sql);
    if(mysqli_num_rows($qrun) >0 ){

        while ($data = mysqli_fetch_array($qrun)){
            ?>


            <div class="invoice-container " id="printinv">

                <div class="row" >
                    <div class="col-sm-6 m-b-20">
                        <h2>Ainak.Online</h2>
                    </div>
                    <div class="col-sm-6 m-b-20">
                        <div class="invoice-details">
                            <h3 class="text-uppercase">Invoice #<?php  echo $data['invice_no'] ;?></h3>
                            <ul class="list-unstyled mb-0">
                                <li>Date: <span><?php  echo $data['date'] ;?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 m-b-20">
                        <ul class="list-unstyled mb-0">
                            <li>Ainak.Online</li>
                            <li>Faisalabad,</li>
                            <li>Punjab,</li>
                            <li>Pakistan</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-7 col-xl-8 m-b-20">
                        <h6>Invoice to</h6>
                        <ul class="list-unstyled mb-0">
                            <li><h5 class="mb-0" style="text-transform: capitalize"><strong><?php  echo $data['o_fname'] ;?> <?php  echo $data['o_lname'] ;?></strong></h5></li>
                            <li><a href="#"><?php  echo $data['o_phone'] ;?></a></li>
                            <li><a href="#"><?php  echo $data['o_email'] ;?></a></li>
                        </ul>
                        <p>
                            <?php  echo $data['o_adress'] ;?>
                        </p>

                    </div>
                    <div class="col-sm-6 col-lg-5 col-xl-4 m-b-20">
                        <h6>Payment Details</h6>
                        <ul class="list-unstyled invoice-payment-details mb-0">
                            <li>Payment Method: <span>COD</span></li>
                            <li>Country: <span>Pakistan</span></li>
                            <li>City: <span><?php  echo $data['o_city'] ;?></span></li>

                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>ITEM</th>

                            <th class="d-none d-sm-table-cell">DESCRIPTION</th>
                            <th class="text-nowrap">UNIT COST</th>
                            <th>QTY</th>
                            <th>TOTAL</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><?php  echo $data['product_code'] ;?></td>
                            <td class="d-none d-sm-table-cell">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>PKR 700</td>
                            <td><?php  echo $data['o_quantity'] ;?></td>
                            <?php
                            $unitcost= 700;
                            $quantity = $data['o_quantity'];
                            $total = $unitcost * $quantity;
                            ?>


                            <td>PKR <?php  echo $total ;?></td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                <div>
                    <div class="row invoice-payment">
                        <div class="col-sm-7">
                        </div>
                        <div class="col-sm-5">
                            <div class="m-b-20">
                                <h6>Total due</h6>
                                <div class="table-responsive no-border">
                                    <table class="table mb-0">
                                        <tbody>
                                        <tr>
                                            <th>Subtotal:</th>
                                            <td class="text-right"> PKR <?php  echo $total ;?></td>
                                        </tr>
                                        <tr>
                                            <th>Delivery Charges: <span class="text-regular"></span></th>
                                            <td class="text-right"> PKR 0</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td class="text-right text-primary"><h5>PKR <?php  echo $total ;?></h5></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-info">

                        <h5>Other information</h5>
                        <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero.</p>
                        <script>
                            function printpart (el) {
                                var getFullContent = document.body.innerHTML;
                                var printsection = document.getElementById(el).innerHTML;
                                document.body.innerHTML = printsection;
                                window.print();
                                document.body.innerHTML = getFullContent;
                            }
                        </script>

                    </div>
                </div>

            </div>
            <div class="container pb-4">
                <h5 style="text-align: center;color: black">
                <a href="" onclick="printpart('printinv')">
                   Print Inovice <i class="fa fa-print"  ></i>
                </a>
                </h5>
            </div>

            <?php


        }
    }


}

}