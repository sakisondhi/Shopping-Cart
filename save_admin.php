<?php
$uname=$_REQUEST["tbuname"];
$fullname=$_REQUEST["tbfullname"];

$email=$_REQUEST["tbemail"];
$gender=$_REQUEST["gender"];
$usertype=$_REQUEST["tbusertype"];
include "connection.php";

    $insertquery="update  admin set email='$email',fullname='$fullname',gender='$gender',usertype='$usertype' where username='$uname'";
    if (mysqli_query($con,$insertquery))
    {
        echo "details updated";
    }

?>