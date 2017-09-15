<?php
$subcategoryid=$_REQUEST["subid"];
$selectcategory=$_REQUEST["tbcategory"];
$subcategoryname=$_REQUEST["subcategory"];

include "connection.php";

$insertquery="update  subcategory set selectcategory='$selectcategory',subcategoryname='$subcategoryname'
 where subcategoryid='$subcategoryid'";
if (mysqli_query($con,$insertquery))
{
    echo "details updated";
}

?>