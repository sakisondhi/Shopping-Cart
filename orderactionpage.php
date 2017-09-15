<?php
$oid = $_REQUEST["oid"];
$status = $_REQUEST["tbstatus"];
$useremail = $_REQUEST["tbemail"];
include "connection.php";
$sql = "update `order` set status='$status' where orderid='$oid'";

echo $sql;
if (mysqli_query($con, $sql)) {
    header("location:manageorders.php");
    try {
        sendemail($useremail, $status, $oid);
    }
    catch (phpmailerException $exception)
    {

        echo $exception;
    }
}


function sendemail($email, $status, $orderno)
{

//error_reporting(E_ALL);
    error_reporting(E_STRICT);

    //date_default_timezone_set('America/Toronto');
    date_default_timezone_set('Asia/Kolkata');

    require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

    $mail = new PHPMailer();


    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host = "mail.yourdomain.com"; // SMTP server
    $mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)
    // 1 = errors and messages
    // 2 = messages only
    $mail->SMTPAuth = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port = 465;                   // set the SMTP port for the GMAIL server
    $mail->Username = "fashionfiesta1998@gmail.com";  // GMAIL username
    $mail->Password = "fashionfiesta@1998";            // GMAIL password

    $mail->SetFrom('fashionfiesta1998@gmail.com', 'fashionfiesta');

    $mail->AddReplyTo("fashionfiesta1998@gmail.com", "fashionfiesta");

    $mail->Subject = "MCP Order Status";

    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    $body = "Dear User ,<br>Your Order with Billno $orderno has been $status. Thanks for Shopping with us<br> regards MCP Arena";
    $mail->MsgHTML($body);

    $address = $email;
    $mail->AddAddress($address, "User");
    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }
}




