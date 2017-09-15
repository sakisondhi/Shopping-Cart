<?php
$productid = $_REQUEST["pname"];
$productname = $_REQUEST["productname"];
$price = $_REQUEST["tbprice"];
$discount = $_REQUEST["tbdiscount"];
$description = $_REQUEST["tbdesc"];
$brand_id = $_REQUEST["tbbname"];
$subcatid = $_REQUEST["subcategory"];
$categoryid = $_REQUEST["tbcname"];

include "connection.php";

$temp1 = $_FILES["photo1"]["tmp_name"];
$name1 = $_FILES["photo1"]["name"];
$logo1 = "productphoto/$name1";
move_uploaded_file($temp1, $logo1);

$temp2 = $_FILES["photo2"]["tmp_name"];
$name2 = $_FILES["photo2"]["name"];
$logo2 = "productphoto/$name2";
move_uploaded_file($temp2, $logo2);

$temp3 = $_FILES["photo3"]["tmp_name"];
$name3 = $_FILES["photo3"]["name"];
$logo3 = "productphoto/$name1";
move_uploaded_file($temp3, $logo3);

$temp4 = $_FILES["photo4"]["tmp_name"];
$name4 = $_FILES["photo4"]["name"];
$logo4 = "productphoto/$name4";
move_uploaded_file($temp4, $logo4);


$insertquery = "update  products set productname='$productname',photo1='$logo1',photo2='$logo2',photo3='$logo3',photo4='$logo4',
price='$price',discount='$discount',description='$description',brandid='$brand_id',subcategoryid='$subcatid',
categoryid='$categoryid' where productid='$productid'";
if (mysqli_query($con, $insertquery)) {
    echo "details updated";
    echo $insertquery;
    header("location:view_product.php");
}

?>