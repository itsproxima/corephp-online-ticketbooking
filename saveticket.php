<?php
session_start();
$status=$_SESSION["status"];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//echo $status;
$custemail=$_SESSION["customer_email"];


$date=date("Y-m-d H:i:s");
//$date = strtotime($todays_date);
$ticketId=$_SESSION["ticket_id"];


include("connectdb.php");

 $query="insert into order_status_tbl(ticket_id,satus,date) values ('$ticketId','$status','$date')";
          
            if ($conn->query($query) === TRUE) {
             // echo "New record created successfully";
          } else {
               //$error=$query.$conn->error;
               //echo "<script type='text/javascript'>window.location.href = 'http://koacon2019.com/onlineregistration/success.php?msg=$error;</script>";
               echo "Error: " . $query . "<br>" . $conn->error;
          }
          
          
          
          
          
//echo "nowhere";
//echo "<script type='text/javascript'> document.write(5 + 6); window.location.href = 'http://koacon2019.com/onlineregistration/success.php?msg=Thank You! for booking with us. welcome to the event ';</script>";
if($status=="Success"){
    

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'server3.hostsoch.in';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'reg@koacon2019.com';                 // SMTP username
    $mail->Password = 'rahulbalboni@123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('reg@koacon2019.com', 'Koacon2019');
   // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress($custemail);               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Koacon 2019 Registration Details';
    $mail->Body    = '
    <!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Email Receipt</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
  /**
   * Google webfonts. Recommended to include the .woff version for cross-client compatibility.
   */
  @media screen {
    @font-face {
      font-family: "Source Sans Pro";
      font-style: normal;
      font-weight: 400;
      src: local("Source Sans Pro Regular"), local("SourceSansPro-Regular"), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format("woff");
    }
    @font-face {
      font-family: "Source Sans Pro";
      font-style: normal;
      font-weight: 700;
      src: local("Source Sans Pro Bold"), local("SourceSansPro-Bold"), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format("woff");
    }
  }
  /**
   * Avoid browser level font resizing.
   * 1. Windows Mobile
   * 2. iOS / OSX
   */
  body,
  table,
  td,
  a {
    -ms-text-size-adjust: 100%; /* 1 */
    -webkit-text-size-adjust: 100%; /* 2 */
  }
  /**
   * Remove extra space added to tables and cells in Outlook.
   */
  table,
  td {
    mso-table-rspace: 0pt;
    mso-table-lspace: 0pt;
  }
  /**
   * Better fluid images in Internet Explorer.
   */
  img {
    -ms-interpolation-mode: bicubic;
  }
  /**
   * Remove blue links for iOS devices.
   */
  a[x-apple-data-detectors] {
    font-family: inherit !important;
    font-size: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
    color: inherit !important;
    text-decoration: none !important;
  }
  /**
   * Fix centering issues in Android 4.4.
   */
  div[style*="margin: 16px 0;"] {
    margin: 0 !important;
  }
  body {
    width: 100% !important;
    height: 100% !important;
    padding: 0 !important;
    margin: 0 !important;
  }
  /**
   * Collapse table borders to avoid space between cells.
   */
  table {
    border-collapse: collapse !important;
  }
  a {
    color: #1a82e2;
  }
  img {
    height: auto;
    line-height: 100%;
    text-decoration: none;
    border: 0;
    outline: none;
  }
  </style>

</head>
<body style="background-color: #D2C7BA;">

  <!-- start preheader -->
  <div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
   your booking informaion with Koacon2019
  </div>
  <!-- end preheader -->

  <!-- start body -->
  <table border="0" cellpadding="0" cellspacing="0" width="100%">

    <!-- start logo -->
    <tr>
      <td align="center" bgcolor="#D2C7BA">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
          <tr>
            <td align="center" valign="top" style="">
              <a href="http://koacon2019.com/" target="_blank" style="display: inline-block;">
                <img src="http://koacon2019.com/assets/images/emailogofull.jpg" alt="Logo" border="0" width="" style="display: block; width: 600px; max-width: 600px; min-width: 600px;">
              </a>
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- end logo -->

    <!-- start hero -->
    <tr>
      <td align="center" bgcolor="#D2C7BA">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
              <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Thank you for your order!</h1>
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- end hero -->

    <!-- start copy block -->
    <tr>
      <td align="center" bgcolor="#D2C7BA">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

          <!-- start copy -->
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
              <p style="margin: 0;">Hello '.$_SESSION["customer_name"].',</p>
              <p style="margin: 0;">You have successfully booked your ticket</p>
            </td>
          </tr>
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
              <p style="margin: 0;">Here is the summary . If you have any questions or concerns about your order, please <a href="http://koacon2019.com/contact-1.html">contact us</a>.</p>
            </td>
          </tr>
          <!-- end copy -->

          <!-- start receipt table -->
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="left" bgcolor="#D2C7BA" width="75%" style="padding: 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;"><strong>Ticket no #</strong></td>
                  <td align="left" bgcolor="#D2C7BA" width="25%" style="padding: 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;"><strong>'.$_SESSION["ticket_id"].'</strong></td>
                </tr>
                <tr>
                  <td align="left" width="75%" style="padding: 6px 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">package </td>
                  <td align="left" width="25%" style="padding: 6px 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">'.$_SESSION["package"].'</td>
                </tr>  
                <tr>
                  <td align="left" width="75%" style="padding: 6px 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">Workshop</td>
                  <td align="left" width="25%" style="padding: 6px 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">'.$_SESSION["workshopName"].'</td>
                </tr>
                <tr>
                  <td align="left" width="75%" style="padding: 6px 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">Accompanying persons</td>
                  <td align="left" width="25%" style="padding: 6px 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">'.$_SESSION["firstAcPerson"].$_SESSION["secondAcPerson"].'</td>
                </tr>
                
                <tr>
                  <td align="left" width="75%" style="padding: 12px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-top: 2px dashed #D2C7BA; border-bottom: 2px dashed #D2C7BA;"><strong>Total</strong></td>
                  <td align="left" width="25%" style="padding: 12px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-top: 2px dashed #D2C7BA; border-bottom: 2px dashed #D2C7BA;"><strong>'.$_SESSION["ticket_price"].'</strong></td>
                </tr>
              </table>
            </td>
          </tr>
          <!-- end reeipt table -->

        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- end copy block -->

    <!-- start receipt address block -->
    <tr>
      <td align="center" bgcolor="#D2C7BA" valign="top" width="100%">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
          <tr>
            <td align="center" valign="top" style="font-size: 0; border-bottom: 3px solid #d4dadf">
              <!--[if (gte mso 9)|(IE)]>
              <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
              <tr>
              <td align="left" valign="top" width="300">
              <![endif]-->
              <div style="display: inline-block; width: 100%; max-width: 50%; min-width: 240px; vertical-align: top;">
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 300px;">
                  <tr>
                    <td align="left" valign="top" style="padding-bottom: 36px; padding-left: 36px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                      <p><strong>Delivery Address</strong></p>
                      <p>1234 S. Broadway Ave<br>Unit 2<br>Denver, CO 80211</p>
                    </td>
                  </tr>
                </table>
              </div>
              <!--[if (gte mso 9)|(IE)]>
              </td>
              <td align="left" valign="top" width="300">
              <![endif]-->
              <div style="display: inline-block; width: 100%; max-width: 50%; min-width: 240px; vertical-align: top;">
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 300px;">
                  <tr>
                    <td align="left" valign="top" style="padding-bottom: 36px; padding-left: 36px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                      <p><strong>Billing Address</strong></p>
                      <p>1234 S. Broadway Ave<br>Unit 2<br>Denver, CO 80211</p>
                    </td>
                  </tr>
                </table>
              </div>
              <!--[if (gte mso 9)|(IE)]>
              </td>
              </tr>
              </table>
              <![endif]-->
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- end receipt address block -->

    <!-- start footer -->
   
    <!-- end footer -->
</table>
  <!-- end body -->

</body>
</html>
    ';
    $mail->AltBody = 'the body in plain text for non-HTML mail clients';

    $mail->send();
    session_destroy();
    
    // header("Location:http://koacon2019.com/onlineregistration/success.html"); 
    echo "<script type='text/javascript'>window.location.href = 'http://koacon2019.com/onlineregistration/success.php?msg=Thank You! for booking with us. welcome to the event';</script>";
         
   
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
    
  session_destroy();
           
    
}
   


?>