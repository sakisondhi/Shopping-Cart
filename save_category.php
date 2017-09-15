<?php
$categoryname=$_REQUEST["tbcname"];
$selectsupercategory=$_REQUEST["tbscategory"];
$categoryid=$_REQUEST["cid"];


include "connection.php";

$insertquery="update  category set `category name`='$categoryname',`super category`='$selectsupercategory' where `category id`=$categoryid";
if (mysqli_query($con,$insertquery))
{
    echo "details updated";
}

?>