<?php
$uname=$_REQUEST["username"];
include "connection.php";
include "adminheader.php";
$s="delete from admin where username='$uname'";
if (mysqli_query($con,$s));
{
    header("location:view_admin.php");
}