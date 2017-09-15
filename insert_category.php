<?php
$categoryid=$_REQUEST["cname"];
$categoryname=$_REQUEST["tbcname"];
$selectsupercategory=$_REQUEST["tbscategory"];

include "connection.php";
$query="select * from category";
$flag=0;
$result=mysqli_query($con,$query);
$insertquery = "insert into category value(null,'$categoryname','$selectsupercategory')";
if (mysqli_query($con, $insertquery))
{
    echo "category added";
    header("location:add_category.php?msg=category added");

}
?>