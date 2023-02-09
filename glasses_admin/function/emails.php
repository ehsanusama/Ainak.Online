<!---->
<!--accept-->
<?php

//====================== order accept mail==================================
if (isset($_REQUEST['accept']))
{      //Email information
    include ("../connection/conection.php");
    $acc = $_REQUEST['accept'];
    $sql ="SELECT * FROM frame_oder WHERE o_id='$acc'";
    $qrun = mysqli_query($conn, $sql);
    if(mysqli_num_rows($qrun) >0 ){
        while ($data = mysqli_fetch_array($qrun)){
            $name =$data['o_fname'];
            $pcode =$data['product_code'];
            $adress =$data['o_adress'];
            $track = $data['o_tracking'];
            $to = $data['o_email'];
            $from ='usamaehsan956@gmail.com';
            $fromName = 'Ainak.Online';
            $mainmessage = 'Oder Conf0rmation';
            $subject = "Email from Ainak.online";
            $htmlContent ='
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <title>Ainak.Online</title>
</head>
<body>

<table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%;max-width:600px" align="center">
    <tbody><tr>
        <td role="modules-container" style="padding:0px 0px 0px 0px;color:#000000;text-align:left" bgcolor="#FFFFFF" width="100%" align="left"><table class="m_-5950082754398973914preheader" role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="display:none!important;opacity:0;color:transparent;height:0;width:0">
            </table><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module"  bgcolor="#f0fff0">
            <tbody>
            <tr role="module-content">
                <td height="100%" valign="top">
                    <table class="m_-5950082754398973914column" style="width:100%;border-spacing:0;border-collapse:collapse;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="">
                        <tbody>
                        <tr>
                            <td >
<!--                                logo-->
                                <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#0c5460" style="table-layout:fixed;">
                                    <tbody>
                                    <tr>
                                        <td style="padding:35px;line-height:20px;text-align:inherit;background-color:#044767" height="100%" valign="top" bgcolor="#ffffff" role="module-content"><div><div style="color: white;font-size: 24px;font-weight: 700;font-family:sans-serif;text-align:left"><h1 style="color: white;font-size: 24px;font-weight: 700;font-family:sans-serif;">AINAK.ONLINE&nbsp;</h1></div><div></div></div></td>
                                    </tr>

                                    </tbody>
                                </table>

                                <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">

                            </table><table class="m_-5950082754398973914wrapper" role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>

                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>

                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:50px 30px 18px 30px;line-height:36px;text-align:inherit;background-color:#ffffff" height="100%" valign="top" bgcolor="#ffffff" role="module-content"><div><div style="font-family:inherit;text-align:center"><span style="font-size: 34px;font-weight: 700;font-family:sans-serif;text-align:center;text-transform:capitalize">Thank You For Your Order '. $name .'!&nbsp;</span></div><div></div></div></td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:18px 30px 18px 30px;line-height:22px;text-align:inherit;background-color:#ffffff" height="100%" valign="top" bgcolor="#ffffff" role="module-content"><div><div style="font-family:inherit;text-align:center"><span style="font-size:18px">Please verify your email address to</span><br><span style="color:#000000;font-size:18px;font-family:arial,helvetica,sans-serif"> Manage Your Class Notes and Assignments</span><span style="font-size:18px">.</span></div>
                                        <div style="font-family:inherit;text-align:center"><span style="color:#ffbe00;font-size:18px"><strong>Thank you!&nbsp;</strong></span></div><div></div></div></td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 20px 0px" role="module-content" bgcolor="#ffffff">
                                    </td>
                                </tr>
                                </tbody>
                            </table><table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                <tbody>

                                <tr>
                                    <table style="background: white;font-family: sans-serif"  border="0" cellpadding="0" cellspacing="0" width="100%" >
                                        <tr style="background: gainsboro;">
                                            <th width="80%" style="text-align:left;  color: #000; padding: 15px">Item</th>
                                            <th width="20%" style="text-align:right; padding: 15px; color: #000;">Price</th>
                                        </tr>
                                        <tr >
                                            <td valign="middle" width="80%" style="text-align:left; padding: 15px;">
                                                <div class="product-entry">

                                                    <div>
                                                        <h3>Glasses</h3>
                                                        <span>'. $pcode .'</span>
                                                     
                                                    </div>
                                                </div>
                                            </td>
                                            <td valign="middle" width="20%" style="text-align:left; padding: 0 2.5em;">
                                                <span  style="color: #000; font-size: 20px;">PKR1120</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td valign="middle" width="80%" style="text-align:left; padding: 15px">
                                                <div class="product-entry">
                                                    <div class="">
                                                        <h3>Delivery Address</h3>

                                                        <p>'. $adress .'</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle" style="text-align:left; padding: 1em 2.5em;">

                                            </td>
                                        </tr>
                                    </table>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#ffffff" style="padding:0px 0px 0px 0px">
                                        <table border="0" cellpadding="0" cellspacing="0" class="m_-5950082754398973914wrapper-mobile" style="text-align:center">
                                            <tbody>
                                            <tr>
                                                <td align="center" bgcolor="#ffbe00" style="border-radius:6px;font-size:16px;text-align:center;background-color:inherit">
                                                     <p>Order Tracking Id# : '. $track .'</p>
                                                     </td>
                                         
                                            </tr>
                                            <tr>
                                          
                                                <td align="center" bgcolor="#ffbe00" style="border-radius:6px;font-size:16px;text-align:center;background-color:inherit">
                                                    <a href="#" style="background-color:#044767;border-radius:0px;color:white;display:inline-block;font-size:14px;font-weight:normal;letter-spacing:0px;line-height:normal;padding:12px 40px 12px 40px;text-align:center;text-decoration:none;font-family:sans-serif" target="_blank" data-saferedirecturl="">Track Order</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 50px 0px" role="module-content" bgcolor="#ffffff">
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:50px 30px 50px 30px;line-height:22px;text-align:inherit;background-color:#52A3C9" height="100%" valign="top" bgcolor="#6e6e6e" role="module-content"><div><div style="font-family:inherit;text-align:center"><span style="color:#ffffff;font-size:18px"><strong>What You Can Do on <span class="il">Vaccinate</span>Me</strong></span></div></td>
                                </tr>
                                </tbody>
                            </table><table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                <tbody>
                                <tr>
                                    <td align="center" bgcolor="#52A3C9" style="padding:0px 0px 0px 0px">
                                        <table border="0" cellpadding="0" cellspacing="0" class="m_-5950082754398973914wrapper-mobile" style="text-align:center">
                                            <tbody>
                                            <tr>
                                                <td align="center" bgcolor="#044767" style="border-radius:6px;font-size:16px;text-align:center;background-color:inherit">
                                                    <a href="#" style="background-color:#52A3C9;border-radius:0px;color:white;display:inline-block;font-size:14px;font-weight:normal;letter-spacing:0px;line-height:normal;padding:12px 40px 12px 40px;text-align:center;text-decoration:none;font-family:sans-serif" target="_blank" data-saferedirecturl="">Contact US</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 30px 0px" role="module-content" bgcolor="#52A3C9">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="white" style="border-radius:6px;font-size:16px;text-align:center;margin-top: -15px;background-color:white"><a style="background-color:#044767;border:1px solid #f5f8fd;border-color:#044767;border-radius:25px;border-width:1px;color:white;display:inline-block;font-size:13px;font-weight:normal;letter-spacing:0px;line-height:normal;padding:5px 18px 5px 18px;text-align:center;text-decoration:none;border-style:solid;font-family:helvetica,sans-serif">♥ POWERED BY Ainak.Online</a></td>
                                </tr>
                                </tbody>
                            </table></td>
                        </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            </tbody>
        </table>

        </td></tr></tbody><tbody>
<tr>
</tr>
</tbody>
</table>
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

<!--reject-->
<?php
//====================== order reject mail==================================
if (isset($_REQUEST['rejected']))
{      //Email information
    include ("../connection/conection.php");
    $acc = $_REQUEST['rejected'];
    $sql ="SELECT * FROM frame_oder WHERE o_id='$acc'";
    $qrun = mysqli_query($conn, $sql);
    if(mysqli_num_rows($qrun) >0 ){
        while ($data = mysqli_fetch_array($qrun)){
            $name =$data['o_fname'];
            $pcode =$data['product_code'];
            $adress =$data['o_adress'];
            $to = $data['o_email'];
            $from ='usamaehsan956@gmail.com';
            $fromName = 'Ainak.Online';
            $mainmessage = 'Oder Conformation';
            $subject = "Email from Ainak.online";
            $htmlContent ='
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <title>Ainak.Online</title>
</head>
<body>

<table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%;max-width:600px" align="center">
    <tbody><tr>
        <td role="modules-container" style="padding:0px 0px 0px 0px;color:#000000;text-align:left" bgcolor="#FFFFFF" width="100%" align="left"><table class="m_-5950082754398973914preheader" role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="display:none!important;opacity:0;color:transparent;height:0;width:0">
            </table><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module"  bgcolor="#f0fff0">
            <tbody>
            <tr role="module-content">
                <td height="100%" valign="top">
                    <table class="m_-5950082754398973914column" style="width:100%;border-spacing:0;border-collapse:collapse;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="">
                        <tbody>
                        <tr>
                            <td >
<!--                                logo-->
                                <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#0c5460" style="table-layout:fixed;">
                                    <tbody>
                                    <tr>
                                        <td style="padding:35px;line-height:20px;text-align:inherit;background-color:#044767" height="100%" valign="top" bgcolor="#ffffff" role="module-content"><div><div style="color: #17bebb;font-size: 24px;font-weight: 700;font-family:sans-serif;text-align:left"><h1 style="color:white;font-size: 34px;font-weight: 700;font-family:sans-serif;">AINAK.ONLINE&nbsp;</h1></div><div></div></div></td>
                                    </tr>

                                    </tbody>
                                </table>

                                <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">

                            </table><table class="m_-5950082754398973914wrapper" role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>

                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>

                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:50px 30px 18px 30px;line-height:36px;text-align:inherit;background-color:#ffffff" height="100%" valign="top" bgcolor="#ffffff" role="module-content"><div><div style="font-family:inherit;text-align:center"><span style="font-size: 34px;font-weight: 700;font-family:sans-serif;text-align:center;text-transform:capitalize">Soory  Your Order is out of Stock '. $name .'!&nbsp;</span></div><div></div></div></td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:18px 30px 18px 30px;line-height:22px;text-align:inherit;background-color:#ffffff" height="100%" valign="top" bgcolor="#ffffff" role="module-content"><div><div style="font-family:inherit;text-align:center"><span style="font-size:18px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</span><br><span style="color:#000000;font-size:18px;font-family:arial,helvetica,sans-serif"></span></div>
                                        <div></div></div></td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 20px 0px" role="module-content" bgcolor="#ffffff">
                                    </td>
                                </tr>
                                </tbody>
                            </table><table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                <tbody>

                                <tr>
                                    <table style="background: white;font-family: sans-serif"  border="0" cellpadding="0" cellspacing="0" width="100%" >
                                        <tr style="background: gainsboro;">
                                            <th width="80%" style="text-align:left;  color: #000; padding: 15px">Item</th>
                                            <th width="20%" style="text-align:right; padding: 15px; color: #000;">Price</th>
                                        </tr>
                                        <tr >
                                            <td valign="middle" width="80%" style="text-align:left; padding: 15px;">
                                                <div class="product-entry">

                                                    <div>
                                                        <h3>Glasses</h3>
                                                        <span>'. $pcode .'</span>
                                                     
                                                    </div>
                                                </div>
                                            </td>
                                            <td valign="middle" width="20%" style="text-align:left; padding: 0 2.5em;">
                                                <span  style="color: #000; font-size: 20px;">PKR1120</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td valign="middle" width="80%" style="text-align:left; padding: 15px">
                                                <div class="product-entry">
                                                    <div class="">
                                                        <h3>Delivery Address</h3>

                                                        <p>'. $adress .'</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle" style="text-align:left; padding: 1em 2.5em;">

                                            </td>
                                        </tr>
                                    </table>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#ffffff" style="padding:0px 0px 0px 0px">
                                        <table border="0" cellpadding="0" cellspacing="0" class="m_-5950082754398973914wrapper-mobile" style="text-align:center">
                                            <tbody>
                                            <tr>
                                                <td align="center" bgcolor="#ffbe00" style="border-radius:6px;font-size:16px;text-align:center;background-color:inherit">
                                                    <a href="#" style="background-color:#044767;border-radius:0px;color:white;display:inline-block;font-size:14px;font-weight:normal;letter-spacing:0px;line-height:normal;padding:12px 40px 12px 40px;text-align:center;text-decoration:none;font-family:sans-serif" target="_blank" data-saferedirecturl="">Track Order</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 50px 0px" role="module-content" bgcolor="#ffffff">
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:50px 30px 50px 30px;line-height:22px;text-align:inherit;background-color:#52A3C9" height="100%" valign="top" bgcolor="#6e6e6e" role="module-content"><div><div style="font-family:inherit;text-align:center"><span style="color:#ffffff;font-size:18px"><strong>What You Can Do on <span class="il">Vaccinate</span>Me</strong></span></div></td>
                                </tr>
                                </tbody>
                            </table><table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                <tbody>
                                <tr>
                                    <td align="center" bgcolor="#52A3C9" style="padding:0px 0px 0px 0px">
                                        <table border="0" cellpadding="0" cellspacing="0" class="m_-5950082754398973914wrapper-mobile" style="text-align:center">
                                            <tbody>
                                            <tr>
                                                <td align="center" bgcolor="#044767" style="border-radius:6px;font-size:16px;text-align:center;background-color:inherit">
                                                    <a href="#" style="background-color:#52A3C9;border-radius:0px;color:white;display:inline-block;font-size:14px;font-weight:normal;letter-spacing:0px;line-height:normal;padding:12px 40px 12px 40px;text-align:center;text-decoration:none;font-family:sans-serif" target="_blank" data-saferedirecturl="">Contact US</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 30px 0px" role="module-content" bgcolor="#52A3C9">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="white" style="border-radius:6px;font-size:16px;text-align:center;margin-top: -15px;background-color:white"><a style="background-color:#044767;border:1px solid #f5f8fd;border-color:#044767;border-radius:25px;border-width:1px;color:white;display:inline-block;font-size:13px;font-weight:normal;letter-spacing:0px;line-height:normal;padding:5px 18px 5px 18px;text-align:center;text-decoration:none;border-style:solid;font-family:helvetica,sans-serif">♥ POWERED BY Ainak.Online</a></td>
                                </tr>
                                </tbody>
                            </table></td>
                        </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            </tbody>
        </table>

        </td></tr></tbody><tbody>
<tr>
</tr>
</tbody>
</table>
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
<!--reject-->


<!--reject-->
<?php
//====================== order deliver mail==================================
if (isset($_REQUEST['deliver']))
{      //Email information
    include ("../connection/conection.php");
    $acc = $_REQUEST['deliver'];
    $sql ="SELECT * FROM frame_oder WHERE o_id='$acc'";
    $qrun = mysqli_query($conn, $sql);
    if(mysqli_num_rows($qrun) >0 ){
        while ($data = mysqli_fetch_array($qrun)){
            $name =$data['o_fname'];
            $pcode =$data['product_code'];
            $adress =$data['o_adress'];
            $track = $data['o_tracking'];
            $to = $data['o_email'];
            $from ='usamaehsan956@gmail.com';
            $fromName = 'Ainak.Online';
            $mainmessage = 'Oder Conformation';
            $subject = "Email from Ainak.online";
            $htmlContent ='
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <title>Ainak.Online</title>
</head>
<body>

<table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%;max-width:600px" align="center">
    <tbody><tr>
        <td role="modules-container" style="padding:0px 0px 0px 0px;color:#000000;text-align:left" bgcolor="#FFFFFF" width="100%" align="left"><table class="m_-5950082754398973914preheader" role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="display:none!important;opacity:0;color:transparent;height:0;width:0">
            </table><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module"  bgcolor="#f0fff0">
            <tbody>
            <tr role="module-content">
                <td height="100%" valign="top">
                    <table class="m_-5950082754398973914column" style="width:100%;border-spacing:0;border-collapse:collapse;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="">
                        <tbody>
                        <tr>
                            <td >
<!--                                logo-->
                                <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#0c5460" style="table-layout:fixed;">
                                    <tbody>
                                    <tr>
                                        <td style="padding:35px;line-height:20px;text-align:inherit;background-color:#044767" height="100%" valign="top" bgcolor="#ffffff" role="module-content"><div><div style="color: #17bebb;font-size: 24px;font-weight: 700;font-family:sans-serif;text-align:left"><h1 style="color:white;font-size: 34px;font-weight: 700;font-family:sans-serif;">AINAK.ONLINE&nbsp;</h1></div><div></div></div></td>
                                    </tr>

                                    </tbody>
                                </table>

                                <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">

                            </table><table class="m_-5950082754398973914wrapper" role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>

                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>

                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:50px 30px 18px 30px;line-height:36px;text-align:inherit;background-color:#ffffff" height="100%" valign="top" bgcolor="#ffffff" role="module-content"><div><div style="font-family:inherit;text-align:center"><span style="font-size: 34px;font-weight: 700;font-family:sans-serif;text-align:center;text-transform:capitalize">Your Order is delivered '. $name .'!&nbsp;</span></div><div></div></div></td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:18px 30px 18px 30px;line-height:22px;text-align:inherit;background-color:#ffffff" height="100%" valign="top" bgcolor="#ffffff" role="module-content"><div><div style="font-family:inherit;text-align:center"><span style="font-size:18px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</span><br><span style="color:#000000;font-size:18px;font-family:arial,helvetica,sans-serif"></span></div>
                                        <div></div></div></td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 20px 0px" role="module-content" bgcolor="#ffffff">
                                    </td>
                                </tr>
                                </tbody>
                            </table><table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                <tbody>

                                <tr>
                                    <table style="background: white;font-family: sans-serif"  border="0" cellpadding="0" cellspacing="0" width="100%" >
                                        <tr style="background: gainsboro;">
                                            <th width="80%" style="text-align:left;  color: #000; padding: 15px">Item</th>
                                            <th width="20%" style="text-align:right; padding: 15px; color: #000;">Price</th>
                                        </tr>
                                        <tr >
                                            <td valign="middle" width="80%" style="text-align:left; padding: 15px;">
                                                <div class="product-entry">

                                                    <div>
                                                        <h3>Glasses</h3>
                                                        <span>'. $pcode .'</span>
                                                     
                                                    </div>
                                                </div>
                                            </td>
                                            <td valign="middle" width="20%" style="text-align:left; padding: 0 2.5em;">
                                                <span  style="color: #000; font-size: 20px;">PKR1120</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td valign="middle" width="80%" style="text-align:left; padding: 15px">
                                                <div class="product-entry">
                                                    <div class="">
                                                        <h3>Delivery Address</h3>

                                                        <p>'. $adress .'</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle" style="text-align:left; padding: 1em 2.5em;">

                                            </td>
                                        </tr>
                                    </table>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#ffffff" style="padding:0px 0px 0px 0px">
                                        <table border="0" cellpadding="0" cellspacing="0" class="m_-5950082754398973914wrapper-mobile" style="text-align:center">
                                            <tbody>
                                            <tr>
                                                <td align="center" bgcolor="#ffbe00" style="border-radius:6px;font-size:16px;text-align:center;background-color:inherit">
                                                     <p>Order Tracking Id# : '. $track .'</p>
                                                     </td>
                                         
                                            </tr>
                                            <tr>
                                            
                                                <td align="center" bgcolor="#ffbe00" style="border-radius:6px;font-size:16px;text-align:center;background-color:inherit">
                                                    <a href="#" style="background-color:#044767;border-radius:0px;color:white;display:inline-block;font-size:14px;font-weight:normal;letter-spacing:0px;line-height:normal;padding:12px 40px 12px 40px;text-align:center;text-decoration:none;font-family:sans-serif" target="_blank" data-saferedirecturl="">Track Order</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 50px 0px" role="module-content" bgcolor="#ffffff">
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:50px 30px 50px 30px;line-height:22px;text-align:inherit;background-color:#52A3C9" height="100%" valign="top" bgcolor="#6e6e6e" role="module-content"><div><div style="font-family:inherit;text-align:center"><span style="color:#ffffff;font-size:18px"><strong>What You Can Do on <span class="il">Vaccinate</span>Me</strong></span></div></td>
                                </tr>
                                </tbody>
                            </table><table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                <tbody>
                                <tr>
                                    <td align="center" bgcolor="#52A3C9" style="padding:0px 0px 0px 0px">
                                        <table border="0" cellpadding="0" cellspacing="0" class="m_-5950082754398973914wrapper-mobile" style="text-align:center">
                                            <tbody>
                                            <tr>
                                                <td align="center" bgcolor="#044767" style="border-radius:6px;font-size:16px;text-align:center;background-color:inherit">
                                                    <a href="#" style="background-color:#52A3C9;border-radius:0px;color:white;display:inline-block;font-size:14px;font-weight:normal;letter-spacing:0px;line-height:normal;padding:12px 40px 12px 40px;text-align:center;text-decoration:none;font-family:sans-serif" target="_blank" data-saferedirecturl="">Contact US</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 30px 0px" role="module-content" bgcolor="#52A3C9">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="white" style="border-radius:6px;font-size:16px;text-align:center;margin-top: -15px;background-color:white"><a style="background-color:#044767;border:1px solid #f5f8fd;border-color:#044767;border-radius:25px;border-width:1px;color:white;display:inline-block;font-size:13px;font-weight:normal;letter-spacing:0px;line-height:normal;padding:5px 18px 5px 18px;text-align:center;text-decoration:none;border-style:solid;font-family:helvetica,sans-serif">♥ POWERED BY Ainak.Online</a></td>
                                </tr>
                                </tbody>
                            </table></td>
                        </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            </tbody>
        </table>

        </td></tr></tbody><tbody>
<tr>
</tr>
</tbody>
</table>
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
<!--reject-->