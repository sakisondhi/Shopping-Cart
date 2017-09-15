<?php
include"cart.php";
ob_start();
include("connection.php");
@session_start();
include("userheader.php");
$email=$_SESSION["email"];

$arr=array();
$arr=$_SESSION['products'];
$total=$_SESSION['total'];
date_default_timezone_set("Asia/Kolkata");
$date_of_order=date("Y-m-d");
$s="INSERT INTO `order`(`orderid`,  `dateoforder`, `email`,`totalamount`, `status`) VALUES (NULL,'".$date_of_order."','".$email."','".$total."','0')";
mysqli_query($con,$s);

$sql="select MAX(`orderid`) as orderid from `order`";
$sqlresult=mysqli_query($con,$sql);
$sqlrow=mysqli_fetch_array($sqlresult);
$orderid=$sqlrow[0];
echo $orderid;

for($i=0;$i<count($arr);$i++)
{
    $id=$arr[$i]->productid;
    $qty=$arr[$i]->qty;

    $order="INSERT INTO `orderdetail`(`detailid`,`orderid`, `productid`, `qty`) VALUES (NULL,'".$orderid."','".$id."','".$qty."')";
    mysqli_query($con,$order);
    echo $order;
}






$_SESSION['products']=null;
unset($_SESSION['products']);
$_SESSION['total']=null;




try {
    sendemail($email,"Cinfirmed",$orderid);
}

catch (phpmailerException $exception)
    {

        echo $exception;
    }






header("Location:bill.php?q=".$orderid);



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

?>