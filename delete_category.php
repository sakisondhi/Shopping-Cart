<?php
$categoryid=$_REQUEST["cname"];
include "connection.php";
include "adminheader.php";
$s="delete from category where `category id` ='$categoryid'";
echo $s;
if (mysqli_query($con,$s));
{header("location:view_category.php");
}