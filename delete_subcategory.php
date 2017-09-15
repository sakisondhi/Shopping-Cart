<?php
$subcategoryid=$_REQUEST["subname"];
include "connection.php";
include "adminheader.php";
$s="delete from subcategory where subcategoryid ='$subcategoryid'";
if (mysqli_query($con,$s));
{
    header("location:view_subcategory.php");
}