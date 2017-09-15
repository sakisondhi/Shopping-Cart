<?php
$uname=$_REQUEST["username"];
$email=$_REQUEST["tbemail"];
$gender=$_REQUEST["tbgender"];
$usertype=$_REQUEST["tbusertype"];
$fullname=$_REQUEST["tbfullname"];
include "connection.php";
include "adminheader.php";
$s="update admin set username ='$uname',password='$pass',confirmpassword='$pass',email='$email',gender='$tbgender',
usertyp='$tbusertype',fullname='$tbfullname' where username=$uname";
mysqli_query($con,$s);
header("location:view_admin.php");
?>
