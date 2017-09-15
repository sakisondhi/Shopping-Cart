<?php
$productid=$_REQUEST["pname"];
include"connection.php";
include "adminheader.php";
$s="delete from products WHERE productid='$productid'";
if (mysqli_query($con,$s));
{
    header("location:view_product.php");
}
