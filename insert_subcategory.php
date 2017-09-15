<?php


$subcategoryname=$_REQUEST["subcategory"];
$categoryid=$_REQUEST["tbcategory"];

include "connection.php";
$query="select * from subcategory";
$flag=0;
$result=mysqli_query($con,$query);
$insertquery = "insert into subcategory VALUES (null,'$subcategoryname',$categoryid)";
echo $insertquery;
if (mysqli_query($con, $insertquery))
{
    echo "category added";
    header("location:add_subcategory.php?msg=category added");

}
?>